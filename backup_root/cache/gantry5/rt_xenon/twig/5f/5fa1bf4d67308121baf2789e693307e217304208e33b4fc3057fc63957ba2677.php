<?php

/* @particles/newsletter.html.twig */
class __TwigTemplate_19a5f750160bd9154c864a23793e5d686b9cdea4ef93c6a3733afb163b09439a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/newsletter.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "
\t";
        // line 5
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        // line 6
        echo "
\t<div class=\"g-newsletter ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
\t\t";
        // line 8
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "headtext", array())) {
            echo "<div class=\"g-newsletter-headtext\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "headtext", array());
            echo "</div>";
        }
        // line 9
        echo "\t\t<form class=\"g-newsletter-form\" action=\"http://feedburner.google.com/fb/a/mailverify\" method=\"post\" target=\"popupwindow\" onsubmit=\"window.open('http://feedburner.google.com/fb/a/mailverify?uri=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "uri", array()));
        echo "', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true\">
\t\t\t<input class=\"g-newsletter-inputbox\" type=\"text\" placeholder=\"";
        // line 10
        echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "inputboxtext", array());
        echo "\" name=\"email\">
\t\t\t<input type=\"hidden\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "uri", array()));
        echo "\" name=\"uri\">
\t\t\t<input type=\"hidden\" name=\"loc\" value=\"en_US\">
\t\t\t<input type=\"submit\" name=\"Submit\" class=\"g-newsletter-button button ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "buttonclass", array()));
        echo "\" value=\"";
        echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "buttontext", array());
        echo "\">
\t\t</form>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  62 => 11,  58 => 10,  53 => 9,  47 => 8,  43 => 7,  40 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/* */
/* 	{% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %}*/
/* */
/* 	<div class="g-newsletter {{ particle.class|e }}">*/
/* 		{% if particle.headtext %}<div class="g-newsletter-headtext">{{ particle.headtext|raw }}</div>{% endif %}*/
/* 		<form class="g-newsletter-form" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri={{ particle.uri|e }}', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">*/
/* 			<input class="g-newsletter-inputbox" type="text" placeholder="{{ particle.inputboxtext|raw }}" name="email">*/
/* 			<input type="hidden" value="{{ particle.uri|e }}" name="uri">*/
/* 			<input type="hidden" name="loc" value="en_US">*/
/* 			<input type="submit" name="Submit" class="g-newsletter-button button {{ particle.buttonclass|e }}" value="{{ particle.buttontext|raw }}">*/
/* 		</form>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
