<?php

/* themes/contrib/radix/templates/form/input.html.twig */
class __TwigTemplate_1ebf95d632ac2266a0c0f26d3d49f4d18a6a551c48235d2ab527cf92b6779500 extends Twig_Template
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
        $tags = array("set" => 16);
        $filters = array("clean_class" => 17);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array('clean_class'),
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

        // line 16
        $context["classes"] = array(0 => ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 17
(isset($context["type"]) ? $context["type"] : null))), 1 => ((!twig_in_filter(        // line 18
(isset($context["type"]) ? $context["type"] : null), array(0 => "checkbox", 1 => "radio", 2 => "submit", 3 => "button"))) ? ("form-control") : ("")), 2 => ((twig_in_filter(        // line 19
(isset($context["type"]) ? $context["type"] : null), array(0 => "submit", 1 => "button"))) ? ("btn") : ("")), 3 => ((twig_in_filter(        // line 20
(isset($context["type"]) ? $context["type"] : null), array(0 => "submit", 1 => "button"))) ? ("btn-default") : ("")));
        // line 23
        echo "<input";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo " />";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/form/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 23,  47 => 20,  46 => 19,  45 => 18,  44 => 17,  43 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/radix/templates/form/input.html.twig", "/var/www/html/drupal/themes/contrib/radix/templates/form/input.html.twig");
    }
}
