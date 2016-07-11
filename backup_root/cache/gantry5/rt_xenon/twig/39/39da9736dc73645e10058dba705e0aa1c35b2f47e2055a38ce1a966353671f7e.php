<?php

/* @particles/popupmodule.html.twig */
class __TwigTemplate_dec91470694b6a4f143ecf9cc07e87ac7bfc883ba9084807efdfa2542fc698d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/popupmodule.html.twig", 1);
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
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
  \t";
        // line 5
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        // line 6
        echo "
\t<div class=\"g-popupmodule\">
\t\t<div class=\"g-popupmodule-button\">
\t\t\t<div class=\"g-popupmodule-button-wrapper\">
\t\t\t\t";
        // line 10
        $context["user"] = $this->getAttribute((isset($context["joomla"]) ? $context["joomla"] : null), "factory", array(0 => "user"), "method");
        // line 11
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "guest", array())) {
            // line 12
            echo "\t\t\t\t\t<a data-rokbox href=\"#\" data-rokbox-element=\"#g-popupmodule-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "guestbuttontext", array()));
            echo "\" class=\"button ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "buttonclass", array()));
            echo "\">
\t\t\t\t\t\t";
            // line 13
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "guestbuttonicon", array())) {
                echo "<span class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "guestbuttonicon", array()));
                echo " g-popupmodule-button-icon\"></span>";
            }
            // line 14
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "guestbuttontext", array()));
            echo "
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 17
            echo "\t\t\t\t\t<a data-rokbox href=\"#\" data-rokbox-element=\"#g-popupmodule-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "userbuttontext", array()));
            echo "\" class=\"button ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "buttonclass", array()));
            echo "\">
\t\t\t\t\t\t";
            // line 18
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "userbuttonicon", array())) {
                echo "<span class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "userbuttonicon", array()));
                echo " g-popupmodule-button-icon\"></span>";
            }
            // line 19
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "userbuttontext", array()));
            echo "
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 22
        echo "\t\t\t</div>

\t\t\t<div id=\"g-popupmodule-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"g-popupmodule-module-wrapper\">
\t\t\t\t";
        // line 25
        echo $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "displayModule", array(0 => $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "module_id", array()), 1 => array("style" => (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "chrome", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "chrome", array()), "gantry")) : ("gantry")), "position" => "particle")), "method");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/popupmodule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  101 => 24,  97 => 22,  90 => 19,  84 => 18,  75 => 17,  68 => 14,  62 => 13,  53 => 12,  50 => 11,  48 => 10,  42 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/* <div class="{{ particle.class|e }}">*/
/*   	{% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %}*/
/* */
/* 	<div class="g-popupmodule">*/
/* 		<div class="g-popupmodule-button">*/
/* 			<div class="g-popupmodule-button-wrapper">*/
/* 				{% set user = joomla.factory('user') %}*/
/* 				{% if user.guest %}*/
/* 					<a data-rokbox href="#" data-rokbox-element="#g-popupmodule-{{ id }}" title="{{ particle.guestbuttontext|e }}" class="button {{ particle.buttonclass|e }}">*/
/* 						{% if particle.guestbuttonicon %}<span class="{{ particle.guestbuttonicon|e }} g-popupmodule-button-icon"></span>{% endif %}*/
/* 						{{ particle.guestbuttontext|e }}*/
/* 					</a>*/
/* 				{% else %}*/
/* 					<a data-rokbox href="#" data-rokbox-element="#g-popupmodule-{{ id }}" title="{{ particle.userbuttontext|e }}" class="button {{ particle.buttonclass|e }}">*/
/* 						{% if particle.userbuttonicon %}<span class="{{ particle.userbuttonicon|e }} g-popupmodule-button-icon"></span>{% endif %}*/
/* 						{{ particle.userbuttontext|e }}*/
/* 					</a>*/
/* 				{% endif %}*/
/* 			</div>*/
/* */
/* 			<div id="g-popupmodule-{{ id }}" class="g-popupmodule-module-wrapper">*/
/* 				{{ gantry.platform.displayModule(particle.module_id, {'style': particle.chrome|default('gantry'), 'position': 'particle'})|raw }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
