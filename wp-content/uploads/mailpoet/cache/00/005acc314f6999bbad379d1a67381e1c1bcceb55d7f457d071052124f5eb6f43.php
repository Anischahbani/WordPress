<?php

/* form/templates/blocks/divider.hbs */
class __TwigTemplate_94d50fb8dc3c88911320cd79a8529b6eb7d753ee909d2d471734bdc31d41e9dd extends Twig_Template
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
        echo "<hr />";
    }

    public function getTemplateName()
    {
        return "form/templates/blocks/divider.hbs";
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
        return new Twig_Source("", "form/templates/blocks/divider.hbs", "C:\\xampp\\htdocs\\WP2018\\WordPress\\wp-content\\plugins\\mailpoet\\views\\form\\templates\\blocks\\divider.hbs");
    }
}
