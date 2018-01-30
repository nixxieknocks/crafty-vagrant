<?php

/* _special/install */
class __TwigTemplate_bb506cc0e981c59eefec117d48f0197524fb1d6e9858732b1105c6f4858d15ea extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/basecp", "_special/install", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Install Craft CMS");
        // line 3
        $_js = "css/install.css";
        \Craft\craft()->templates->includecssresource($_js);
        // line 4
        $_js = "js/install.js";
        \Craft\craft()->templates->includejsresource($_js);
        // line 6
        \Craft\craft()->templates->includeTranslations(
        	"All done!",
        	"Go to Craft CMS"
        );
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "\t<div id=\"bg\"></div>
\t<div class=\"beginbtncontainer\">
\t\t<div id=\"beginbtn\" class=\"btn big submit\">";
        // line 14
        echo twig_escape_filter($this->env, \Craft\Craft::t("Begin"), "html", null, true);
        echo "</div>
\t</div>

\t";
        // line 17
        $this->loadTemplate("_special/install/account", "_special/install", 17)->display($context);
        // line 18
        echo "\t";
        $this->loadTemplate("_special/install/site", "_special/install", 18)->display($context);
        // line 19
        echo "\t";
        $this->loadTemplate("_special/install/installing", "_special/install", 19)->display($context);
    }

    public function getTemplateName()
    {
        return "_special/install";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  57 => 18,  55 => 17,  49 => 14,  45 => 12,  42 => 11,  38 => 1,  33 => 6,  30 => 4,  27 => 3,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_special/install", "");
    }
}
