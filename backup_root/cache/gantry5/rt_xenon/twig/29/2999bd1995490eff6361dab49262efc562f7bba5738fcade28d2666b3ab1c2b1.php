<?php

/* @particles/flexslider.html.twig */
class __TwigTemplate_56089fd366da98f76a636710c2c423b32558282271e3969c643fcf15291c45be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/flexslider.html.twig", 1);
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
        echo "  ";
        if (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "getName", array(), "method") == "joomla")) {
            // line 5
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joomla"]) ? $context["joomla"] : null), "html", array(0 => "jquery.framework"), "method"), "html", null, true);
            echo "
  ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 6
(isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "getName", array(), "method") == "wordpress")) {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "call", array(0 => "wp_enqueue_script", 1 => "jquery"), "method"), "html", null, true);
            echo "
  ";
        }
        // line 9
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-theme://js/flexslider.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 12
    public function block_particle($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
\t";
        // line 14
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        // line 15
        echo "
\t";
        // line 16
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()) == "slideshow")) {
            // line 17
            echo "    <div class=\"g-flexslider g-flexslider-slideshow\">
    \t<div id=\"g-flexslider-slideshow-";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"g-flexslider-slideshow-container\">
\t\t\t<div class=\"g-flexslider-slideshow-slides\">
\t\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 21
                echo "\t\t\t\t<div class=\"g-flexslider-item-container g-flexslider-slideshow-item-container\">
\t\t\t\t\t<div class=\"g-flexslider-slideshow-item\" ";
                // line 22
                if ($this->getAttribute($context["item"], "image", array())) {
                    echo "style=\"background-image: url('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["item"], "image", array())));
                    echo "');\"";
                }
                echo ">
\t\t\t\t\t\t<div class=\"g-flexslider-slideshow-item-content-container\">
\t\t\t\t\t\t\t<div class=\"g-flexslider-slideshow-item-overlay\"
\t\t\t\t\t\t\t\t";
                // line 25
                if ($this->getAttribute($context["item"], "overlayImage", array())) {
                    echo "style=\"background: url('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["item"], "overlayImage", array())));
                    echo "') no-repeat;\"";
                }
                // line 26
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["item"], "overlayParallax", array())) {
                    echo " data-enllax-ratio=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "overlayParallaxRatio", array()));
                    echo "\" data-enllax-type=\"background\"";
                }
                // line 27
                echo "\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<div class=\"g-flexslider-slideshow-item-content\">
\t\t\t\t\t\t\t\t\t";
                // line 29
                if ($this->getAttribute($context["item"], "title", array())) {
                    echo "<div class=\"g-flexslider-slideshow-item-title\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</div>";
                }
                // line 30
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["item"], "desc", array())) {
                    echo "<div class=\"g-flexslider-slideshow-item-desc\">";
                    echo $this->getAttribute($context["item"], "desc", array());
                    echo "</div>";
                }
                // line 31
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["item"], "link", array())) {
                    echo "<div class=\"g-flexslider-slideshow-item-link\"><a target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "buttontarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "buttontarget", array()), "_self")) : ("_self")));
                    echo "\" class=\"g-flexslider-slideshow-item-button button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonclass", array()));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                    echo "\">";
                    echo $this->getAttribute($context["item"], "linktext", array());
                    echo "</a></div>";
                }
                // line 32
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t</div>
\t\t</div>
\t</div>
\t";
        } elseif (($this->getAttribute(        // line 41
(isset($context["particle"]) ? $context["particle"] : null), "layout", array()) == "testimonial")) {
            // line 42
            echo "    <div class=\"g-flexslider g-flexslider-testimonial\">
    \t<div id=\"g-flexslider-testimonial-";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"g-flexslider-testimonial-container\">
\t\t\t<div class=\"g-flexslider-testimonial-slides\">
\t\t\t\t";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 46
                echo "\t\t\t\t<div class=\"g-flexslider-item-container g-flexslider-testimonial-item-container\">
\t\t\t\t\t<div class=\"g-flexslider-testimonial-item\" ";
                // line 47
                if ($this->getAttribute($context["item"], "image", array())) {
                    echo "style=\"background-image: url('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["item"], "image", array())));
                    echo "');\"";
                }
                echo ">
\t\t\t\t\t\t<div class=\"g-flexslider-testimonial-item-overlay\"
\t\t\t\t\t\t\t";
                // line 49
                if ($this->getAttribute($context["item"], "overlayImage", array())) {
                    echo "style=\"background: url('";
                    echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["item"], "overlayImage", array())));
                    echo "') no-repeat;\"";
                }
                // line 50
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["item"], "overlayParallax", array())) {
                    echo " data-enllax-ratio=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "overlayParallaxRatio", array()));
                    echo "\" data-enllax-type=\"background\"";
                }
                // line 51
                echo "\t\t\t\t\t\t>
