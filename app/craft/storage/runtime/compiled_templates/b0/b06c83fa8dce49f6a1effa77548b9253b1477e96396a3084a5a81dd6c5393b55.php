<?php

/* _includes/forms/field */
class __TwigTemplate_f4b3242c291870167f057985854faf5a22126b49f7483591b895c4049f9d22d2 extends Craft\BaseTemplate
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
        // line 1
        $context["labelId"] = ((array_key_exists("labelId", $context)) ? (($context["labelId"] ?? null)) : (((array_key_exists("id", $context)) ? ((($context["id"] ?? null) . "-label")) : (null))));
        // line 2
        $context["fieldId"] = ((array_key_exists("fieldId", $context)) ? (($context["fieldId"] ?? null)) : (((array_key_exists("id", $context)) ? ((($context["id"] ?? null) . "-field")) : (null))));
        // line 3
        $context["label"] = (((array_key_exists("label", $context) && (($context["label"] ?? null) != "__blank__"))) ? (($context["label"] ?? null)) : (null));
        // line 4
        $context["locale"] = ((($this->getAttribute(($context["craft"] ?? null), "isLocalized", array(), "method") && array_key_exists("locale", $context))) ? (($context["locale"] ?? null)) : (null));
        // line 5
        $context["instructions"] = ((array_key_exists("instructions", $context)) ? (($context["instructions"] ?? null)) : (null));
        // line 6
        $context["warning"] = ((array_key_exists("warning", $context)) ? (($context["warning"] ?? null)) : (null));
        // line 7
        $context["orientation"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["craft"] ?? null), "i18n", array()), "getLocaleData", array(0 => ((($context["locale"] ?? null)) ? (($context["locale"] ?? null)) : ($this->getAttribute(($context["craft"] ?? null), "locale", array())))), "method"), "getOrientation", array(), "method");
        // line 8
        $context["errors"] = ((array_key_exists("errors", $context)) ? (($context["errors"] ?? null)) : (null));
        // line 9
        $context["fieldClass"] = twig_join_filter(array_filter(array(0 => "field", 1 => (((        // line 11
array_key_exists("first", $context) && ($context["first"] ?? null))) ? ("first") : (null)), 2 => ((        // line 12
($context["errors"] ?? null)) ? ("has-errors") : (null)), 3 => (((        // line 13
array_key_exists("fieldClass", $context) && ($context["fieldClass"] ?? null))) ? (($context["fieldClass"] ?? null)) : (null)))), " ");
        // line 16
        echo "<div class=\"";
        echo twig_escape_filter($this->env, ($context["fieldClass"] ?? null), "html", null, true);
        echo "\"";
        if (($context["fieldId"] ?? null)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["fieldId"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
\t";
        // line 17
        if ((($context["label"] ?? null) || ($context["instructions"] ?? null))) {
            // line 18
            echo "\t\t<div class=\"heading\">
\t\t\t";
            // line 19
            if (($context["label"] ?? null)) {
                // line 20
                echo "\t\t\t\t<label ";
                if (($context["labelId"] ?? null)) {
                    echo " id=\"";
                    echo twig_escape_filter($this->env, ($context["labelId"] ?? null), "html", null, true);
                    echo "\"";
                }
                if ((array_key_exists("required", $context) && ($context["required"] ?? null))) {
                    echo " class=\"required\"";
                }
                if ((array_key_exists("id", $context) && ($context["id"] ?? null))) {
                    echo " for=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 21
                echo ($context["label"] ?? null);
                // line 22
                if (($context["locale"] ?? null)) {
                    // line 23
                    echo "<span class=\"locale\">";
                    echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
                    echo "</span>";
                }
                // line 25
                echo "</label>
\t\t\t";
            }
            // line 27
            echo "\t\t\t";
            if (($context["instructions"] ?? null)) {
                // line 28
                echo "\t\t\t\t<div class=\"instructions\">";
                echo $this->env->getExtension('Craft\CraftTwigExtension')->replaceFilter($this->env->getExtension('Craft\CraftTwigExtension')->markdownFilter(($context["instructions"] ?? null)), "/&amp;(\\w+);/", "&\$1;");
                echo "</div>
\t\t\t";
            }
            // line 30
            echo "\t\t</div>
\t";
        }
        // line 32
        echo "\t<div class=\"input ";
        echo twig_escape_filter($this->env, ($context["orientation"] ?? null), "html", null, true);
        if (($context["errors"] ?? null)) {
            echo " errors";
        }
        echo "\">
\t\t";
        // line 33
        echo ($context["input"] ?? null);
        echo "
\t</div>
\t";
        // line 35
        if (($context["warning"] ?? null)) {
            // line 36
            echo "\t\t<p class=\"warning\">";
            echo twig_escape_filter($this->env, ($context["warning"] ?? null), "html", null, true);
            echo "</p>
\t";
        }
        // line 38
        echo "\t";
        $this->loadTemplate("_includes/forms/errorList", "_includes/forms/field", 38)->display(array_merge($context, array("errors" => ($context["errors"] ?? null))));
        // line 39
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 39,  121 => 38,  115 => 36,  113 => 35,  108 => 33,  100 => 32,  96 => 30,  90 => 28,  87 => 27,  83 => 25,  78 => 23,  76 => 22,  74 => 21,  58 => 20,  56 => 19,  53 => 18,  51 => 17,  40 => 16,  38 => 13,  37 => 12,  36 => 11,  35 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_includes/forms/field", "");
    }
}
