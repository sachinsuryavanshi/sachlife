<?php

/* modules/custom/sachlife_content/templates/blogList.html.twig */
class __TwigTemplate_c8b2a89b5ea86fa940eee62529e9009cd110e373981db02420f475731dea5510 extends Twig_Template
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
        $tags = array("if" => 2, "for" => 3);
        $filters = array("length" => 2, "date" => 16, "raw" => 20, "slice" => 20, "replace" => 22);
        $functions = array("file_url" => 7);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('length', 'date', 'raw', 'slice', 'replace'),
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
        echo "<div class=\"col-md-8\">
  ";
        // line 2
        if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : null)) > 0)) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 4
                echo "      <div class=\"blog-list-items-wrap\">
        <div class=\"blog-list-item\">
          <a href=\"blog-single-sidebar-right.html\" class=\"bli-image bg-image\"
             style=\"background-image: url(";
                // line 7
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($context["value"], "headerImage", array()))), "html", null, true));
                echo "); background-position: 50% 27%;\">
          </a>
          <div class=\"bli-info\">
            <h2 class=\"bli-title\">
              <a href=\"blog-single-sidebar-right.html\" title=\"";
                // line 11
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["value"], "title", array()), "html", null, true));
                echo "\">
                ";
                // line 12
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["value"], "title", array()), "html", null, true));
                echo "
              </a>
            </h2>
            <div class=\"bli-meta\">
              <a href=\"\" class=\"article-time\">";
                // line 16
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["value"], "created", array()), "d M Y"), "html", null, true));
                echo "</a> - by:
              <a href=\"\" class=\"article-author\">";
                // line 17
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["value"], "author", array()), "html", null, true));
                echo "</a> - in
              <a href=\"\" class=\"article-category\">#black &amp; white</a>
            </div>
            <p class=\"bli-desc\">";
                // line 20
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (twig_slice($this->env, $this->getAttribute($context["value"], "description", array()), 0, 300) . "......"), "html", null, true));
                echo "</p>
            <div class=\"bli-button\">
              <a href=\"/article/";
                // line 22
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["key"], "html", null, true));
                echo "/";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_replace_filter($this->getAttribute($context["value"], "title", array()), array(" " => "-")), "html", null, true));
                echo "\"
                 class=\"btn btn-dark btn-rounded-5x btn-sm\">Read More</a>
            </div>
          </div>
        </div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "  ";
        }
        // line 30
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/sachlife_content/templates/blogList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 30,  106 => 29,  91 => 22,  86 => 20,  80 => 17,  76 => 16,  69 => 12,  65 => 11,  58 => 7,  53 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"col-md-8\">
  {% if content|length > 0 %}
    {% for key,value in content %}
      <div class=\"blog-list-items-wrap\">
        <div class=\"blog-list-item\">
          <a href=\"blog-single-sidebar-right.html\" class=\"bli-image bg-image\"
             style=\"background-image: url({{ file_url(value.headerImage) }}); background-position: 50% 27%;\">
          </a>
          <div class=\"bli-info\">
            <h2 class=\"bli-title\">
              <a href=\"blog-single-sidebar-right.html\" title=\"{{ value.title }}\">
                {{ value.title }}
              </a>
            </h2>
            <div class=\"bli-meta\">
              <a href=\"\" class=\"article-time\">{{ value.created|date('d M Y') }}</a> - by:
              <a href=\"\" class=\"article-author\">{{ value.author }}</a> - in
              <a href=\"\" class=\"article-category\">#black &amp; white</a>
            </div>
            <p class=\"bli-desc\">{{ value.description|slice(0, 300)|raw ~ '......' }}</p>
            <div class=\"bli-button\">
              <a href=\"/article/{{ key }}/{{ value.title|replace({' ':'-'}) }}\"
                 class=\"btn btn-dark btn-rounded-5x btn-sm\">Read More</a>
            </div>
          </div>
        </div>
      </div>
    {% endfor %}
  {% endif %}
</div>";
    }
}