\t\t\t\t\t\t\t<div class=\"g-flexslider-testimonial-item-content\">
\t\t\t\t\t\t\t\t<div class=\"g-flexslider-testimonial-item-title-desc\">
\t\t\t\t\t\t\t\t\t";
                // line 54
                if ($this->getAttribute($context["item"], "title", array())) {
                    echo "<div class=\"g-flexslider-testimonial-item-title\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</div>";
                }
                // line 55
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["item"], "desc", array())) {
                    echo "<div class=\"g-flexslider-testimonial-item-desc\">";
                    echo $this->getAttribute($context["item"], "desc", array());
                    echo "</div>";
                }
                // line 56
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"g-flexslider-testimonial-item-testimonial-content\">
\t\t\t\t\t\t\t\t";
                // line 58
                if ($this->getAttribute($context["item"], "testimonialImage", array())) {
                    echo "<div class=\"g-flexslider-testimonial-item-testimonial-image\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["item"], "testimonialImage", array())));
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "testimonialName", array()));
                    echo "\"></div>";
                }
                // line 59
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["item"], "testimonialName", array())) {
                    echo "<div class=\"g-flexslider-testimonial-item-testimonial-name\">";
                    echo $this->getAttribute($context["item"], "testimonialName", array());
                    echo "</div>";
                }
                // line 60
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["item"], "testimonialPosition", array())) {
                    echo "<div class=\"g-flexslider-testimonial-item-testimonial-position\">";
                    echo $this->getAttribute($context["item"], "testimonialPosition", array());
                    echo "</div>";
                }
                // line 61
                echo "\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
                // line 64
                if ($this->getAttribute($context["item"], "link", array())) {
                    echo "<div class=\"g-flexslider-testimonial-item-link\"><a target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "buttontarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "buttontarget", array()), "_self")) : ("_self")));
                    echo "\" class=\"g-flexslider-testimonial-item-button button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonclass", array()));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                    echo "\">";
                    echo $this->getAttribute($context["item"], "linktext", array());
                    echo "</a></div>";
                }
                // line 65
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t\t\t</div>
\t\t</div>
\t</div>
\t";
        } elseif (($this->getAttribute(        // line 73
(isset($context["particle"]) ? $context["particle"] : null), "layout", array()) == "showcase")) {
            // line 74
            echo "    <div class=\"g-flexslider g-flexslider-showcase\">
    \t<div id=\"g-flexslider-showcase-";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"g-flexslider-showcase-container\">
\t\t\t<div class=\"g-flexslider-showcase-slides\">
\t\t\t\t";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 78
                echo "\t\t\t\t<div class=\"g-flexslider-item-container g-flexslider-showcase-item-container\">
\t\t\t\t\t<div class=\"g-flexslider-showcase-item\">
\t\t\t\t\t\t<div class=\"g-flexslider-showcase-item-content-container\">
\t\t\t\t\t\t\t<div class=\"g-flexslider-showcase-item-image\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["item"], "image", array())));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"g-flexslider-showcase-item-content\">
\t\t\t\t\t\t\t\t";
                // line 85
                if ($this->getAttribute($context["item"], "title", array())) {
                    echo "<div class=\"g-flexslider-showcase-item-title\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</div>";
                }
                // line 86
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["item"], "desc", array())) {
                    echo "<div class=\"g-flexslider-showcase-item-desc\">";
                    echo $this->getAttribute($context["item"], "desc", array());
                    echo "</div>";
                }
                // line 87
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["item"], "link", array())) {
                    echo "<div class=\"g-flexslider-showcase-item-link\"><a target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "buttontarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "buttontarget", array()), "_self")) : ("_self")));
                    echo "\" class=\"g-flexslider-showcase-item-button button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonclass", array()));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                    echo "\">";
                    echo $this->getAttribute($context["item"], "linktext", array());
                    echo "</a></div>";
                }
                // line 88
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t</div>
\t\t</div>
    \t<div id=\"g-flexslider-carousel-";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"g-flexslider-carousel-container\">
