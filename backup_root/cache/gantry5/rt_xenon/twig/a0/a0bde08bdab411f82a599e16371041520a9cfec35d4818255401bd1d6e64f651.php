<?php

/* @particles/promoimage.html.twig */
class __TwigTemplate_f86d42ffb5011ae0d72bd3be2a39d24ce48d4beaa6aa3e6412b15ec32ac80d09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/promoimage.html.twig", 1);
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
\t<div class=\"g-promoimage ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
\t    <figure class=\"g-promoimage-effect\">
\t    \t<span class=\"g-promoimage-iconbutton ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "iconbutton", array()));
        echo "\"></span>
\t        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array())));
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array()));
        echo "\">
\t        <div class=\"g-promoimage-caption\">
\t            ";
        // line 12
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "promoimagetitle", array())) {
            echo "<div class=\"g-promoimage-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "promoimagetitle", array());
            echo "</div>";
        }
        // line 13
        echo "\t            <div class=\"g-promoimage-icon\">
\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "promoimageicons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["promoimageicon"]) {
            // line 15
            echo "\t\t\t\t\t    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["promoimageicon"], "link", array()), "html", null, true);
            echo "\"><span class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["promoimageicon"], "icon", array()), "html", null, true);
            echo "\"></span></a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promoimageicon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  \t                
\t            </div>
\t            ";
        // line 18
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "desc", array())) {
            echo "<div class=\"g-promoimage-desc\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "desc", array());
            echo "</div>";
        }
        // line 19
        echo "\t        </div>           
\t    </figure>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/promoimage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 19,  87 => 18,  83 => 16,  72 => 15,  68 => 14,  65 => 13,  59 => 12,  52 => 10,  48 => 9,  43 => 7,  40 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/* */
/* 	{% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %}*/
/* */
/* 	<div class="g-promoimage {{ particle.class|e }}">*/
/* 	    <figure class="g-promoimage-effect">*/
/* 	    	<span class="g-promoimage-iconbutton {{ particle.iconbutton|e }}"></span>*/
/* 	        <img src="{{ url(particle.image)|e }}" alt="{{ particle.title|e }}">*/
/* 	        <div class="g-promoimage-caption">*/
/* 	            {% if particle.promoimagetitle %}<div class="g-promoimage-title">{{ particle.promoimagetitle|raw }}</div>{% endif %}*/
/* 	            <div class="g-promoimage-icon">*/
/* 					{% for promoimageicon in particle.promoimageicons %}*/
/* 					    <a href="{{ promoimageicon.link }}"><span class="{{ promoimageicon.icon }}"></span></a>*/
/* 					{% endfor %}  	                */
/* 	            </div>*/
/* 	            {% if particle.desc %}<div class="g-promoimage-desc">{{ particle.desc|raw }}</div>{% endif %}*/
/* 	        </div>           */
/* 	    </figure>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
