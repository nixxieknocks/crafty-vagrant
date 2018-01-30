<?php

/* 503 */
class __TwigTemplate_f070e55f4f20437fecbb6c9952f96a8b0f4ab92019c2f5cf48f98556643383f6 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/message", "503", 1);
        $this->blocks = array(
            'message' => array($this, 'block_message'),
            '__internal_3af699def7831f34d50c1cc5c56ce9ac04b1e20fe1dc2f35de4b8c3b23eb5fd0' => array($this, 'block___internal_3af699def7831f34d50c1cc5c56ce9ac04b1e20fe1dc2f35de4b8c3b23eb5fd0'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/message";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Service Unavailable");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_message($context, array $blocks = array())
    {
        // line 5
        echo "\t<h2>";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h2>

    ";
        // line 7
        if (($context["message"] ?? null)) {
            // line 8
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('Craft\CraftTwigExtension')->markdownFilter(            $this->renderBlock("__internal_3af699def7831f34d50c1cc5c56ce9ac04b1e20fe1dc2f35de4b8c3b23eb5fd0", $context, $blocks)), "html", null, true);
            // line 9
            echo "\t";
        } else {
            // line 10
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Our site is temporarily unavailable. Please try again later."), "html", null, true);
            echo "</p>
\t";
        }
    }

    // line 8
    public function block___internal_3af699def7831f34d50c1cc5c56ce9ac04b1e20fe1dc2f35de4b8c3b23eb5fd0($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "503";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  49 => 10,  46 => 9,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "503", "");
    }
}
