<?php

/* @particles/newsticker.html.twig */
class __TwigTemplate_0b5601d7e0c1400c0d38710c38b4ef9926ccdf9d11ae7bdda4394426b7366da4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/newsticker.html.twig", 1);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'particle' => array($this, 'block_particle'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
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
    public function block_javascript($context, array $blocks = array())
    {
        // line 4
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-theme://js/newsticker.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 7
    public function block_particle($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
  \t";
        // line 9
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        // line 10
        echo "\t<div class=\"g-newsticker\">
\t\t";
        // line 11
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "label", array())) {
            echo " <div class=\"g-newsticker-label\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "label", array());
            echo "</div> ";
        }
        // line 12
        echo "
\t\t<div class=\"g-newsticker-container g-newsticker-";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t\t\t<div class=\"g-newsticker-innerwrap\">
\t\t    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "\t\t\t\t<div class=\"g-newsticker-content\">
\t\t\t\t\t<span class=\"g-newsticker-content-text\">";
            // line 17
            echo $this->getAttribute($context["item"], "content", array());
            echo "</span>

\t\t\t\t\t";
            // line 19
            if ($this->getAttribute($context["item"], "readmoretext", array())) {
                // line 20
                echo "\t\t\t\t\t\t<span class=\"g-newsticker-elipsis\">...</span>
\t\t\t\t\t\t<span class=\"g-newsticker-readmore\"> <a target=\"";
                // line 21
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "readmoretarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "readmoretarget", array()), "_self")) : ("_self")));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "readmorelink", array()));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "readmoretext", array()));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "readmoretext", array()));
                echo "</a> </span>
\t\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t</div>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t    </div>
\t\t\t<div class=\"g-newsticker-controller\">
\t\t\t\t<div class=\"g-next\"><span class=\"g-next-icon\"></span></div>
\t\t\t\t<div class=\"g-prev\"><span class=\"g-prev-icon\"></span></div>
\t\t\t</div>\t    
\t    </div>
    </div>
    <div class=\"clearfix\"></div>
</div>
";
    }

    // line 36
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 37
        echo "\t<script type=\"text/javascript\">
\tjQuery(document).ready(function(){\t
\t\tjQuery('.g-newsticker-";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').easyTicker({
\t\t\tdirection: 'up',
\t\t\tspeed: 'fast',
\t\t\tinterval: 2000,
\t\t\theight: 'auto',
\t\t\tvisible: 1,
\t\t\tmousePause: 1,
\t\t\tcontrols: {
\t\t\t\tup: '.g-next',
\t\t\t\tdown: '.g-prev'
\t\t\t}
\t\t});\t
\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "@particles/newsticker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 39,  122 => 37,  119 => 36,  106 => 25,  99 => 23,  88 => 21,  85 => 20,  83 => 19,  78 => 17,  75 => 16,  71 => 15,  66 => 13,  63 => 12,  57 => 11,  54 => 10,  48 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block javascript %}*/
/* <script src="{{ url('gantry-theme://js/newsticker.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block particle %}*/
/* <div class="{{ particle.class|e }}">*/
/*   	{% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %}*/
/* 	<div class="g-newsticker">*/
/* 		{% if particle.label %} <div class="g-newsticker-label">{{ particle.label|raw }}</div> {% endif %}*/
/* */
/* 		<div class="g-newsticker-container g-newsticker-{{ id }}">*/
/* 			<div class="g-newsticker-innerwrap">*/
/* 		    {% for item in particle.items %}*/
/* 				<div class="g-newsticker-content">*/
/* 					<span class="g-newsticker-content-text">{{ item.content|raw }}</span>*/
/* */
/* 					{% if item.readmoretext %}*/
/* 						<span class="g-newsticker-elipsis">...</span>*/
/* 						<span class="g-newsticker-readmore"> <a target="{{ item.readmoretarget|default('_self')|e }}" href="{{ item.readmorelink|e }}" title="{{ item.readmoretext|e }}">{{ item.readmoretext|e }}</a> </span>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 		    {% endfor %}*/
/* 		    </div>*/
/* 			<div class="g-newsticker-controller">*/
/* 				<div class="g-next"><span class="g-next-icon"></span></div>*/
/* 				<div class="g-prev"><span class="g-prev-icon"></span></div>*/
/* 			</div>	    */
/* 	    </div>*/
/*     </div>*/
/*     <div class="clearfix"></div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascript_footer %}*/
/* 	<script type="text/javascript">*/
/* 	jQuery(document).ready(function(){	*/
/* 		jQuery('.g-newsticker-{{ id }}').easyTicker({*/
/* 			direction: 'up',*/
/* 			speed: 'fast',*/
/* 			interval: 2000,*/
/* 			height: 'auto',*/
/* 			visible: 1,*/
/* 			mousePause: 1,*/
/* 			controls: {*/
/* 				up: '.g-next',*/
/* 				down: '.g-prev'*/
/* 			}*/
/* 		});	*/
/* 	});*/
/* 	</script>*/
/* {% endblock %}*/
