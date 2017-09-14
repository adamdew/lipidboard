<?php

/* themes/custom/lipido/page--front.html.twig */
class __TwigTemplate_f72c30eca15c751f9c3f132d1b40eaf2c14be20ee627e032c153ec8ee2c51d3f extends Twig_Template
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
        $tags = array("if" => 30);
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "testimonials", array(), "array"), "html", null, true));
        echo "
      <hr />
      <div class=\"row\"> 
        <div class=\"col-md-6\">
          ";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "testingwindows", array(), "array"), "html", null, true));
        echo "
          ";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "earnyourcertificationtoday", array(), "array"), "html", null, true));
        echo "
        </div>
        <div class=\"col-md-6\">
          ";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "earnmoccredit", array(), "array"), "html", null, true));
        echo "
        </div>
      </div>
      <hr/>
    </div>";
        // line 29
        echo "
    ";
        // line 30
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 31
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 37
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 41
        echo "
  </main>

  ";
        // line 44
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 45
            echo "    <footer role=\"contentinfo\">
            ";
            // line 46
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 49
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/lipido/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 49,  126 => 46,  123 => 45,  121 => 44,  116 => 41,  110 => 38,  107 => 37,  105 => 36,  102 => 35,  96 => 32,  93 => 31,  91 => 30,  88 => 29,  81 => 24,  75 => 21,  71 => 20,  64 => 16,  60 => 14,  51 => 7,  43 => 1,);
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
      {{ page.content['testimonials'] }}
      <hr />
      <div class=\"row\"> 
        <div class=\"col-md-6\">
          {{ page.content['testingwindows'] }}
          {{ page.content['earnyourcertificationtoday'] }}
        </div>
        <div class=\"col-md-6\">
          {{ page.content['earnmoccredit'] }}
        </div>
      </div>
      <hr/>
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
