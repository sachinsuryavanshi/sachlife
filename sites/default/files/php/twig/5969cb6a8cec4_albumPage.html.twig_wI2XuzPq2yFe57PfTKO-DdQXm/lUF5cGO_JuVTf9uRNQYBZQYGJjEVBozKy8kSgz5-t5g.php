<?php

/* modules/custom/sachlife_album/templates/albumPage.html.twig */
class __TwigTemplate_a18e6e3fc3428dac2739e9c43572efe714284199081d4c968682a509251ae03c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 34, "for" => 35);
        $filters = array("raw" => 21, "slice" => 21, "length" => 34, "replace" => 36, "image_style" => 92);
        $functions = array("file_url" => 14);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('raw', 'slice', 'length', 'replace', 'image_style'),
                array('file_url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<section id=\"page-header-secion\">
  <div class=\"page-header-image parallax bg-image\"
       style=\"background-image: url(assets/img/headings/heading-blur-1.jpg); background-position: 50% 50%;\"></div>
  <div class=\"cover page-header-cover\"></div>
  <div class=\"container-fluid page-header-content no-padding\">
    <div class=\"row\">
      <div class=\"col-md-4\">
        <h1 class=\"album-title\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array()), "html", null, true));
        echo "</h1>
        <div class=\"album-meta\">
          <span class=\"photos-count\">";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "imageCount", array()), "html", null, true));
        echo " Photos</span>
        </div>
        <div class=\"author\">
          <a href=\"#\" class=\"author-avatar bg-image\"
             style=\"background-image: url(";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "authorAvatar", array()))), "html", null, true));
        echo "); background-position: 50% 50%;\"></a>
          <a href=\"\" class=\"author-info\">- by: ";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "author", array()), "html", null, true));
        echo "</a>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"album-description\">
          <div class=\"al-desc-inner\">
            <p>";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(twig_slice($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "description", array()), 0, 150)));
        echo "</p>
            <div class=\"al-desc-toggle\">
              <p>";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(twig_slice($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "description", array()), 151)));
        echo "</p>
            </div>
          </div>
          <div class=\"al-desc-toggle-trigger\">
            <span class=\"al-desc-more\"><i class=\"fa fa-chevron-down\"></i> More</span>
            <span class=\"al-desc-less\"><i class=\"fa fa-chevron-up\"></i> Less</span>
          </div>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"album-nav\">
          ";
        // line 34
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "nodePrevNavigation", array())) > 0)) {
            // line 35
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "nodePrevNavigation", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["keyPrev"]) {
                // line 36
                echo "              <a href=\"/albumPage/";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["keyPrev"], "nid", array()), "html", null, true));
                echo "/";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["keyPrev"], "title", array()), array(" " => "-")), "html", null, true));
                echo "\"
                 class=\"an-item prev-album bg-image\"
                 style=\"background-image: url(assets/img/album-list/grid/img-2.jpg); background-position: 50% 50%;\"
                 title=\"Previous album\">
                <div class=\"cover\"></div>
                <div class=\"an-item-info\">
                  <span class=\"an-icon\"><i class=\"fa fa-chevron-left\"></i></span>
                  <span class=\"an-text\">Prev</span>
                </div>
              </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyPrev'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "          ";
        }
        // line 48
        echo "          <a href=\"/album\" class=\"an-item to-album-list bg-image\"
             style=\"background-image: url(assets/img/album-list/grid/img-4.jpg); background-position: 50% 50%;\"
             title=\"Back to album list\">
            <!-- Element cover -->
            <div class=\"cover\"></div>

            <div class=\"an-item-info\">
              <span class=\"an-icon\"><i class=\"fa fa-th-list\"></i></span>
              <span class=\"an-text\">List</span>
            </div>
          </a>
          ";
        // line 59
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "nodeNextNavigation", array())) > 0)) {
            // line 60
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "nodeNextNavigation", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["keyNext"]) {
                // line 61
                echo "              <a href=\"/albumPage/";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["keyNext"], "nid", array()), "html", null, true));
                echo "/";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["keyNext"], "title", array()), array(" " => "-")), "html", null, true));
                echo "\"
                 class=\"an-item next-album bg-image\"
                 style=\"background-image: url(assets/img/album-list/grid/img-7.jpg); background-position: 50% 50%;\"
                 title=\"Next album\">
                <div class=\"cover\"></div>
                <div class=\"an-item-info\">
                  <span class=\"an-icon\"><i class=\"fa fa-chevron-right\"></i></span>
                  <span class=\"an-text\">Next</span>
                </div>
              </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyNext'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "          ";
        }
        // line 73
        echo "        </div>
      </div>
    </div>
  </div>


