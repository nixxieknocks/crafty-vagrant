<?php

/* _special/install/site */
class __TwigTemplate_b75f7d837020b5cb2271b0b2e8666ff1545693371851e35fd70fcbc193f1110c extends Craft\BaseTemplate
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_special/install/site", 1);
        // line 2
        echo "

<div id=\"site\" class=\"modal\">
\t<h1>";
        // line 5
        echo twig_escape_filter($this->env, \Craft\Craft::t("Setup your site"), "html", null, true);
        echo "</h1>

\t<form id=\"siteform\" accept-charset=\"UTF-8\">
\t\t";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->getCsrfInputFunction(), "html", null, true);
        echo "
\t\t";
        // line 9
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Site Name"), "id" => "siteName", "value" => ($context["defaultSiteName"] ?? null), "maxlength" => 255));
        echo "
\t\t";
        // line 10
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Site URL"), "id" => "siteUrl", "value" => ($context["defaultSiteUrl"] ?? null), "maxlength" => 255));
        echo "

\t\t";
        // line 12
        ob_start();
        // line 13
        echo "\t\t\t<div class=\"select\">
\t\t\t\t<select id=\"locale\">
\t\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["craft"] ?? null), "i18n", array()), "getAllLocales", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 16
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
            echo "\"";
            if (($this->getAttribute($context["locale"], "id", array()) == $this->getAttribute(($context["craft"] ?? null), "locale", array()))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", array()), "html", null, true);
            echo ")</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t";
        $context["localeInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        echo "\t\t";
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Locale"), "id" => "locale"), ($context["localeInput"] ?? null));
        echo "

\t\t<div class=\"buttons\">
\t\t\t<div id=\"sitesubmit\" class=\"btn big submit\">";
        // line 24
        echo twig_escape_filter($this->env, \Craft\Craft::t("Finish up"), "html", null, true);
        echo "
\t\t\t\t<input type=\"submit\" tabindex=\"-1\">
\t\t\t</div>
\t\t</div>
\t</form>

\t";
        // line 30
        $this->loadTemplate("_special/install/dots", "_special/install/site", 30)->display(array_merge($context, array("dot" => 2)));
        // line 31
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_special/install/site";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 31,  93 => 30,  84 => 24,  77 => 21,  72 => 18,  55 => 16,  51 => 15,  47 => 13,  45 => 12,  40 => 10,  36 => 9,  32 => 8,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_special/install/site", "");
    }
}