\t\t\t<div class=\"g-flexslider-carousel-slides\">
\t\t\t\t";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 98
                echo "\t\t\t\t<div class=\"g-flexslider-item-container g-flexslider-carousel-item-container\">
\t\t\t\t\t<div class=\"g-flexslider-carousel-item\">
\t\t\t\t\t\t<div class=\"g-flexslider-carousel-item-content-container\">
\t\t\t\t\t\t\t<div class=\"g-flexslider-carousel-item-image\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["item"], "image", array())));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"g-flexslider-carousel-item-image-preview-icon\"><span class=\"fa fa-plus-circle\"></span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 113
        echo "</div>

";
    }

    // line 117
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 118
        echo "  ";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()) == "slideshow")) {
            // line 119
            echo "  <script type=\"text/javascript\">
      jQuery(window).load(function(){
          jQuery('#g-flexslider-slideshow-";
            // line 121
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').flexslider({
              selector: \".g-flexslider-slideshow-slides > .g-flexslider-slideshow-item-container\",
              animation: \"slide\",
              prevText: \"\",
              nextText: \"\",
              rtl: ";
            // line 126
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "rtl", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "rtl", array()), "false")) : ("false")), "html", null, true);
            echo ",
              pauseOnHover: ";
            // line 127
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pauseOnHover", array());
            echo ",
              ";
            // line 128
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array())) {
                // line 129
                echo "                  slideshow: true,
                  slideshowSpeed: ";
                // line 130
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplaySpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplaySpeed", array()), "5000")) : ("5000")), "html", null, true);
                echo "
              ";
            } else {
                // line 132
                echo "                  slideshow: false
              ";
            }
            // line 134
            echo "          });
      });
  </script>
  ";
        } elseif (($this->getAttribute(        // line 137
(isset($context["particle"]) ? $context["particle"] : null), "layout", array()) == "testimonial")) {
            // line 138
            echo "  <script type=\"text/javascript\">
      jQuery(window).load(function(){
          jQuery('#g-flexslider-testimonial-";
            // line 140
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').flexslider({
              selector: \".g-flexslider-testimonial-slides > .g-flexslider-testimonial-item-container\",
              animation: \"slide\",
              prevText: \"\",
              nextText: \"\",
              rtl: ";
            // line 145
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "rtl", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "rtl", array()), "false")) : ("false")), "html", null, true);
            echo ",
              pauseOnHover: ";
            // line 146
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pauseOnHover", array());
            echo ",
              ";
            // line 147
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array())) {
                // line 148
                echo "                  slideshow: true,
                  slideshowSpeed: ";
                // line 149
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplaySpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplaySpeed", array()), "5000")) : ("5000")), "html", null, true);
                echo "
              ";
            } else {
                // line 151
                echo "                  slideshow: false
              ";
            }
            // line 153
            echo "          });
      });
  </script>
  ";
        } elseif (($this->getAttribute(        // line 156
(isset($context["particle"]) ? $context["particle"] : null), "layout", array()) == "showcase")) {
            // line 157
            echo "  <script type=\"text/javascript\">
      jQuery(window).load(function(){
          jQuery('#g-flexslider-carousel-";
            // line 159
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').flexslider({
              selector: \".g-flexslider-carousel-slides > .g-flexslider-carousel-item-container\",
              animation: \"slide\",
              controlNav: false,
              prevText: \"\",
              nextText: \"\",
              rtl: ";
            // line 165
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "rtl", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "rtl", array()), "false")) : ("false")), "html", null, true);
            echo ",
              animationLoop: true,
              itemWidth: ";
            // line 167
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "showcaseThumbWidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "showcaseThumbWidth", array()), "150")) : ("150")), "html", null, true);
            echo ",
              asNavFor: '#g-flexslider-showcase-";
            // line 168
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "',
              pauseOnHover: ";
            // line 169
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pauseOnHover", array());
            echo "
          });
          jQuery('#g-flexslider-showcase-";
            // line 171
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "').flexslider({
              selector: \".g-flexslider-showcase-slides > .g-flexslider-showcase-item-container\",
              animation: \"slide\",
              directionNav: false,
              controlNav: false,
              animationLoop: true,
              rtl: ";
            // line 177
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "rtl", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "rtl", array()), "false")) : ("false")), "html", null, true);
            echo ",
              sync: \"#g-flexslider-carousel-";
            // line 178
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\",
              pauseOnHover: ";
            // line 179
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "pauseOnHover", array());
            echo ",
              ";
            // line 180
            if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array())) {
                // line 181
                echo "                  slideshow: true,
                  slideshowSpeed: ";
                // line 182
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplaySpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplaySpeed", array()), "5000")) : ("5000")), "html", null, true);
                echo "
              ";
            } else {
                // line 184
                echo "                  slideshow: false
              ";
            }
            // line 186
            echo "          });
      });
  </script>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@particles/flexslider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  538 => 186,  534 => 184,  529 => 182,  526 => 181,  524 => 180,  520 => 179,  516 => 178,  512 => 177,  503 => 171,  498 => 169,  494 => 168,  490 => 167,  485 => 165,  476 => 159,  472 => 157,  470 => 156,  465 => 153,  461 => 151,  456 => 149,  453 => 148,  451 => 147,  447 => 146,  443 => 145,  435 => 140,  431 => 138,  429 => 137,  424 => 134,  420 => 132,  415 => 130,  412 => 129,  410 => 128,  406 => 127,  402 => 126,  394 => 121,  390 => 119,  387 => 118,  384 => 117,  378 => 113,  372 => 109,  357 => 102,  351 => 98,  347 => 97,  342 => 95,  338 => 93,  328 => 88,  315 => 87,  308 => 86,  302 => 85,  294 => 82,  288 => 78,  284 => 77,  279 => 75,  276 => 74,  274 => 73,  269 => 70,  259 => 65,  247 => 64,  242 => 61,  235 => 60,  228 => 59,  220 => 58,  216 => 56,  209 => 55,  203 => 54,  198 => 51,  191 => 50,  185 => 49,  176 => 47,  173 => 46,  169 => 45,  164 => 43,  161 => 42,  159 => 41,  154 => 38,  143 => 32,  130 => 31,  123 => 30,  117 => 29,  113 => 27,  106 => 26,  100 => 25,  90 => 22,  87 => 21,  83 => 20,  78 => 18,  75 => 17,  73 => 16,  70 => 15,  64 => 14,  59 => 13,  56 => 12,  49 => 9,  43 => 7,  41 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block javascript %}*/
