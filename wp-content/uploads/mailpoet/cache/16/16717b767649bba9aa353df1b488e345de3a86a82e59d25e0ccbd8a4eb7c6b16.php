<?php

/* newsletter/templates/blocks/social/settingsIconSelector.hbs */
class __TwigTemplate_5fb5b9e0e0c50ef6bc9320574f82735fedc45761de27fed1340ad31eaf4fdb64 extends Twig_Template
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
        echo "<div id=\"mailpoet_social_icon_selector_contents\"></div>
<input type=\"button\" class=\"button button-secondary mailpoet_button_full mailpoet_add_social_icon\" value=\"";
        // line 2
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add another social network");
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/social/settingsIconSelector.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/templates/blocks/social/settingsIconSelector.hbs", "C:\\xampp\\htdocs\\WP2018\\WordPress\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\blocks\\social\\settingsIconSelector.hbs");
    }
}