<?php

/* component.html.twig */
class __TwigTemplate_62a47caf5bf901b0fbbb49e8d6e53afed9293441a01da19a3cbbbf7a40e29d1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/page.html.twig", "component.html.twig", 1);
        $this->blocks = array(
            'page_layout' => array($this, 'block_page_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_layout($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "joomla", array(0 => true), "method");
        // line 5
        echo "    <jdoc:include type=\"component\" />
";
    }

    public function getTemplateName()
    {
        return "component.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "partials/page.html.twig" %}*/
/* */
/* {% block page_layout %}*/
/*     {% do gantry.theme.joomla(true) %}*/
/*     <jdoc:include type="component" />*/
/* {% endblock %}*/
/* */
