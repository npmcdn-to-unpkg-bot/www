<?php

/* @particles/newsslider.html.twig */
class __TwigTemplate_79d41af0d3125fe0d0e3fd46b40c2db3e38ae8c9d6f2d27c6345b615c8792e8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/newsslider.html.twig", 1);
        $this->blocks = array(
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
\t<div class=\"g-newsslider\">

\t\t<div class=\"g-newsslider-preview news-preview\">

\t\t    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "\t\t\t\t<div class=\"g-newsslider-content news-content\">
\t\t\t\t\t<div class=\"g-newsslider-preview-title\">";
            // line 13
            echo $this->getAttribute($context["item"], "title", array());
            echo "</div>
\t\t\t\t\t<div class=\"g-newsslider-preview-headerdesc\">";
            // line 14
            echo $this->getAttribute($context["item"], "headerdesc", array());
            echo "</div>
\t\t\t\t\t<div class=\"g-newsslider-preview-desc\">";
            // line 15
            echo $this->getAttribute($context["item"], "desc", array());
            echo "</div>
\t\t\t\t\t";
            // line 16
            if ($this->getAttribute($context["item"], "buttontext", array())) {
                // line 17
                echo "\t\t\t\t\t\t<span class=\"g-newsslider-button\"> <a target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "buttontarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "buttontarget", array()), "_self")) : ("_self")));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonlink", array()));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttontext", array()));
                echo "\" class=\"button ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonclass", array()));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttontext", array()));
                echo "</a> </span>
\t\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t\t<div class=\"g-newsslider-preview-subtitle\">";
            echo $this->getAttribute($context["item"], "subtitle", array());
            echo "</div>
\t\t\t\t</div>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
\t\t</div>


        <div id=\"g-newsslider-scrollbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"g-newsslider-scrollbar\" style=\"height: ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array()), "500px")) : ("500px")), "html", null, true);
        echo " !important;\">
            <div class=\"scrollbar\"><div class=\"track\"><div class=\"thumb\"><div class=\"end\"></div></div></div></div>
            <div class=\"viewport\" style=\"height: ";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "height", array()), "500px")) : ("500px")), "html", null, true);
        echo ";\">
                 <div class=\"overview\">
\t\t\t\t\t<ul class=\"g-newsslider-headlines news-headlines\">
\t\t\t\t\t    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"g-newsslider-headlines-title\">";
            // line 33
            echo $this->getAttribute($context["item"], "title", array());
            echo "</span>
\t\t\t\t\t\t\t\t<span class=\"g-newsslider-headlines-subtitle\">";
            // line 34
            echo $this->getAttribute($context["item"], "subtitle", array());
            echo "</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t
\t\t\t\t\t</ul>
                </div>
            </div>
        </div>

\t</div>

</div>
";
    }

    // line 47
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 48
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-theme://js/newsslider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-theme://js/tinyscrollbar.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(window).load(function(){
        jQuery('.news-content:first-child()').addClass('top-content');
        jQuery('.nh-anim:first-child()').addClass('selected');

        var gscrollbar = document.getElementById(\"g-newsslider-scrollbar-";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\")
        ,   scrollbar  = tinyscrollbar(gscrollbar)
        ;      
    }); 
</script>
";
    }

    public function getTemplateName()
    {
        return "@particles/newsslider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 55,  155 => 49,  150 => 48,  147 => 47,  134 => 36,  125 => 34,  121 => 33,  118 => 32,  114 => 31,  108 => 28,  101 => 26,  95 => 22,  85 => 19,  71 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  54 => 12,  50 => 11,  43 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/* <div class="{{ particle.class|e }}">*/
/*   	{% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %}*/
/* */
/* 	<div class="g-newsslider">*/
/* */
/* 		<div class="g-newsslider-preview news-preview">*/
/* */
/* 		    {% for item in particle.items %}*/
/* 				<div class="g-newsslider-content news-content">*/
/* 					<div class="g-newsslider-preview-title">{{ item.title|raw }}</div>*/
/* 					<div class="g-newsslider-preview-headerdesc">{{ item.headerdesc|raw }}</div>*/
/* 					<div class="g-newsslider-preview-desc">{{ item.desc|raw }}</div>*/
/* 					{% if item.buttontext %}*/
/* 						<span class="g-newsslider-button"> <a target="{{ item.buttontarget|default('_self')|e }}" href="{{ item.buttonlink|e }}" title="{{ item.buttontext|e }}" class="button {{ item.buttonclass|e }}">{{ item.buttontext|e }}</a> </span>*/
/* 					{% endif %}*/
/* 					<div class="g-newsslider-preview-subtitle">{{ item.subtitle|raw }}</div>*/
/* 				</div>*/
/* 		    {% endfor %}*/
/* */
/* 		</div>*/
/* */
/* */
/*         <div id="g-newsslider-scrollbar-{{ id }}" class="g-newsslider-scrollbar" style="height: {{ particle.height|default('500px') }} !important;">*/
/*             <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>*/
/*             <div class="viewport" style="height: {{ particle.height|default('500px') }};">*/
/*                  <div class="overview">*/
/* 					<ul class="g-newsslider-headlines news-headlines">*/
/* 					    {% for item in particle.items %}*/
/* 							<li>*/
/* 								<span class="g-newsslider-headlines-title">{{ item.title|raw }}</span>*/
/* 								<span class="g-newsslider-headlines-subtitle">{{ item.subtitle|raw }}</span>*/
/* 							</li>*/
/* 					    {% endfor %}			*/
/* 					</ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* 	</div>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascript_footer %}*/
/* <script src="{{ url('gantry-theme://js/newsslider.js') }}"></script>*/
/* <script src="{{ url('gantry-theme://js/tinyscrollbar.js') }}"></script>*/
/* <script type="text/javascript">*/
/*     jQuery(window).load(function(){*/
/*         jQuery('.news-content:first-child()').addClass('top-content');*/
/*         jQuery('.nh-anim:first-child()').addClass('selected');*/
/* */
/*         var gscrollbar = document.getElementById("g-newsslider-scrollbar-{{ id }}")*/
/*         ,   scrollbar  = tinyscrollbar(gscrollbar)*/
/*         ;      */
/*     }); */
/* </script>*/
/* {% endblock %}*/
