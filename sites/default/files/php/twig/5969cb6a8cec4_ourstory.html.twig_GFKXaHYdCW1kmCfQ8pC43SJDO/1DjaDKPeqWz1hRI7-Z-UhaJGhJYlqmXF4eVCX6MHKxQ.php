<?php

/* modules/custom/sachlife_content/templates/ourstory.html.twig */
class __TwigTemplate_7e3e18a5c953fbd5dca9325627561336b3f885b0b2f8bb7d2e97af12559fd9f3 extends Twig_Template
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
        $tags = array("for" => 1);
        $filters = array();
        $functions = array("file_url" => 3);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
                array(),
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 2
            echo "<section id=\"page-header-secion\" class=\"alter-heading\">
  <div class=\"page-header-image parallax bg-image\" style=\"background-image: url(";
            // line 3
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($context["value"], "backgroundImage", array()))), "html", null, true));
            echo "); background-position: 50% 73%;\"></div>
    <div class=\"cover page-header-cover\"></div>
    <div class=\"container page-header-content no-padding max-width-800 text-center\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h1 class=\"album-title\">About Us</h1>
        </div>
      </div>
    </div>
</section>
<section id=\"content-section\" class=\"page page-about-us\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"content-wrap\">
          <div class=\"row margin-bottom-60\">
            <div class=\"col-md-12\">
              <h3>";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["value"], "title", array()), "html", null, true));
            echo "</h3>
              <hr class=\"hr-short\">
              ";
            // line 22
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["value"], "description", array()), "html", null, true));
            echo "
            </div>
          </div>

          <div class=\"row margin-top-40 text-center\">
            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["value"], "users", array()));
            foreach ($context['_seq'] as $context["keyUser"] => $context["valueUser"]) {
                // line 28
                echo "            <div class=\"col-sm-4\">
              <img src=\"";
                // line 29
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($context["valueUser"], "uri", array()))), "html", null, true));
                echo "\" alt=\"image\" class=\"hover-opacity\">
              <div class=\"social-icons margin-top-40 margin-bottom-30\">
                <h6 class=\"head\">";
                // line 31
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["valueUser"], "username", array()), "html", null, true));
                echo "</h6>
                <ul>
                  ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["valueUser"], "social", array()));
                foreach ($context['_seq'] as $context["keySocial"] => $context["valueSocial"]) {
                    // line 34
                    echo "                  <li>
                    <a target=\"_blank\" href=\"";
                    // line 35
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["valueSocial"], "link", array()), "html", null, true));
                    echo "\" title=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["valueSocial"], "title", array()), "html", null, true));
                    echo "\">
                      <i class=\"fa ";
                    // line 36
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["valueSocial"], "linkClass", array()), "html", null, true));
                    echo "\"></i>
                    </a>
                  </li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['keySocial'], $context['valueSocial'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                </ul>
              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyUser'], $context['valueUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "          </div>
          <div class=\"row margin-top-40\">
            <div class=\"col-md-12 text-center\">
              <a href=\"#\" class=\"btn btn-default btn-rounded-5x\">View Our Work</a>
              <a href=\"#\" class=\"btn btn-primary btn-rounded-5x\">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/custom/sachlife_content/templates/ourstory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 44,  123 => 40,  113 => 36,  107 => 35,  104 => 34,  100 => 33,  95 => 31,  90 => 29,  87 => 28,  83 => 27,  75 => 22,  70 => 20,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% for key,value in content %}
<section id=\"page-header-secion\" class=\"alter-heading\">
  <div class=\"page-header-image parallax bg-image\" style=\"background-image: url({{ file_url(value.backgroundImage) }}); background-position: 50% 73%;\"></div>
    <div class=\"cover page-header-cover\"></div>
    <div class=\"container page-header-content no-padding max-width-800 text-center\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h1 class=\"album-title\">About Us</h1>
        </div>
      </div>
    </div>
</section>
<section id=\"content-section\" class=\"page page-about-us\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"content-wrap\">
          <div class=\"row margin-bottom-60\">
            <div class=\"col-md-12\">
              <h3>{{ value.title }}</h3>
              <hr class=\"hr-short\">
              {{ value.description }}
            </div>
          </div>

          <div class=\"row margin-top-40 text-center\">
            {% for keyUser,valueUser in value.users %}
            <div class=\"col-sm-4\">
              <img src=\"{{ file_url(valueUser.uri) }}\" alt=\"image\" class=\"hover-opacity\">
              <div class=\"social-icons margin-top-40 margin-bottom-30\">
                <h6 class=\"head\">{{ valueUser.username }}</h6>
                <ul>
                  {% for keySocial, valueSocial in valueUser.social %}
                  <li>
                    <a target=\"_blank\" href=\"{{ valueSocial.link }}\" title=\"{{ valueSocial.title }}\">
                      <i class=\"fa {{ valueSocial.linkClass }}\"></i>
                    </a>
                  </li>
                  {% endfor %}
                </ul>
              </div>
            </div>
            {% endfor %}
          </div>
          <div class=\"row margin-top-40\">
            <div class=\"col-md-12 text-center\">
              <a href=\"#\" class=\"btn btn-default btn-rounded-5x\">View Our Work</a>
              <a href=\"#\" class=\"btn btn-primary btn-rounded-5x\">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{% endfor %}";
    }
}