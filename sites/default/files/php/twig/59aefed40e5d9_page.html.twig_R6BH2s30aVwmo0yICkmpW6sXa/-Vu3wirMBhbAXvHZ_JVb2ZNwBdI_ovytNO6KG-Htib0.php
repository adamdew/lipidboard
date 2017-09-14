<?php

/* themes/custom/lipido/page.html.twig */
class __TwigTemplate_131658bfc643d62e34ca4d5f36469e05b1f0513d88f67816131dac181fd24193 extends Twig_Template
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
        $tags = array("if" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
        echo "


<div class=\"layout-container\">
<div id=\"abcl-header\" class=\"container-fluid\">
  <header role=\"banner\">
    ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
  </header>
</div>


  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 14
        echo "
    <div class=\"layout-content\">
      ";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
    </div>";
        // line 18
        echo "
    ";
        // line 19
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 20
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 26
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 30
        echo "
  </main>

  ";
        // line 33
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 34
            echo "    <footer role=\"contentinfo\">
      ";
            // line 35
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 38
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/lipido/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  106 => 35,  103 => 34,  101 => 33,  96 => 30,  90 => 27,  87 => 26,  85 => 25,  82 => 24,  76 => 21,  73 => 20,  71 => 19,  68 => 18,  64 => 16,  60 => 14,  51 => 7,  43 => 1,);
    }

    public function getSource()
    {
        return "


<div class=\"layout-container\">
<div id=\"abcl-header\" class=\"container-fluid\">
  <header role=\"banner\">
    {{ page.header }}
  </header>
</div>


  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

    <div class=\"layout-content\">
      {{ page.content }}
    </div>{# /.layout-content #}

    {% if page.sidebar_first %}
      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        {{ page.sidebar_first }}
      </aside>
    {% endif %}

    {% if page.sidebar_second %}
      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        {{ page.sidebar_second }}
      </aside>
    {% endif %}

  </main>

  {% if page.footer %}
    <footer role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endif %}

</div>{# /.layout-container #}
";
    }
}
