<?php

/* modules/custom/sachlife_paintings/templates/paintingthreegrid.html.twig */
class __TwigTemplate_f0d8e5059612208b553f81f856d950d503332b74b01203fef9e16e947ba43b6d extends Twig_Template
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
        $tags = array("if" => 19, "for" => 21);
        $filters = array("length" => 19, "lower" => 22, "replace" => 22, "image_style" => 39);
        $functions = array("file_url" => 39);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('length', 'lower', 'replace', 'image_style'),
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
        echo "<section id=\"content-section\" class=\"portfolio-list-masonry\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"content-wrap\">
          <div class=\"isotope gutter-3 col-3\">
            <div class=\"gallery-top-content\">
              <div class=\"row margin-bottom-40\">
                <div class=\"col-md-8\">
                  <div class=\"isotope-filter\">
                    <div class=\"navbar-header visible-xs\">
                      <button type=\"button\" class=\"navbar-toggle collapsed filter-toggle-btn\" data-toggle=\"collapse\"
                              data-target=\"#isotope-filter-collapse\">
                        <span class=\"text-center\">Filter <i class=\"fa fa-bars\"></i></span>
                      </button>
                    </div>
                    <h2 class=\"filter-heading\">Filters</h2>
                    <div class=\"isotope-filter-links collapse navbar-collapse no-padding\" id=\"isotope-filter-collapse\">
                      ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["categoryList"]) ? $context["categoryList"] : null)) > 0)) {
            // line 20
            echo "                        <a class=\"active\" href=\"#\" data-filter=\"*\">all</a>
                        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoryList"]) ? $context["categoryList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["keyList"]) {
                // line 22
                echo "                          <a href=\"#\" data-filter=\".";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_lower_filter($this->env, twig_replace_filter($context["keyList"], " ", "-")), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["keyList"], "html", null, true));
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyList'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                      ";
        }
        // line 25
        echo "                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"isotope-items-wrap ali-style-2 caption-outside\">
              <div class=\"grid-sizer\"></div>
              ";
        // line 32
        if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : null)) > 0)) {
            // line 33
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 34
                echo "                  <div class=\"isotope-item ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["value"], "category", array())), "html", null, true));
                echo "\">
                    <div class=\"album-list-item\">
                      <a class=\"ali-link\" href=\"/painting/";
                // line 36
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["key"], "html", null, true));
                echo "/";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["value"], "title", array()), array(" " => "-")), "html", null, true));
                echo "\">
                        <div class=\"ali-img-wrap\">
                          <img class=\"ali-img\"
                               src=\"";
                // line 39
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->env->getExtension('twig_tweak')->imageStyle($this->getAttribute($context["value"], "coverPhoto", array()), "portfolio_grid_thumbnail"))), "html", null, true));
                echo "\"
                               alt=\"image\">
                        </div>
                        <div class=\"ali-caption\">
                          <h2 class=\"ali-title\">";
                // line 43
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["value"], "title", array()), "html", null, true));
                echo "</h2>
                          <div class=\"ali-meta\">";
                // line 44
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["value"], "imageCount", array()), "html", null, true));
                echo " photos</div>
                        </div>
                      </a>
                    </div>
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "              ";
        }
        // line 51
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modules/custom/sachlife_paintings/templates/paintingthreegrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 51,  139 => 50,  127 => 44,  123 => 43,  116 => 39,  108 => 36,  102 => 34,  97 => 33,  95 => 32,  86 => 25,  83 => 24,  72 => 22,  68 => 21,  65 => 20,  63 => 19,  43 => 1,);
    }

    public function getSource()
    {
        return "<section id=\"content-section\" class=\"portfolio-list-masonry\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"content-wrap\">
          <div class=\"isotope gutter-3 col-3\">
            <div class=\"gallery-top-content\">
              <div class=\"row margin-bottom-40\">
                <div class=\"col-md-8\">
                  <div class=\"isotope-filter\">
                    <div class=\"navbar-header visible-xs\">
                      <button type=\"button\" class=\"navbar-toggle collapsed filter-toggle-btn\" data-toggle=\"collapse\"
                              data-target=\"#isotope-filter-collapse\">
                        <span class=\"text-center\">Filter <i class=\"fa fa-bars\"></i></span>
                      </button>
                    </div>
                    <h2 class=\"filter-heading\">Filters</h2>
                    <div class=\"isotope-filter-links collapse navbar-collapse no-padding\" id=\"isotope-filter-collapse\">
                      {% if categoryList|length > 0 %}
                        <a class=\"active\" href=\"#\" data-filter=\"*\">all</a>
                        {% for keyList in categoryList %}
                          <a href=\"#\" data-filter=\".{{ keyList|replace(' ', '-')|lower }}\">{{ keyList }}</a>
                        {% endfor %}
                      {% endif %}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"isotope-items-wrap ali-style-2 caption-outside\">
              <div class=\"grid-sizer\"></div>
              {% if content|length > 0 %}
                {% for key,value in content %}
                  <div class=\"isotope-item {{ value.category|lower }}\">
                    <div class=\"album-list-item\">
                      <a class=\"ali-link\" href=\"/painting/{{ key }}/{{ value.title|replace({' ':'-'}) }}\">
                        <div class=\"ali-img-wrap\">
                          <img class=\"ali-img\"
                               src=\"{{ file_url(value.coverPhoto|image_style('portfolio_grid_thumbnail')) }}\"
                               alt=\"image\">
                        </div>
                        <div class=\"ali-caption\">
                          <h2 class=\"ali-title\">{{ value.title }}</h2>
                          <div class=\"ali-meta\">{{ value.imageCount }} photos</div>
                        </div>
                      </a>
                    </div>
                  </div>
                {% endfor %}
              {% endif %}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>";
    }
}
