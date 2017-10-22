<?php

/* themes/custom/sachlife/templates/article/page--article.html.twig */
class __TwigTemplate_30fc661e24393f14574886813e12f5791aa8c794135ec38ab0a565821feaba4a extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preloader", array()), "html", null, true));
        echo "
<header id=\"header\" class=\"fixed-top\">
  <div class=\"header-inner\">
    ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_1", array()), "html", null, true));
        echo "
    <nav class=\"navbar navbar-default\">
      ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_2", array()), "html", null, true));
        echo "
    </nav>
  </div>
</header>
<nav id=\"cd-lateral-nav\">
  ";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "side_bar", array()), "html", null, true));
        echo "
</nav>
<div id=\"body-content\">
  <section id=\"page-header-secion\" class=\"alter-heading\">
    ";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "headerImage", array()), "html", null, true));
        echo "
    <div class=\"cover page-header-cover\"></div>
    <div class=\"container page-header-content no-padding max-width-800 text-center\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h1 class=\"album-title\">";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "heading", array()), "html", null, true));
        echo "</h1>
        </div>
      </div>
    </div>
  </section>
  <section id=\"content-section\" class=\"page\">
    <div class=\"container max-width-1300\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"content-wrap\">
            <div class=\"blog-list\">
              <div class=\"row\">
                ";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                <div class=\"col-md-4\">
                  <div class=\"sidebar sidebar-right\">
                    <div class=\"row\">
                      <div class=\"col-sm-12\">
                        <div class=\"sidebar-widget sidebar-search no-margin-top\">
                          <form action =\"/search/node\" id=\"blog-search-form\">
                            <div class=\"form-group\">
                              <input type=\"text\" class=\"form-control\" id=\"blog-search\"
                                     name=\"search\" placeholder=\"Search\">
                              <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class=\"col-md-12 col-sm-6\">
                        ";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "categories", array()), "html", null, true));
        echo "
                      </div>
                      <div class=\"col-md-12 col-sm-6\">
                        ";
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "posts", array()), "html", null, true));
        echo "
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer id=\"footer\">
    <div class=\"footer-inner\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-sm-6\">
            ";
        // line 68
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer1", array()), "html", null, true));
        echo "
          </div>
          <div class=\"col-sm-6\">
            ";
        // line 71
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer2", array()), "html", null, true));
        echo "
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<a href=\"#body\" class=\"scrolltoztop sm-scroll\"><i class=\"fa fa-chevron-up\"></i></a>";
    }

    public function getTemplateName()
    {
        return "themes/custom/sachlife/templates/article/page--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 71,  137 => 68,  117 => 51,  111 => 48,  92 => 32,  77 => 20,  69 => 15,  62 => 11,  54 => 6,  49 => 4,  43 => 1,);
    }

    public function getSource()
    {
        return "{{ page.preloader }}
<header id=\"header\" class=\"fixed-top\">
  <div class=\"header-inner\">
    {{ page.header_1 }}
    <nav class=\"navbar navbar-default\">
      {{ page.header_2 }}
    </nav>
  </div>
</header>
<nav id=\"cd-lateral-nav\">
  {{ page.side_bar }}
</nav>
<div id=\"body-content\">
  <section id=\"page-header-secion\" class=\"alter-heading\">
    {{ page.headerImage }}
    <div class=\"cover page-header-cover\"></div>
    <div class=\"container page-header-content no-padding max-width-800 text-center\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h1 class=\"album-title\">{{ page.heading }}</h1>
        </div>
      </div>
    </div>
  </section>
  <section id=\"content-section\" class=\"page\">
    <div class=\"container max-width-1300\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"content-wrap\">
            <div class=\"blog-list\">
              <div class=\"row\">
                {{ page.content }}
                <div class=\"col-md-4\">
                  <div class=\"sidebar sidebar-right\">
                    <div class=\"row\">
                      <div class=\"col-sm-12\">
                        <div class=\"sidebar-widget sidebar-search no-margin-top\">
                          <form action =\"/search/node\" id=\"blog-search-form\">
                            <div class=\"form-group\">
                              <input type=\"text\" class=\"form-control\" id=\"blog-search\"
                                     name=\"search\" placeholder=\"Search\">
                              <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class=\"col-md-12 col-sm-6\">
                        {{ page.categories }}
                      </div>
                      <div class=\"col-md-12 col-sm-6\">
                        {{ page.posts }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer id=\"footer\">
    <div class=\"footer-inner\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-sm-6\">
            {{ page.footer1 }}
          </div>
          <div class=\"col-sm-6\">
            {{ page.footer2 }}
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<a href=\"#body\" class=\"scrolltoztop sm-scroll\"><i class=\"fa fa-chevron-up\"></i></a>";
    }
}