<?php

/* @particles/infolist.html.twig */
class __TwigTemplate_c26e88db2ae0accdbeb8c3ef6349cd7efd1fde6d9e2da4ee5a3173b298a43f2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/infolist.html.twig", 1);
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
  ";
        // line 5
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title g-infolist-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        // line 6
        echo "
  <div class=\"g-infolist ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "cols", array()));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
    
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
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "infolists", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["infolist"]) {
            // line 14
            echo "      <div class=\"g-infolist-item ";
            if ($this->getAttribute($context["infolist"], "image", array())) {
                echo " g-infolist-with-img";
            }
            echo "\">
        
        ";
            // line 16
            ob_start();
            // line 17
            echo "        <div class=\"g-infolist-item-img g-block";
            if (($this->getAttribute($context["infolist"], "imagestyle", array()) == "compact")) {
                echo " size-22 hidden-phone";
            }
            if (($this->getAttribute($context["infolist"], "imagestyle", array()) == "browser")) {
                echo " browser";
            }
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "imageloc", array()));
            echo "\">
          ";
            // line 18
            if (($this->getAttribute($context["infolist"], "imagestyle", array()) == "browser")) {
                // line 19
                echo "          <div class=\"browser-wrapper\">
            <div class=\"browser-bar\">
              <span class=\"browser-button\"></span>
            </div>
          ";
            }
            // line 24
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["infolist"], "image", array())));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["infolist"], "title", array())));
            echo "\" />
          ";
            // line 25
            if (($this->getAttribute($context["infolist"], "imagestyle", array()) == "browser")) {
                // line 26
                echo "          </div>
          ";
            }
            // line 28
            echo "        </div>
        ";
            $context["imagedata"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 30
            echo "        
        ";
            // line 31
            if (($this->getAttribute($context["infolist"], "image", array()) && ($this->getAttribute($context["infolist"], "imageloc", array()) == "left"))) {
                // line 32
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["imagedata"]) ? $context["imagedata"] : null), "html", null, true);
                echo "
        ";
            }
            // line 34
            echo "        
        <div class=\"g-infolist-item-text";
            // line 35
            if ($this->getAttribute($context["infolist"], "image", array())) {
                echo " g-block";
            }
            echo " g-infolist-textstyle-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "textstyle", array()), "html", null, true);
            echo "\">
          ";
            // line 36
            if ($this->getAttribute($context["infolist"], "title", array())) {
                // line 37
                echo "          <div class=\"g-infolist-item-title ";
                if (($this->getAttribute($context["infolist"], "textstyle", array()) == "bold")) {
                    echo "g-bold";
                }
                echo "\">
            ";
                // line 38
                if (($this->getAttribute($context["infolist"], "textstyle", array()) == "large")) {
                    // line 39
                    echo "            <div class=\"g-title-hero\">
            ";
                }
                // line 40
                echo " 
            ";
                // line 41
                if ($this->getAttribute($context["infolist"], "link", array())) {
                    // line 42
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "link", array()));
                    echo "\">
            ";
                }
                // line 43
                echo " 
              ";
                // line 44
                echo $this->getAttribute($context["infolist"], "title", array());
                echo "
            ";
                // line 45
                if ($this->getAttribute($context["infolist"], "link", array())) {
                    // line 46
                    echo "            </a>
            ";
                }
                // line 47
                echo " 
            ";
                // line 48
                if (($this->getAttribute($context["infolist"], "textstyle", array()) == "large")) {
                    // line 49
                    echo "            </div>
            ";
                }
                // line 51
                echo "          </div>
          ";
            }
            // line 53
            echo "          
          ";
            // line 54
            if (($this->getAttribute($context["infolist"], "tag", array()) || $this->getAttribute($context["infolist"], "subtag", array()))) {
                // line 55
                echo "          <div class=\"g-infolist-tags\">
          ";
                // line 56
                if ($this->getAttribute($context["infolist"], "tag", array())) {
                    // line 57
                    echo "            ";
                    if ($this->getAttribute($context["infolist"], "link", array())) {
                        // line 58
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "link", array()));
                        echo "\">
            ";
                    }
                    // line 59
                    echo " 
              <span class=\"g-tag\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "tag", array()));
                    echo "</span>
            ";
                    // line 61
                    if ($this->getAttribute($context["infolist"], "link", array())) {
                        // line 62
                        echo "            </a>
            ";
                    }
                    // line 63
                    echo " 
          ";
                }
                // line 64
                echo " 
      
          ";
                // line 66
                if ($this->getAttribute($context["infolist"], "subtag", array())) {
                    // line 67
                    echo "          <span class=\"g-small\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "subtag", array()));
                    echo "</span>
          ";
                }
                // line 69
                echo "          </div>
          ";
            }
            // line 71
            echo "
          ";
            // line 72
            if ($this->getAttribute($context["infolist"], "desc", array())) {
                // line 73
                echo "          <div class=\"g-infolist-item-desc\">
            ";
                // line 74
                if (($this->getAttribute($context["infolist"], "textstyle", array()) == "large")) {
                    // line 75
                    echo "            <div class=\"g-large\">
            ";
                }
                // line 77
                echo "            ";
                echo $this->getAttribute($context["infolist"], "desc", array());
                echo "
            ";
                // line 78
                if (($this->getAttribute($context["infolist"], "textstyle", array()) == "large")) {
                    // line 79
                    echo "            </div>
            ";
                }
                // line 81
                echo "          </div>
          ";
            }
            // line 83
            echo "          
          ";
            // line 84
            if (($this->getAttribute($context["infolist"], "link", array()) && $this->getAttribute($context["infolist"], "label", array()))) {
                // line 85
                echo "          <div class=\"g-infolist-link\">
            <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "link", array()));
                echo "\" class=\"button ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "readmoreclass", array()));
                echo "\">";
                if ($this->getAttribute($context["infolist"], "icon", array())) {
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "icon", array()));
                    echo "\"></i>";
                }
                // line 87
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "label", array()));
                echo "
            </a>
          </div>
          ";
            }
            // line 91
            echo "        </div>
        
        ";
            // line 93
            if (($this->getAttribute($context["infolist"], "image", array()) && ($this->getAttribute($context["infolist"], "imageloc", array()) == "right"))) {
                // line 94
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["imagedata"]) ? $context["imagedata"] : null), "html", null, true);
                echo "
        ";
            }
            // line 96
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['infolist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
  </div>

";
    }

    public function getTemplateName()
    {
        return "@particles/infolist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 98,  306 => 96,  300 => 94,  298 => 93,  294 => 91,  286 => 87,  276 => 86,  273 => 85,  271 => 84,  268 => 83,  264 => 81,  260 => 79,  258 => 78,  253 => 77,  249 => 75,  247 => 74,  244 => 73,  242 => 72,  239 => 71,  235 => 69,  229 => 67,  227 => 66,  223 => 64,  219 => 63,  215 => 62,  213 => 61,  209 => 60,  206 => 59,  200 => 58,  197 => 57,  195 => 56,  192 => 55,  190 => 54,  187 => 53,  183 => 51,  179 => 49,  177 => 48,  174 => 47,  170 => 46,  168 => 45,  164 => 44,  161 => 43,  155 => 42,  153 => 41,  150 => 40,  146 => 39,  144 => 38,  137 => 37,  135 => 36,  127 => 35,  124 => 34,  118 => 32,  116 => 31,  113 => 30,  109 => 28,  105 => 26,  103 => 25,  96 => 24,  89 => 19,  87 => 18,  75 => 17,  73 => 16,  65 => 14,  61 => 13,  58 => 12,  52 => 10,  50 => 9,  43 => 7,  40 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/* */
/*   {% if particle.title %}<h2 class="g-title g-infolist-title">{{ particle.title|raw }}</h2>{% endif %}*/
/* */
/*   <div class="g-infolist {{ particle.cols|e }} {{ particle.class|e }}">*/
/*     */
/*     {% if particle.intro %}*/
/*     <p>{{ particle.intro|raw }}</p>*/
/*     {% endif %}*/
/* */
/*     {% for infolist in particle.infolists %}*/
/*       <div class="g-infolist-item {% if infolist.image %} g-infolist-with-img{% endif %}">*/
/*         */
/*         {% set imagedata %}*/
/*         <div class="g-infolist-item-img g-block{% if infolist.imagestyle == 'compact' %} size-22 hidden-phone{% endif %}{% if infolist.imagestyle == 'browser' %} browser{% endif %} {{ infolist.imageloc|e }}">*/
/*           {% if infolist.imagestyle == 'browser' %}*/
/*           <div class="browser-wrapper">*/
/*             <div class="browser-bar">*/
/*               <span class="browser-button"></span>*/
/*             </div>*/
/*           {% endif %}*/
/*           <img src="{{ url(infolist.image)|e }}" alt="{{ url(infolist.title)|e }}" />*/
/*           {% if infolist.imagestyle == 'browser' %}*/
/*           </div>*/
/*           {% endif %}*/
/*         </div>*/
/*         {% endset %}*/
/*         */
/*         {% if infolist.image and infolist.imageloc == 'left' %}*/
/*         {{ imagedata }}*/
/*         {% endif %}*/
/*         */
/*         <div class="g-infolist-item-text{% if infolist.image %} g-block{% endif %} g-infolist-textstyle-{{ infolist.textstyle }}">*/
/*           {% if infolist.title %}*/
/*           <div class="g-infolist-item-title {% if infolist.textstyle == 'bold' %}g-bold{% endif %}">*/
/*             {% if infolist.textstyle == 'large' %}*/
/*             <div class="g-title-hero">*/
/*             {% endif %} */
/*             {% if infolist.link %}*/
/*             <a href="{{ infolist.link|e }}">*/
/*             {% endif %} */
/*               {{ infolist.title|raw }}*/
/*             {% if infolist.link %}*/
/*             </a>*/
/*             {% endif %} */
/*             {% if infolist.textstyle == 'large' %}*/
/*             </div>*/
/*             {% endif %}*/
/*           </div>*/
/*           {% endif %}*/
/*           */
/*           {% if infolist.tag or infolist.subtag %}*/
/*           <div class="g-infolist-tags">*/
/*           {% if infolist.tag %}*/
/*             {% if infolist.link %}*/
/*             <a href="{{ infolist.link|e }}">*/
/*             {% endif %} */
/*               <span class="g-tag">{{ infolist.tag|e }}</span>*/
/*             {% if infolist.link %}*/
/*             </a>*/
/*             {% endif %} */
/*           {% endif %} */
/*       */
/*           {% if infolist.subtag %}*/
/*           <span class="g-small">{{ infolist.subtag|e }}</span>*/
/*           {% endif %}*/
/*           </div>*/
/*           {% endif %}*/
/* */
/*           {% if infolist.desc %}*/
/*           <div class="g-infolist-item-desc">*/
/*             {% if infolist.textstyle == 'large' %}*/
/*             <div class="g-large">*/
/*             {% endif %}*/
/*             {{ infolist.desc|raw }}*/
/*             {% if infolist.textstyle == 'large' %}*/
/*             </div>*/
/*             {% endif %}*/
/*           </div>*/
/*           {% endif %}*/
/*           */
/*           {% if infolist.link and infolist.label %}*/
/*           <div class="g-infolist-link">*/
/*             <a href="{{ infolist.link|e }}" class="button {{ infolist.readmoreclass|e }}">{% if infolist.icon %}<i class="{{ infolist.icon|e }}"></i>{% endif %}*/
/*               {{ infolist.label|e }}*/
/*             </a>*/
/*           </div>*/
/*           {% endif %}*/
/*         </div>*/
/*         */
/*         {% if infolist.image and infolist.imageloc == 'right' %}*/
/*         {{ imagedata }}*/
/*         {% endif %}*/
/*       </div>*/
/*     {% endfor %}*/
/* */
/*   </div>*/
/* */
/* {% endblock %}*/