/*   {% if gantry.platform.getName() == 'joomla' %}*/
/*     {{ joomla.html('jquery.framework') }}*/
/*   {% elseif gantry.platform.getName() == 'wordpress' %}*/
/*     {{ gantry.platform.call('wp_enqueue_script', 'jquery') }}*/
/*   {% endif %}*/
/*   <script src="{{ url('gantry-theme://js/flexslider.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block particle %}*/
/* <div class="{{ particle.class|e }}">*/
/* 	{% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %}*/
/* */
/* 	{% if particle.layout == "slideshow" %}*/
/*     <div class="g-flexslider g-flexslider-slideshow">*/
/*     	<div id="g-flexslider-slideshow-{{ id }}" class="g-flexslider-slideshow-container">*/
/* 			<div class="g-flexslider-slideshow-slides">*/
/* 				{% for item in particle.items %}*/
/* 				<div class="g-flexslider-item-container g-flexslider-slideshow-item-container">*/
/* 					<div class="g-flexslider-slideshow-item" {% if item.image %}style="background-image: url('{{ url(item.image)|e }}');"{% endif %}>*/
/* 						<div class="g-flexslider-slideshow-item-content-container">*/
/* 							<div class="g-flexslider-slideshow-item-overlay"*/
/* 								{% if item.overlayImage %}style="background: url('{{ url(item.overlayImage)|e }}') no-repeat;"{% endif %}*/
/* 								{% if item.overlayParallax %} data-enllax-ratio="{{ item.overlayParallaxRatio|e }}" data-enllax-type="background"{% endif %}*/
/* 							>*/
/* 								<div class="g-flexslider-slideshow-item-content">*/
/* 									{% if item.title %}<div class="g-flexslider-slideshow-item-title">{{ item.title|raw }}</div>{% endif %}*/
/* 									{% if item.desc %}<div class="g-flexslider-slideshow-item-desc">{{ item.desc|raw }}</div>{% endif %}*/
/* 									{% if item.link %}<div class="g-flexslider-slideshow-item-link"><a target="{{ item.buttontarget|default('_self')|e }}" class="g-flexslider-slideshow-item-button button {{ item.buttonclass|e }}" href="{{ item.link|e }}">{{ item.linktext|raw }}</a></div>{% endif %}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% elseif particle.layout == "testimonial" %}*/
/*     <div class="g-flexslider g-flexslider-testimonial">*/
/*     	<div id="g-flexslider-testimonial-{{ id }}" class="g-flexslider-testimonial-container">*/
/* 			<div class="g-flexslider-testimonial-slides">*/
/* 				{% for item in particle.items %}*/
/* 				<div class="g-flexslider-item-container g-flexslider-testimonial-item-container">*/
/* 					<div class="g-flexslider-testimonial-item" {% if item.image %}style="background-image: url('{{ url(item.image)|e }}');"{% endif %}>*/
/* 						<div class="g-flexslider-testimonial-item-overlay"*/
/* 							{% if item.overlayImage %}style="background: url('{{ url(item.overlayImage)|e }}') no-repeat;"{% endif %}*/
/* 							{% if item.overlayParallax %} data-enllax-ratio="{{ item.overlayParallaxRatio|e }}" data-enllax-type="background"{% endif %}*/
/* 						>*/
/* 							<div class="g-flexslider-testimonial-item-content">*/
/* 								<div class="g-flexslider-testimonial-item-title-desc">*/
/* 									{% if item.title %}<div class="g-flexslider-testimonial-item-title">{{ item.title|raw }}</div>{% endif %}*/
/* 									{% if item.desc %}<div class="g-flexslider-testimonial-item-desc">{{ item.desc|raw }}</div>{% endif %}*/
/* 								</div>*/
/* 								<div class="g-flexslider-testimonial-item-testimonial-content">*/
/* 								{% if item.testimonialImage %}<div class="g-flexslider-testimonial-item-testimonial-image"><img src="{{ url(item.testimonialImage)|e }}" alt="{{ item.testimonialName|e }}"></div>{% endif %}*/
/* 								{% if item.testimonialName %}<div class="g-flexslider-testimonial-item-testimonial-name">{{ item.testimonialName|raw }}</div>{% endif %}*/
/* 								{% if item.testimonialPosition %}<div class="g-flexslider-testimonial-item-testimonial-position">{{ item.testimonialPosition|raw }}</div>{% endif %}*/
/* 								<div class="clearfix"></div>*/
/* 								</div>*/
/* */
/* 								{% if item.link %}<div class="g-flexslider-testimonial-item-link"><a target="{{ item.buttontarget|default('_self')|e }}" class="g-flexslider-testimonial-item-button button {{ item.buttonclass|e }}" href="{{ item.link|e }}">{{ item.linktext|raw }}</a></div>{% endif %}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% elseif particle.layout == "showcase" %}*/
/*     <div class="g-flexslider g-flexslider-showcase">*/
/*     	<div id="g-flexslider-showcase-{{ id }}" class="g-flexslider-showcase-container">*/
/* 			<div class="g-flexslider-showcase-slides">*/
/* 				{% for item in particle.items %}*/
/* 				<div class="g-flexslider-item-container g-flexslider-showcase-item-container">*/
/* 					<div class="g-flexslider-showcase-item">*/
/* 						<div class="g-flexslider-showcase-item-content-container">*/
/* 							<div class="g-flexslider-showcase-item-image">*/
/* 								<img src="{{ url(item.image)|e }}" alt="{{ item.title|e }}">*/
/* 							</div>*/
/* 							<div class="g-flexslider-showcase-item-content">*/
/* 								{% if item.title %}<div class="g-flexslider-showcase-item-title">{{ item.title|raw }}</div>{% endif %}*/
/* 								{% if item.desc %}<div class="g-flexslider-showcase-item-desc">{{ item.desc|raw }}</div>{% endif %}*/
/* 								{% if item.link %}<div class="g-flexslider-showcase-item-link"><a target="{{ item.buttontarget|default('_self')|e }}" class="g-flexslider-showcase-item-button button {{ item.buttonclass|e }}" href="{{ item.link|e }}">{{ item.linktext|raw }}</a></div>{% endif %}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/*     	<div id="g-flexslider-carousel-{{ id }}" class="g-flexslider-carousel-container">*/
/* 			<div class="g-flexslider-carousel-slides">*/
/* 				{% for item in particle.items %}*/
/* 				<div class="g-flexslider-item-container g-flexslider-carousel-item-container">*/
/* 					<div class="g-flexslider-carousel-item">*/
/* 						<div class="g-flexslider-carousel-item-content-container">*/
/* 							<div class="g-flexslider-carousel-item-image">*/
/* 								<img src="{{ url(item.image)|e }}" alt="{{ item.title|e }}">*/
/* 								<div class="g-flexslider-carousel-item-image-preview-icon"><span class="fa fa-plus-circle"></span></div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% endif %}*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascript_footer %}*/
/*   {% if particle.layout == "slideshow" %}*/
/*   <script type="text/javascript">*/
/*       jQuery(window).load(function(){*/
/*           jQuery('#g-flexslider-slideshow-{{ id }}').flexslider({*/
/*               selector: ".g-flexslider-slideshow-slides > .g-flexslider-slideshow-item-container",*/
/*               animation: "slide",*/
/*               prevText: "",*/
/*               nextText: "",*/
/*               rtl: {{ particle.rtl|default('false') }},*/
/*               pauseOnHover: {{ particle.pauseOnHover|raw }},*/
/*               {% if particle.autoplay %}*/
/*                   slideshow: true,*/
/*                   slideshowSpeed: {{ particle.autoplaySpeed|default("5000") }}*/
/*               {% else %}*/
/*                   slideshow: false*/
/*               {% endif %}*/
/*           });*/
/*       });*/
/*   </script>*/
/*   {% elseif particle.layout == "testimonial" %}*/
/*   <script type="text/javascript">*/
/*       jQuery(window).load(function(){*/
/*           jQuery('#g-flexslider-testimonial-{{ id }}').flexslider({*/
/*               selector: ".g-flexslider-testimonial-slides > .g-flexslider-testimonial-item-container",*/
/*               animation: "slide",*/
/*               prevText: "",*/
/*               nextText: "",*/
/*               rtl: {{ particle.rtl|default('false') }},*/
/*               pauseOnHover: {{ particle.pauseOnHover|raw }},*/
/*               {% if particle.autoplay %}*/
/*                   slideshow: true,*/
/*                   slideshowSpeed: {{ particle.autoplaySpeed|default("5000") }}*/
/*               {% else %}*/
/*                   slideshow: false*/
/*               {% endif %}*/
/*           });*/
/*       });*/
/*   </script>*/
/*   {% elseif particle.layout == "showcase" %}*/
/*   <script type="text/javascript">*/
/*       jQuery(window).load(function(){*/
/*           jQuery('#g-flexslider-carousel-{{ id }}').flexslider({*/
/*               selector: ".g-flexslider-carousel-slides > .g-flexslider-carousel-item-container",*/
/*               animation: "slide",*/
/*               controlNav: false,*/
/*               prevText: "",*/
/*               nextText: "",*/
/*               rtl: {{ particle.rtl|default('false') }},*/
/*               animationLoop: true,*/
/*               itemWidth: {{ particle.showcaseThumbWidth|default("150") }},*/
/*               asNavFor: '#g-flexslider-showcase-{{ id }}',*/
/*               pauseOnHover: {{ particle.pauseOnHover|raw }}*/
/*           });*/
/*           jQuery('#g-flexslider-showcase-{{ id }}').flexslider({*/
/*               selector: ".g-flexslider-showcase-slides > .g-flexslider-showcase-item-container",*/
/*               animation: "slide",*/
/*               directionNav: false,*/
/*               controlNav: false,*/
/*               animationLoop: true,*/
/*               rtl: {{ particle.rtl|default('false') }},*/
/*               sync: "#g-flexslider-carousel-{{ id }}",*/
/*               pauseOnHover: {{ particle.pauseOnHover|raw }},*/
/*               {% if particle.autoplay %}*/
/*                   slideshow: true,*/
/*                   slideshowSpeed: {{ particle.autoplaySpeed|default("5000") }}*/
/*               {% else %}*/
/*                   slideshow: false*/
/*               {% endif %}*/
/*           });*/
/*       });*/
/*   </script>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
