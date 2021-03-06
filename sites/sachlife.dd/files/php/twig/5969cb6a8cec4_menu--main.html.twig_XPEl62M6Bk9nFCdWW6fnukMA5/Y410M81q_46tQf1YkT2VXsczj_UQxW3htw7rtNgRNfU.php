<?php

/* themes/custom/sachlife/templates/navigation/menu--main.html.twig */
class __TwigTemplate_b5b5793f36fe3f4fc44a4df41b9b8eb536449aef6cc58d8aab168ac7c9a3ff8a extends Twig_Template
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
        $tags = array("import" => 18, "macro" => 26, "if" => 28, "for" => 46, "set" => 48);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
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

        // line 18
        $context["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

";
        // line 62
        echo "</ul>
    </div>
  </div>
</nav>";
    }

    // line 26
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 27
            echo "  ";
            $context["menus"] = $this;
            // line 28
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 29
                echo "<nav class=\"navbar navbar-default\">
  <div class=\"navbar-inner\">
    <!-- Toggle for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
    </div> <!-- /.navbar-header -->
    <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
    ";
                // line 41
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 42
                    echo "<ul";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "nav", 1 => "navbar-nav", 2 => "navbar-right"), "method"), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 44
                    echo "    <ul ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "nav", 1 => "navbar-nav", 2 => "navbar-right"), "method"), "html", null, true));
                    echo ">
        ";
                }
                // line 46
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 47
                    echo "            ";
                    // line 48
                    $context["classes"] = array(0 => "dropdown", 1 => "dropdown-hover", 2 => (($this->getAttribute(                    // line 50
$context["item"], "is_expanded", array())) ? ("menu-item--expanded") : ("")), 3 => (($this->getAttribute(                    // line 51
$context["item"], "is_collapsed", array())) ? ("menu-item--collapsed") : ("")), 4 => (($this->getAttribute(                    // line 52
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
                    // line 55
                    echo "        <li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
                    echo ">
            <a href=\"";
                    // line 56
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\" class=\"dropdown-toggle\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo " <span class=\"caret-2\"><i class=\"fa fa-chevron-down\"></i></span></a>
        </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "    </ul>
    ";
            }
            // line 61
            echo "    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/sachlife/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 61,  136 => 59,  125 => 56,  120 => 55,  118 => 52,  117 => 51,  116 => 50,  115 => 48,  113 => 47,  108 => 46,  102 => 44,  96 => 42,  94 => 41,  80 => 29,  77 => 28,  74 => 27,  60 => 26,  53 => 62,  48 => 24,  45 => 19,  43 => 18,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *
 * @ingroup templates
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
<nav class=\"navbar navbar-default\">
  <div class=\"navbar-inner\">
    <!-- Toggle for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
    </div> <!-- /.navbar-header -->
    <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
    {% if menu_level == 0 %}
<ul{{ attributes.addClass('nav', 'navbar-nav', 'navbar-right') }}>
    {% else %}
    <ul {{ attributes.addClass('nav', 'navbar-nav', 'navbar-right') }}>
        {% endif %}
        {% for item in items %}
            {%
            set classes = [
            'dropdown', 'dropdown-hover',
            item.is_expanded ? 'menu-item--expanded',
            item.is_collapsed ? 'menu-item--collapsed',
            item.in_active_trail ? 'active',
            ]
            %}
        <li{{ item.attributes.addClass(classes) }}>
            <a href=\"{{ item.url }}\" class=\"dropdown-toggle\">{{ item.title }} <span class=\"caret-2\"><i class=\"fa fa-chevron-down\"></i></span></a>
        </li>
        {% endfor %}
    </ul>
    {% endif %}
    {% endmacro %}
</ul>
    </div>
  </div>
</nav>";
    }
}
