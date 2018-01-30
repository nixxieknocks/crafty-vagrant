<?php

/* _special/install/installing */
class __TwigTemplate_103a6193c2f1bad058e88ae27ec5831d9677c3b399b5bfb538113217f3641c22 extends Craft\BaseTemplate
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
        echo "
<div id=\"installing\" class=\"modal\">
\t<h1>";
        // line 3
        echo twig_escape_filter($this->env, \Craft\Craft::t("Installing Craft CMS…"), "html", null, true);
        echo "</h1>

\t<div id=\"spinner\" class=\"spinner big\"></div>

\t";
        // line 7
        $this->loadTemplate("_special/install/dots", "_special/install/installing", 7)->display(array_merge($context, array("dot" => 3)));
        // line 8
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_special/install/installing";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_special/install/installing", "");
    }
}
