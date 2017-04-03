<?php

/* C:\laragon\www\ServiceMe/themes/demo/pages/about.htm */
class __TwigTemplate_dd6472fdac00e1df847ea47bbf88955599856bde484b6d41b104a15595a62e0d extends Twig_Template
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
        echo "<h1>This is About Page</h1>

<h2>Hello World</h2>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\ServiceMe/themes/demo/pages/about.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>This is About Page</h1>

<h2>Hello World</h2>", "C:\\laragon\\www\\ServiceMe/themes/demo/pages/about.htm", "");
    }
}
