<?php

/* @particles/testimonial.html.twig */
class __TwigTemplate_2b91c8b4884126144aea7f7e85abe9eacd8216ec92e090aee3061dfcf911c50c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/testimonial.html.twig", 1);
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
        echo "  <div class=\"g-testimonials ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
    ";
        // line 5
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            // line 6
            echo "    <h3 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h3>
    ";
        }
        // line 8
        echo "    
    ";
        // line 9
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "intro", array())) {
            // line 10
            echo "    <p>";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "intro", array());
            echo "</p>
    ";
        }
        // line 12
        echo "
    <div class=\"g-testimonials-items ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "cols", array()));
        echo "\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "testimonials", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 15
            echo "    <div class=\"g-testimonial-item ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["testimonial"], "style", array()));
            echo "\">
      ";
            // line 16
            if ($this->getAttribute($context["testimonial"], "content", array())) {
                // line 17
                echo "      <div class=\"g-testimonial-content\">
        
        ";
                // line 19
                if ((($this->getAttribute($context["testimonial"], "img", array()) || $this->getAttribute($context["testimonial"], "author", array())) || $this->getAttribute($context["testimonial"], "company", array()))) {
                    // line 20
                    echo "        <div class=\"g-testimonial-author-container\">
          ";
                    // line 21
                    if ($this->getAttribute($context["testimonial"], "img", array())) {
                        // line 22
                        echo "          <img class=\"g-testimonial-author-img\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc(twig_escape_filter($this->env, $this->getAttribute($context["testimonial"], "img", array()))), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["testimonial"], "author", array()));
                        echo "\">
          ";
                    }
                    // line 24
                    echo "          
          ";
                    // line 25
                    if (($this->getAttribute($context["testimonial"], "author", array()) || $this->getAttribute($context["testimonial"], "company", array()))) {
                        // line 26
                        echo "          <div class=\"g-testimonial-author-text\">
            ";
                        // line 27
                        if ($this->getAttribute($context["testimonial"], "author", array())) {
                            // line 28
                            echo "            <span class=\"g-testimonial-author-name\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["testimonial"], "author", array()));
                            echo "</span>
            ";
                        }
                        // line 30
                        echo "            ";
                        if ($this->getAttribute($context["testimonial"], "company", array())) {
                            // line 31
                            echo "            <span class=\"g-testimonial-author-company\"><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["testimonial"], "companyurl", array()));
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["testimonial"], "company", array()));
                            echo "</a></span>
            ";
                        }
                        // line 33
                        echo "          </div>
          ";
                    }
                    // line 35
                    echo "        </div>
        ";
                }
                // line 37
                echo "
        <div class=\"g-testimonial-text\">
          ";
                // line 39
                echo $this->getAttribute($context["testimonial"], "content", array());
                echo "
        </div>        
      </div>
      ";
            }
            // line 43
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/testimonial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  138 => 43,  131 => 39,  127 => 37,  123 => 35,  119 => 33,  111 => 31,  108 => 30,  102 => 28,  100 => 27,  97 => 26,  95 => 25,  92 => 24,  84 => 22,  82 => 21,  79 => 20,  77 => 19,  73 => 17,  71 => 16,  66 => 15,  62 => 14,  58 => 13,  55 => 12,  49 => 10,  47 => 9,  44 => 8,  38 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/*   <div class="g-testimonials {{ particle.class|e }}">*/
/*     {% if particle.title %}*/
/*     <h3 class="g-title">{{ particle.title|raw }}</h3>*/
/*     {% endif %}*/
/*     */
/*     {% if particle.intro %}*/
/*     <p>{{ particle.intro|raw }}</p>*/
/*     {% endif %}*/
/* */
/*     <div class="g-testimonials-items {{ particle.cols|e }}">*/
/*     {% for testimonial in particle.testimonials %}*/
/*     <div class="g-testimonial-item {{ testimonial.style|e }}">*/
/*       {% if testimonial.content %}*/
/*       <div class="g-testimonial-content">*/
/*         */
/*         {% if testimonial.img or testimonial.author or testimonial.company %}*/
/*         <div class="g-testimonial-author-container">*/
/*           {% if testimonial.img %}*/
/*           <img class="g-testimonial-author-img" src="{{ url(testimonial.img|e) }}" alt="{{ testimonial.author|e }}">*/
/*           {% endif %}*/
/*           */
/*           {% if testimonial.author or testimonial.company %}*/
/*           <div class="g-testimonial-author-text">*/
/*             {% if testimonial.author %}*/
/*             <span class="g-testimonial-author-name">{{ testimonial.author|e }}</span>*/
/*             {% endif %}*/
/*             {% if testimonial.company %}*/
/*             <span class="g-testimonial-author-company"><a href="{{ testimonial.companyurl|e }}">{{ testimonial.company|e }}</a></span>*/
/*             {% endif %}*/
/*           </div>*/
/*           {% endif %}*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         <div class="g-testimonial-text">*/
/*           {{ testimonial.content|raw }}*/
/*         </div>        */
/*       </div>*/
/*       {% endif %}*/
/*     </div>*/
/*     {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
