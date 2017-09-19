<?php

/* modules/custom/sachlife_content/templates/homepage.html.twig */
class __TwigTemplate_0b39777b5cec7ee9fcbdb40348a96c05e02f9d59f2b6365281f32bae30378b0b extends Twig_Template
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
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 2
            echo "<section id=\"intro-section\" class=\"full-page bg-image-scroll-vertical\"
         style=\"background-image: url(";
            // line 3
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($context["key"], "uri", array()))), "html", null, true));
            echo "); background-position: 50% 50%;\">
  <div class=\"cover bg-transparent-6-dark\"></div>
    <div class=\"intro-caption bg-transparent-8-dark text-gray-3\">
      <h1 class=\"intro-title\">";
            // line 6
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["key"], "title", array()), "html", null, true));
            echo "</h1>
      <p class=\"intro-text hide-from-xs\">";
            // line 7
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["key"], "body_value", array()), "html", null, true));
            echo "</p>
      <div class=\"intro-button-wrap\">
        <a href=\"";
            // line 9
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["key"], "field_home_page_link_value", array()), "html", null, true));
            echo "\"
          class=\"btn btn-primary btn-rounded-5x margin-top-10 hide-from-xs\">
            ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["key"], "field_home_page_link_text_value", array()), "html", null, true));
            echo "
        </a>
      </div>
    </div>
    <div class=\"made-with-love hide-from-sm\">
      <p>Made With <span class=\"text-red\"><i class=\"fa fa-heart-o\"></i></span></p>
  </div>
</section>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/custom/sachlife_content/templates/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  65 => 9,  60 => 7,  56 => 6,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% for key in content %}
<section id=\"intro-section\" class=\"full-page bg-image-scroll-vertical\"
         style=\"background-image: url({{ file_url(key.uri) }}); background-position: 50% 50%;\">
  <div class=\"cover bg-transparent-6-dark\"></div>
    <div class=\"intro-caption bg-transparent-8-dark text-gray-3\">
      <h1 class=\"intro-title\">{{ key.title }}</h1>
      <p class=\"intro-text hide-from-xs\">{{ key.body_value }}</p>
      <div class=\"intro-button-wrap\">
        <a href=\"{{ key.field_home_page_link_value }}\"
          class=\"btn btn-primary btn-rounded-5x margin-top-10 hide-from-xs\">
            {{ key.field_home_page_link_text_value }}
        </a>
      </div>
    </div>
    <div class=\"made-with-love hide-from-sm\">
      <p>Made With <span class=\"text-red\"><i class=\"fa fa-heart-o\"></i></span></p>
  </div>
</section>
{% endfor %}";
    }
}
