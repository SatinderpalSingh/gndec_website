<?php

/* modules/bootstrap_simple_carousel/templates/bootstrap--simple--carousel--block.html.twig */
class __TwigTemplate_1cd5c899dd987e13f6c2752bdbd5cd35c08ae110d9603d78675ceb35abfc9d51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 2, "if" => 10, "block" => 14, "for" => 26);
        $filters = array("clean_class" => 4);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block', 'for'),
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

        // line 2
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 4
($context["configuration"] ?? null), "provider", array()))), 2 => "block-bootstrap-simple-carousel");
        // line 8
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
    ";
        // line 10
        if (($context["label"] ?? null)) {
            // line 11
            echo "        <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "visually-hidden"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h2>
    ";
        }
        // line 13
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
    ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "</div>";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "        <div
            id=\"carousel-block-generic\"
            class=\"carousel slide\"
            data-ride=\"carousel\"
            data-wrap=\"";
        // line 19
        if (($this->getAttribute(($context["settings"] ?? null), "get", array(0 => "wrap"), "method") == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
            data-interval=\"";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["settings"] ?? null), "get", array(0 => "interval"), "method"), "html", null, true));
        echo "\"
            data-pause=\"";
        // line 21
        if ($this->getAttribute(($context["settings"] ?? null), "get", array(0 => "pause"), "method")) {
            echo "hover";
        }
        echo "\"
        >
            <!-- Indicators -->
            ";
        // line 24
        if ($this->getAttribute(($context["settings"] ?? null), "get", array(0 => "indicators"), "method")) {
            // line 25
            echo "                <ol class=\"carousel-indicators\">
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "                        <li
                            data-target=\"#carousel-block-generic\" data-slide-to=\"";
                // line 28
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true));
                echo "\"
                            class=\"indicator-item";
                // line 29
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute($context["loop"], "first", array())) ? (" active") : (""))));
                echo "\">
                        </li>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                </ol>
            ";
        }
        // line 34
        echo "
            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            echo "                    <div class=\"carousel-item item";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute($context["loop"], "first", array())) ? (" active") : (""))));
            echo "\">
                        <img src=\"";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "image_url", array()), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "image_alt", array()), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "image_title", array()), "html", null, true));
            echo "\">
                        <div class=\"carousel-caption\">
                            ";
            // line 41
            if ($this->getAttribute($context["item"], "caption_title", array())) {
                echo "<h3> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "caption_title", array()), "html", null, true));
                echo " </h3>";
            }
            // line 42
            echo "                            ";
            if ($this->getAttribute($context["item"], "caption_text", array())) {
                echo "<p> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "caption_text", array()), "html", null, true));
                echo " </p>";
            }
            // line 43
            echo "                        </div>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </div>

            <!-- Controls -->
            ";
        // line 49
        if ($this->getAttribute(($context["settings"] ?? null), "get", array(0 => "controls"), "method")) {
            // line 50
            echo "                <a class=\"left carousel-control carousel-control-prev\" href=\"#carousel-block-generic\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left carousel-control-prev-icon\"></span>
                </a>
                <a class=\"right carousel-control carousel-control-next\" href=\"#carousel-block-generic\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right carousel-control-next-icon\"></span>
                </a>
            ";
        }
        // line 57
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "modules/bootstrap_simple_carousel/templates/bootstrap--simple--carousel--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 57,  228 => 50,  226 => 49,  221 => 46,  205 => 43,  198 => 42,  192 => 41,  183 => 39,  178 => 38,  161 => 37,  156 => 34,  152 => 32,  135 => 29,  131 => 28,  128 => 27,  111 => 26,  108 => 25,  106 => 24,  98 => 21,  94 => 20,  86 => 19,  80 => 15,  77 => 14,  73 => 59,  71 => 14,  66 => 13,  58 => 11,  56 => 10,  52 => 9,  47 => 8,  45 => 4,  44 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/bootstrap_simple_carousel/templates/bootstrap--simple--carousel--block.html.twig", "/var/www/osm/pbOSM/GNE_Map/drupal/modules/bootstrap_simple_carousel/templates/bootstrap--simple--carousel--block.html.twig");
    }
}