</section>
<section id=\"content-section\" class=\"album-single\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"content-wrap\">
          <div class=\"isotope gutter-3 col-3\">
            <div id=\"gallery\" class=\"isotope-items-wrap lightgallery hover-center hover-boxed\">
              <div class=\"grid-sizer\"></div>
              ";
        // line 88
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "photographs", array())) > 0)) {
            // line 89
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "photographs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["keyPhoto"]) {
                // line 90
                echo "              <div class=\"isotope-item\">
                <div class=\"album-single-item\">
                  <img class=\"asi-img\" src=\"";
                // line 92
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->env->getExtension('twig_tweak')->imageStyle($this->getAttribute($context["keyPhoto"], "target_id", array()), "portfolio_grid_thumbnail"))), "html", null, true));
                echo "\" alt=\"image\">
                  <!-- Begin item cover -->
                  <div class=\"asi-cover\">
                    <a class=\"asi-link lg-trigger\" href=\"";
                // line 95
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($context["keyPhoto"], "target_id", array()))), "html", null, true));
                echo "\"
                       data-exthumbnail=\"";
                // line 96
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->env->getExtension('twig_tweak')->imageStyle($this->getAttribute($context["keyPhoto"], "target_id", array()), "photographs_thumbnail"))), "html", null, true));
                echo "\"
                       data-sub-html=\"<h4>";
                // line 97
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["keyPhoto"], "title", array()), "html", null, true));
                echo "</h4><p>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["keyPhoto"], "title", array()), "html", null, true));
                echo "</p>\">
                      <div class=\"asi-info\">
                        <span class=\"s-icon\"><i class=\"fa fa-search\"></i></span>
                      </div>
                    </a>
                  </div>
                  <!-- End item cover -->
                </div>
              </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyPhoto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "              ";
        }
        // line 108
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"album-bottom-nav\">
      ";
        // line 114
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "nodePrevNavigation", array())) > 0)) {
            // line 115
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "nodePrevNavigation", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["keyPrev"]) {
                // line 116
                echo "      <div class=\"abn-item prev-album\">
        <a href=\"/albumPage/";
                // line 117
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["keyPrev"], "nid", array()), "html", null, true));
                echo "/";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["keyPrev"], "title", array()), array(" " => "-")), "html", null, true));
                echo "\" title=\"Previous album\">
          <span class=\"abn-icon\"><i class=\"fa fa-chevron-left\"></i></span>
          <span class=\"abn-text\">Prev<span class=\"hide-from-xs\">ious</span> Album</span>
        </a>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyPrev'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "      ";
        }
        // line 124
        echo "      ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "nodeNextNavigation", array())) > 0)) {
            // line 125
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "nodeNextNavigation", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["keyNext"]) {
                // line 126
                echo "      <div class=\"abn-item next-album\">
        <a href=\"/albumPage/";
                // line 127
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["keyNext"], "nid", array()), "html", null, true));
                echo "/";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["keyNext"], "title", array()), array(" " => "-")), "html", null, true));
                echo "\" title=\"Next album\">
          <span class=\"abn-text\">Next Album</span>
          <span class=\"abn-icon\"><i class=\"fa fa-chevron-right\"></i></span>
        </a>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyNext'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "      ";
        }
        // line 134
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modules/custom/sachlife_album/templates/albumPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 134,  292 => 133,  278 => 127,  275 => 126,  270 => 125,  267 => 124,  264 => 123,  250 => 117,  247 => 116,  242 => 115,  240 => 114,  232 => 108,  229 => 107,  211 => 97,  207 => 96,  203 => 95,  197 => 92,  193 => 90,  188 => 89,  186 => 88,  169 => 73,  166 => 72,  146 => 61,  141 => 60,  139 => 59,  126 => 48,  123 => 47,  103 => 36,  98 => 35,  96 => 34,  82 => 23,  77 => 21,  68 => 15,  64 => 14,  57 => 10,  52 => 8,  43 => 1,);
    }

    public function getSource()
    {
        return "<section id=\"page-header-secion\">
  <div class=\"page-header-image parallax bg-image\"
       style=\"background-image: url(assets/img/headings/heading-blur-1.jpg); background-position: 50% 50%;\"></div>
  <div class=\"cover page-header-cover\"></div>
  <div class=\"container-fluid page-header-content no-padding\">
    <div class=\"row\">
      <div class=\"col-md-4\">
        <h1 class=\"album-title\">{{ content.title }}</h1>
        <div class=\"album-meta\">
          <span class=\"photos-count\">{{ content.imageCount }} Photos</span>
        </div>
        <div class=\"author\">
          <a href=\"#\" class=\"author-avatar bg-image\"
             style=\"background-image: url({{ file_url(content.authorAvatar) }}); background-position: 50% 50%;\"></a>
          <a href=\"\" class=\"author-info\">- by: {{ content.author }}</a>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"album-description\">
          <div class=\"al-desc-inner\">
            <p>{{ content.description|slice(0,150)|raw }}</p>
            <div class=\"al-desc-toggle\">
              <p>{{ content.description|slice(151)|raw }}</p>
            </div>
          </div>
          <div class=\"al-desc-toggle-trigger\">
            <span class=\"al-desc-more\"><i class=\"fa fa-chevron-down\"></i> More</span>
            <span class=\"al-desc-less\"><i class=\"fa fa-chevron-up\"></i> Less</span>
          </div>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"album-nav\">
          {% if content.nodePrevNavigation|length > 0 %}
            {% for keyPrev in content.nodePrevNavigation %}
              <a href=\"/albumPage/{{ keyPrev.nid }}/{{ keyPrev.title|replace({' ':'-'}) }}\"
                 class=\"an-item prev-album bg-image\"
                 style=\"background-image: url(assets/img/album-list/grid/img-2.jpg); background-position: 50% 50%;\"
                 title=\"Previous album\">
                <div class=\"cover\"></div>
                <div class=\"an-item-info\">
                  <span class=\"an-icon\"><i class=\"fa fa-chevron-left\"></i></span>
                  <span class=\"an-text\">Prev</span>
                </div>
              </a>
            {% endfor %}
          {% endif %}
          <a href=\"/album\" class=\"an-item to-album-list bg-image\"
             style=\"background-image: url(assets/img/album-list/grid/img-4.jpg); background-position: 50% 50%;\"
             title=\"Back to album list\">
            <!-- Element cover -->
            <div class=\"cover\"></div>

            <div class=\"an-item-info\">
              <span class=\"an-icon\"><i class=\"fa fa-th-list\"></i></span>
              <span class=\"an-text\">List</span>
            </div>
          </a>
          {% if content.nodeNextNavigation|length > 0 %}
            {% for keyNext in content.nodeNextNavigation %}
              <a href=\"/albumPage/{{ keyNext.nid }}/{{ keyNext.title|replace({' ':'-'}) }}\"
                 class=\"an-item next-album bg-image\"
                 style=\"background-image: url(assets/img/album-list/grid/img-7.jpg); background-position: 50% 50%;\"
                 title=\"Next album\">
                <div class=\"cover\"></div>
                <div class=\"an-item-info\">
                  <span class=\"an-icon\"><i class=\"fa fa-chevron-right\"></i></span>
                  <span class=\"an-text\">Next</span>
                </div>
              </a>
            {% endfor %}
          {% endif %}
        </div>
      </div>
    </div>
  </div>


</section>
<section id=\"content-section\" class=\"album-single\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"content-wrap\">
          <div class=\"isotope gutter-3 col-3\">
            <div id=\"gallery\" class=\"isotope-items-wrap lightgallery hover-center hover-boxed\">
              <div class=\"grid-sizer\"></div>
              {% if content.photographs|length > 0 %}
              {% for keyPhoto in content.photographs %}
              <div class=\"isotope-item\">
                <div class=\"album-single-item\">
                  <img class=\"asi-img\" src=\"{{ file_url(keyPhoto.target_id|image_style('portfolio_grid_thumbnail')) }}\" alt=\"image\">
                  <!-- Begin item cover -->
                  <div class=\"asi-cover\">
                    <a class=\"asi-link lg-trigger\" href=\"{{ file_url(keyPhoto.target_id) }}\"
                       data-exthumbnail=\"{{ file_url(keyPhoto.target_id|image_style('photographs_thumbnail')) }}\"
                       data-sub-html=\"<h4>{{ keyPhoto.title }}</h4><p>{{ keyPhoto.title }}</p>\">
                      <div class=\"asi-info\">
                        <span class=\"s-icon\"><i class=\"fa fa-search\"></i></span>
                      </div>
                    </a>
                  </div>
                  <!-- End item cover -->
                </div>
              </div>
              {% endfor %}
              {% endif %}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"album-bottom-nav\">
      {% if content.nodePrevNavigation|length > 0 %}
      {% for keyPrev in content.nodePrevNavigation %}
      <div class=\"abn-item prev-album\">
        <a href=\"/albumPage/{{ keyPrev.nid }}/{{ keyPrev.title|replace({' ':'-'}) }}\" title=\"Previous album\">
          <span class=\"abn-icon\"><i class=\"fa fa-chevron-left\"></i></span>
          <span class=\"abn-text\">Prev<span class=\"hide-from-xs\">ious</span> Album</span>
        </a>
      </div>
      {% endfor %}
      {% endif %}
      {% if content.nodeNextNavigation|length > 0 %}
      {% for keyNext in content.nodeNextNavigation %}
      <div class=\"abn-item next-album\">
        <a href=\"/albumPage/{{ keyNext.nid }}/{{ keyNext.title|replace({' ':'-'}) }}\" title=\"Next album\">
          <span class=\"abn-text\">Next Album</span>
          <span class=\"abn-icon\"><i class=\"fa fa-chevron-right\"></i></span>
        </a>
      </div>
      {% endfor %}
      {% endif %}
    </div>
  </div>
</section>";
    }
}
