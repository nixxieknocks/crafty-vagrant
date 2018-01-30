<?php

/* _special/install/dots */
class __TwigTemplate_3b15b713e20007d7aa8ca5581f27396f6c57109731881e65b31709cf16cc9008 extends Craft\BaseTemplate
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
        echo "<div class=\"dots\">
\t<div ";
        // line 2
        if ((($context["dot"] ?? null) >= 1)) {
            echo "class=\"sel\"";
        }
        echo "></div>
\t<div ";
        // line 3
        if ((($context["dot"] ?? null) >= 2)) {
            echo "class=\"sel\"";
        }
        echo "></div>
\t<div ";
        // line 4
        if ((($context["dot"] ?? null) >= 3)) {
            echo "class=\"sel\"";
        }
        echo "></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_special/install/dots";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_special/install/dots", "");
    }
}
