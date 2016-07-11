<?php

/* @particles/popupgrid.html.twig */
class __TwigTemplate_b2401437103bbcb9f727aa3a0138f9b30b31b0f489c2c2da31ee88b3bd4ebfa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/popupgrid.html.twig", 1);
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
<div class=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
  ";
        // line 6
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        // line 7
        echo "  <div class=\"g-popupgrid\">

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "      <div class=\"g-popupgrid-item  ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "animations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "animations", array()), "g-zoom")) : ("g-zoom")));
            echo "\" data-size=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "datasize", array()));
            echo "\" style=\"width: ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "width", array()), "393px")) : ("393px")), "html", null, true);
            echo ";\">
        <div data-src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["item"], "img", array())), "html", null, true);
            echo "\" class=\"g-popupgrid-item-img-wrap\">
          <img class=\"g-popupgrid-item-img-wrap-img\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["item"], "img", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
            echo "\" />
          ";
            // line 13
            if ($this->getAttribute($context["item"], "previewicon", array())) {
                echo "<div class=\"g-popupgrid-description-preview-icon ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "overlay", array()));
                echo "\"><span class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "previewicon", array()));
                echo "\"></span></div>";
            }
            // line 14
            echo "          <div class=\"g-popupgrid-description g-popupgrid-description-grid\">
            ";
            // line 15
            if ($this->getAttribute($context["item"], "tag", array())) {
                echo "<div class=\"g-popupgrid-description-preview-tag\">";
                echo $this->getAttribute($context["item"], "tag", array());
                echo "</div>";
            }
            // line 16
            echo "            ";
            if ($this->getAttribute($context["item"], "title", array())) {
                echo "<div class=\"g-popupgrid-description-preview-title\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</div>";
            }
            // line 17
            echo "            ";
            if ($this->getAttribute($context["item"], "desc", array())) {
                echo "<div class=\"g-popupgrid-description-preview-content\">";
                echo $this->getAttribute($context["item"], "desc", array());
                echo "</div>";
            }
            // line 18
            echo "            ";
            if ($this->getAttribute($context["item"], "buttontext", array())) {
                // line 19
                echo "            <div class=\"g-popupgrid-description-preview-readmore\">
              <a target=\"";
                // line 20
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "buttontarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "buttontarget", array()), "_self")) : ("_self")));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonlink", array()));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttontext", array()));
                echo "\" class=\"button ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonclass", array()));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttontext", array()));
                echo "</a>
            </div>
            ";
            }
            // line 23
            echo "          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  </div>
  <div class=\"g-popupgrid-preview\">
    <div class=\"g-popupgrid-preview-area\"></div>
    <button class=\"g-popupgrid-action g-popupgrid-action-close\"><i class=\"fa fa-times\"></i><span class=\"g-popupgrid-text-hidden\">Close</span></button>
    <div class=\"g-popupgrid-description g-popupgrid-description-preview\"></div>

  </div>

  <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-theme://js/popupgrid.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@particles/popupgrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 35,  131 => 27,  122 => 23,  108 => 20,  105 => 19,  102 => 18,  95 => 17,  88 => 16,  82 => 15,  79 => 14,  71 => 13,  65 => 12,  61 => 11,  52 => 10,  48 => 9,  44 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/* */
/* <div class="{{ particle.class|e }}">*/
/*   {% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %}*/
/*   <div class="g-popupgrid">*/
/* */
/*     {% for item in particle.items %}*/
/*       <div class="g-popupgrid-item  {{ item.animations|default('g-zoom')|e }}" data-size="{{ item.datasize|e }}" style="width: {{ item.width|default('393px') }};">*/
/*         <div data-src="{{ url(item.img) }}" class="g-popupgrid-item-img-wrap">*/
/*           <img class="g-popupgrid-item-img-wrap-img" src="{{ url(item.img) }}" alt="{{ item.title|e }}" />*/
/*           {% if item.previewicon %}<div class="g-popupgrid-description-preview-icon {{ item.overlay|e }}"><span class="{{ item.previewicon|e }}"></span></div>{% endif %}*/
/*           <div class="g-popupgrid-description g-popupgrid-description-grid">*/
/*             {% if item.tag %}<div class="g-popupgrid-description-preview-tag">{{ item.tag|raw }}</div>{% endif %}*/
/*             {% if item.title %}<div class="g-popupgrid-description-preview-title">{{ item.title|raw }}</div>{% endif %}*/
/*             {% if item.desc %}<div class="g-popupgrid-description-preview-content">{{ item.desc|raw }}</div>{% endif %}*/
/*             {% if item.buttontext %}*/
/*             <div class="g-popupgrid-description-preview-readmore">*/
/*               <a target="{{ item.buttontarget|default('_self')|e }}" href="{{ item.buttonlink|e }}" title="{{ item.buttontext|e }}" class="button {{ item.buttonclass|e }}">{{ item.buttontext|e }}</a>*/
/*             </div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/*   <div class="g-popupgrid-preview">*/
/*     <div class="g-popupgrid-preview-area"></div>*/
/*     <button class="g-popupgrid-action g-popupgrid-action-close"><i class="fa fa-times"></i><span class="g-popupgrid-text-hidden">Close</span></button>*/
/*     <div class="g-popupgrid-description g-popupgrid-description-preview"></div>*/
/* */
/*   </div>*/
/* */
/*   <script src="{{ url('gantry-theme://js/popupgrid.js') }}"></script>*/
/* {% endblock %}*/
