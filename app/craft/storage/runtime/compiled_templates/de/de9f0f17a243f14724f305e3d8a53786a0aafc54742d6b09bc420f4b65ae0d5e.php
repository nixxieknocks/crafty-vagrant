<?php

/* _includes/forms/text */
class __TwigTemplate_82ed3651bfce5bbaf0d8a7cda2f95b7ce0034ab8a4db28b74b579fdab6b3ab41 extends Craft\BaseTemplate
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
        $context["type"] = ((array_key_exists("type", $context)) ? (($context["type"] ?? null)) : ("text"));
        // line 3
        $context["class"] = twig_join_filter(array_filter(array(0 => "text", 1 => (((        // line 5
array_key_exists("class", $context) && ($context["class"] ?? null))) ? (($context["class"] ?? null)) : (null)), 2 => (((        // line 6
array_key_exists("type", $context) && (($context["type"] ?? null) == "password"))) ? ("password") : (null)), 3 => (((        // line 7
array_key_exists("disabled", $context) && ($context["disabled"] ?? null))) ? ("disabled") : (null)), 4 => (((        // line 8
array_key_exists("size", $context) && ($context["size"] ?? null))) ? (null) : ("fullwidth")))), " ");
        // line 11
        if ((((array_key_exists("showCharsLeft", $context) && ($context["showCharsLeft"] ?? null)) && array_key_exists("maxlength", $context)) && ($context["maxlength"] ?? null))) {
            // line 12
            $context["style"] = (((("padding-" . ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["craft"] ?? null), "i18n", array()), "getLocaleData", array(), "method"), "getOrientation", array(), "method") == "ltr")) ? ("right") : ("left"))) . ": ") . ((7.2 * twig_length_filter($this->env, ($context["maxlength"] ?? null))) + 14)) . "px;");
        }
        // line 15
        if ((($context["type"] ?? null) == "password")) {
            echo "<div class=\"passwordwrapper\">";
        }
        // line 16
        echo "<input class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\" type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\"";
        // line 17
        if (array_key_exists("style", $context)) {
            echo " style=\"";
            echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 18
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 19
        if (array_key_exists("size", $context)) {
            echo " size=\"";
            echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 20
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 21
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 22
        if ((array_key_exists("maxlength", $context) && ($context["maxlength"] ?? null))) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, ($context["maxlength"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 23
        if ((array_key_exists("showCharsLeft", $context) && ($context["showCharsLeft"] ?? null))) {
            echo " data-show-chars-left";
        }
        // line 24
        if (((array_key_exists("autofocus", $context) && ($context["autofocus"] ?? null)) &&  !$this->getAttribute($this->getAttribute(($context["craft"] ?? null), "request", array()), "isMobileBrowser", array(0 => true), "method"))) {
            echo " autofocus";
        }
        // line 25
        if (( !array_key_exists("autocomplete", $context) ||  !($context["autocomplete"] ?? null))) {
            echo " autocomplete=\"off\"";
        }
        // line 26
        if ((array_key_exists("disabled", $context) && ($context["disabled"] ?? null))) {
            echo " disabled ";
        }
        // line 27
        if ((array_key_exists("readonly", $context) && ($context["readonly"] ?? null))) {
            echo " readonly ";
        }
        // line 28
        if (array_key_exists("title", $context)) {
            echo " title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 29
        if (array_key_exists("placeholder", $context)) {
            echo " placeholder=\"";
            echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">";
        // line 30
        if ((($context["type"] ?? null) == "password")) {
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/text";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  104 => 29,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  72 => 22,  66 => 21,  60 => 20,  54 => 19,  48 => 18,  42 => 17,  36 => 16,  32 => 15,  29 => 12,  27 => 11,  25 => 8,  24 => 7,  23 => 6,  22 => 5,  21 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_includes/forms/text", "");
    }
}
