<?php

/* @particles/overlaytoggle.html.twig */
class __TwigTemplate_489da2000074b79da4800059c03896a50a6bbc8adcf5063bd8580ffd80e87d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/overlaytoggle.html.twig", 1);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
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
    public function block_javascript($context, array $blocks = array())
    {
        // line 4
        if (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "getName", array(), "method") == "joomla")) {
            // line 5
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["joomla"]) ? $context["joomla"] : null), "html", array(0 => "jquery.framework"), "method"), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute($this->getAttribute(        // line 6
(isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "getName", array(), "method") == "wordpress")) {
            // line 7
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "call", array(0 => "wp_enqueue_script", 1 => "jquery"), "method"), "html", null, true);
            echo "
";
        }
        // line 9
        echo "<script>
jQuery(window).load(function(){
  /* When user clicks the Icon */
  jQuery(\".nav-toggle\").click(function() {
    jQuery(this).toggleClass(\"active\");
    jQuery(\"#g-overlay\").toggleClass(\"open\");
  });

  /* When user clicks outside */
  jQuery(\"#g-overlay\").click(function() {
    jQuery(\".nav-toggle\").toggleClass(\"active\");
    jQuery(\"#g-overlay\").toggleClass(\"open\");
  }); 
});
</script>
";
    }

    // line 26
    public function block_particle($context, array $blocks = array())
    {
        // line 27
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
  <div class=\"g-overlaytoggle\">
    ";
        // line 29
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        echo " 
    <a id=\"trigger-overlay\" class=\"nav_slide_button nav-toggle\" href=\"#\" onclick=\"return false\">
      ";
        // line 31
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "menutext", array())) {
            echo "<span class=\"g-overlaytoggle-text\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "menutext", array());
            echo "</span>";
        }
        // line 32
        echo "    </a>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/overlaytoggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 32,  84 => 31,  75 => 29,  69 => 27,  66 => 26,  47 => 9,  41 => 7,  39 => 6,  34 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block javascript %}*/
/* {% if gantry.platform.getName() == 'joomla' %}*/
/*   {{ joomla.html('jquery.framework') }}*/
/* {% elseif gantry.platform.getName() == 'wordpress' %}*/
/*   {{ gantry.platform.call('wp_enqueue_script', 'jquery') }}*/
/* {% endif %}*/
/* <script>*/
/* jQuery(window).load(function(){*/
/*   /* When user clicks the Icon *//* */
/*   jQuery(".nav-toggle").click(function() {*/
/*     jQuery(this).toggleClass("active");*/
/*     jQuery("#g-overlay").toggleClass("open");*/
/*   });*/
/* */
/*   /* When user clicks outside *//* */
/*   jQuery("#g-overlay").click(function() {*/
/*     jQuery(".nav-toggle").toggleClass("active");*/
/*     jQuery("#g-overlay").toggleClass("open");*/
/*   }); */
/* });*/
/* </script>*/
/* {% endblock %}*/
/* */
/* {% block particle %}*/
/* <div class="{{ particle.class|e }}">*/
/*   <div class="g-overlaytoggle">*/
/*     {% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %} */
/*     <a id="trigger-overlay" class="nav_slide_button nav-toggle" href="#" onclick="return false">*/
/*       {% if particle.menutext %}<span class="g-overlaytoggle-text">{{ particle.menutext|raw }}</span>{% endif %}*/
/*     </a>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
