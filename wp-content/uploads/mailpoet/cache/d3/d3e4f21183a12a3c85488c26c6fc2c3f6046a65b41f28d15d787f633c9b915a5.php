<?php

/* form/templates/toolbar/exports.hbs */
class __TwigTemplate_39c3e3d31b5c6007e521fdc52764f57718aa8d4aeae16fa3b605b819c93ba532 extends Twig_Template
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
        echo "{{#each exports}}
  <textarea class=\"mailpoet_form_export_output\" id=\"mailpoet_form_export_{{ @key }}\" onClick=\"this.focus();this.select();\" readonly=\"readonly\">{{ this }}</textarea>
{{/each}}";
    }

    public function getTemplateName()
    {
        return "form/templates/toolbar/exports.hbs";
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
        return new Twig_Source("", "form/templates/toolbar/exports.hbs", "C:\\xampp\\htdocs\\WP2018\\WordPress\\wp-content\\plugins\\mailpoet\\views\\form\\templates\\toolbar\\exports.hbs");
    }
}
