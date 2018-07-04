<?php

/* themes/contrib/radix/templates/form/form-element-label.html.twig */
class __TwigTemplate_2e4747bbaf0fe3b58ad77c50b0b264d8efaa4a9f0f920c7257cb6bf8795082fe extends Twig_Template
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
        $tags = array("set" => 20, "if" => 27);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 20
        $context["classes"] = array(0 => (((        // line 21
(isset($context["title_display"]) ? $context["title_display"] : null) == "after")) ? ("option") : ("")), 1 => (((        // line 22
(isset($context["title_display"]) ? $context["title_display"] : null) == "invisible")) ? ("visually-hidden") : ("")), 2 => ((        // line 23
(isset($context["required"]) ? $context["required"] : null)) ? ("js-form-required") : ("")), 3 => ((        // line 24
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 27
        if (( !twig_test_empty((isset($context["title"]) ? $context["title"] : null)) || (isset($context["required"]) ? $context["required"] : null))) {
            // line 28
            echo "<label";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo "> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            // line 29
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 30
                echo "<p class=\"help-block\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
                echo "</p>";
            }
            // line 32
            echo "</label>";
            // line 33
            if (((isset($context["required"]) ? $context["required"] : null) && ((isset($context["title_display"]) ? $context["title_display"] : null) == "before"))) {
                // line 34
                echo "<span class=\"form-required\">*</span>";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/form/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 34,  67 => 33,  65 => 32,  60 => 30,  58 => 29,  51 => 28,  49 => 27,  47 => 24,  46 => 23,  45 => 22,  44 => 21,  43 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/radix/templates/form/form-element-label.html.twig", "/var/www/html/drupal/themes/contrib/radix/templates/form/form-element-label.html.twig");
    }
}
