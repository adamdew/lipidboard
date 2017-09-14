<?php

/* themes/custom/lipido/templates/block--system-branding-block.html.twig */
class __TwigTemplate_d88370ec1be3041a34d207ca7c21ae8f5c7fd9f66fbb541dec743ea9d561273f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/custom/lipido/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 21);
        $filters = array("t" => 22);
        $functions = array("path" => 22);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array('path')
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "  <div class=\"row banner-row\">
    <div class=\"col-md-2\">
      ";
        // line 21
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 22
            echo "        <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">
          <img src=\"";
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" />
        </a>
      ";
        }
        // line 26
        echo "    </div>
  ";
        // line 30
        echo "  <div class=\"col-md-10\">
    ";
        // line 32
        echo "    <div class=\"center-vert\">
      <h1>A Certification Program for Clinical Lipidologists</h1>
    </div>

  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/lipido/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 32,  79 => 30,  76 => 26,  68 => 23,  61 => 22,  59 => 21,  55 => 19,  52 => 18,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Default theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 *
 * @ingroup themeable
 */
#}
{% block content %}
  <div class=\"row banner-row\">
    <div class=\"col-md-2\">
      {% if site_logo %}
        <a href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">
          <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" />
        </a>
      {% endif %}
    </div>
  {#% if site_name %}
    <a href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
  {% endif %#}
  <div class=\"col-md-10\">
    {# {{ site_slogan }} #}
    <div class=\"center-vert\">
      <h1>A Certification Program for Clinical Lipidologists</h1>
    </div>

  </div>
{% endblock %}
";
    }
}
