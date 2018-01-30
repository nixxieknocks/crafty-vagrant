<?php

/* _special/install/account */
class __TwigTemplate_7ba8ed9022abd148a3db387766c839641fdf9330202c3546139f2811b35734e1 extends Craft\BaseTemplate
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_special/install/account", 1);
        // line 2
        echo "
";
        // line 3
        $context["useEmailAsUsername"] = $this->getAttribute($this->getAttribute(($context["craft"] ?? null), "config", array()), "useEmailAsUsername", array());
        // line 4
        echo "

<div id=\"account\" class=\"modal\">
\t<h1>";
        // line 7
        echo twig_escape_filter($this->env, \Craft\Craft::t("Create your account"), "html", null, true);
        echo "</h1>

\t<form id=\"accountform\" accept-charset=\"UTF-8\">
\t\t";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->getCsrfInputFunction(), "html", null, true);
        echo "
\t\t";
        // line 11
        if ( !($context["useEmailAsUsername"] ?? null)) {
            // line 12
            echo "\t\t\t";
            echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Username"), "id" => "username", "maxlength" => 255));
            echo "
\t\t";
        }
        // line 14
        echo "\t\t";
        echo $context["forms"]->gettextField(array("first" => ($context["useEmailAsUsername"] ?? null), "label" => \Craft\Craft::t("Email"), "id" => "email", "maxlength" => 255));
        echo "
\t\t";
        // line 15
        echo $context["forms"]->getpasswordField(array("label" => \Craft\Craft::t("Password"), "id" => "password"));
        echo "

\t\t<div class=\"buttons\">
\t\t\t<div id=\"accountsubmit\" class=\"btn big submit\">";
        // line 18
        echo twig_escape_filter($this->env, \Craft\Craft::t("Next"), "html", null, true);
        echo "
\t\t\t\t<input type=\"submit\" tabindex=\"-1\">
\t\t\t</div>
\t\t</div>
\t</form>

\t";
        // line 24
        $this->loadTemplate("_special/install/dots", "_special/install/account", 24)->display(array_merge($context, array("dot" => 1)));
        // line 25
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_special/install/account";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 25,  69 => 24,  60 => 18,  54 => 15,  49 => 14,  43 => 12,  41 => 11,  37 => 10,  31 => 7,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_special/install/account", "");
    }
}
