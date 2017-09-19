<?php

namespace Drupal\sachlife_portfolio\Controller;

use \Drupal\Core\Controller\ControllerBase;
use Drupal\file\Entity\File;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;

/**
 * Class SachlifePortfolioPageController
 *
 * @package Drupal\sachlife_portfolio\Controller
 */
class SachlifePortfolioPageController extends ControllerBase {

  public function portfolioList() {
    $query = \Drupal::database()->select('node_field_data', 'nfd');
    $query->fields('nfd', ['nid', 'title', 'created', 'uid']);
    $query->condition('type', 'photographs');
    $content = $query->execute()->fetchAllAssoc('nid');

    $contentData = [];
    foreach ($content as $key => $value) {
      $contentData[$key]['author'] = $this->getUserInfo($value->uid);
      $contentData[$key]['title'] = $value->title;
      $contentData[$key]['created'] = $value->created;
      $contentData[$key]['coverPhoto'] = $this->getCoverPhotograph($key);
      $contentData[$key]['imageCount'] = $this->getImageCount($key);
      $contentData[$key]['category'] = $this->getCategory($key);
    }

    $categoryList = $this->getCategoryList();

    //echo '<pre>';print_r($categoryList);exit;
    $build = [];
    $build['portfolio'] = [
      '#theme' => 'portfoliothreegrid',
      '#content' => $contentData,
      '#categoryList' => $categoryList,
    ];
    return $build;
  }

  public function portfolio($nid){
    $contentNode = Node::load($nid);
    echo '<pre>';print_r($contentNode);exit;
    /**


    $content['title'] = $contentNode->getTitle();
    $content['description'] = $contentNode->body->value;
    $content['category'] = $contentNode->get('field_category_section')->getValue();
    $content['photographs'] = $contentNode->get('field_photographs')->getValue();
    $content['photographsTags'] = $contentNode->get('field_photography_tags')->getValue();
    echo '<pre>';print_r($contentNode);exit;
     */
    return array();
  }

  /**
   * @param $uid
   *
   * @return mixed
   */
  private function getUserInfo($uid) {
    $account = User::load($uid);
    $author = $account->get('field_first_name')->value . ' ' . $account->get('field_last_name')->value;
    return $author;
  }

  private function getCoverPhotograph($entityID) {
    $query = \Drupal::database()->select('node__field_photographs', 'nfb');
    $query->fields('nfb', ['field_photographs_target_id']);
    $query->condition('entity_id', $entityID);
    $query->range(0, 1);
    $imageID = $query->execute()->fetchField();
    $imageSrc = File::load($imageID)->getFileUri();
    return $imageSrc;
  }

  private function getImageCount($entityID) {
    $query = \Drupal::database()->select('node__field_photographs', 'nfp');
    $query->addExpression('COUNT(*)');
    $query->condition('entity_id', $entityID);
    $count = $query->execute()->fetchField();
    return $count;
  }

  /**
   * @param $nid
   *
   * @return string
   */
  private function getCategory($nid){
    $categoryTerm = '';
    $termArray = array();
    $query = \Drupal::database()->select('node__field_category_section', 'nfc');
    $query->leftJoin('taxonomy_term_field_data', 'ttf', 'ttf.tid = nfc.field_category_section_target_id');
    $query->fields('nfc', ['field_category_section_target_id']);
    $query->addField('ttf', 'name');
    $query->condition('nfc.entity_id', $nid);
    $termContent = $query->execute()->fetchAllAssoc('field_category_section_target_id');
    if(is_array($termContent) || is_object($termContent)){
      foreach ($termContent as $keyTerm=>$valueTerm){
        $termArray[] = str_replace(' ', '-', $valueTerm->name);
      }
      $categoryTerm = implode(' ', $termArray);
    }
    return $categoryTerm;
  }

  private function getCategoryList(){
    $termArray = array();
    $query = \Drupal::database()->select('taxonomy_term_field_data', 'ttf');
    $query->fields('ttf', ['tid', 'name']);
    $query->condition('vid', 'category');
    $termContent = $query->execute()->fetchAllAssoc('tid');
    if(is_array($termContent) || is_object($termContent)){
      foreach ($termContent as $key=>$value){
        $termArray[$key] = $value->name;
      }
    }
    return $termArray;
  }

}
