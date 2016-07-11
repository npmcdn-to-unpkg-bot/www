<?php

/* @particles/simplecounter.html.twig */
class __TwigTemplate_5feb555811a94009b5d2688047bff320ca60db118aa8261a4d4646bac865b721 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/simplecounter.html.twig", 1);
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
        echo "  ";
        if (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "getName", array(), "method") == "joomla")) {
            // line 5
            echo "    ";
            $this->getAttribute((isset($context["joomla"]) ? $context["joomla"] : null), "html", array(0 => "behavior.framework"), "method");
            // line 6
            echo "  ";
        } elseif ((($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "getName", array(), "method") == "wordpress") && (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "call", array(0 => "wp_script_is", 1 => "mootools.js"), "method") == true) || ($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "call", array(0 => "wp_script_is", 1 => "rok_mootools_js"), "method") == true)))) {
            // line 7
            echo "  ";
        } else {
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("https://ajax.googleapis.com/ajax/libs/mootools/1.5.1/mootools-yui-compressed.js"), "html", null, true);
            echo "\"></script>
  ";
        }
        // line 10
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-theme://js/simplecounter.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\">
  window.addEvent('load', function(){
    var counter = new SimpleCounter(
      'g-simplecounter-calendar',
      /* Year (Full Year), Month (0 to 11), Day (1 to 31) */
      /* For example: Date(2020,10,1) means 1 November 2020 */
      new Date('";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "year", array()), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "month", array()), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "date", array()), "html", null, true);
        echo "'),
      {lang : {
        d:{single:'";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "daytext", array()), "html", null, true);
        echo "',plural:'";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "daystext", array()), "html", null, true);
        echo "'}, //days
        h:{single:'";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "hourtext", array()), "html", null, true);
        echo "',plural:'";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "hourstext", array()), "html", null, true);
        echo "'}, //hours
        m:{single:'";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "minutetext", array()), "html", null, true);
        echo "',plural:'";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "minutestext", array()), "html", null, true);
        echo "'}, //minutes
        s:{single:'";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "secondtext", array()), "html", null, true);
        echo "',plural:'";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "secondstext", array()), "html", null, true);
        echo "'}  //seconds
      }
    });
  });
  </script>
";
    }

    // line 29
    public function block_particle($context, array $blocks = array())
    {
        // line 30
        echo "
\t";
        // line 31
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        // line 32
        echo "
\t<div class=\"g-simplecounter ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
\t\t<div class=\"g-simplecounter-content\">
\t\t\t";
        // line 35
        echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "desc", array());
        echo "
\t\t</div>
\t\t<div class=\"g-simplecounter-block\">
\t\t\t<div id=\"g-simplecounter-calendar\"></div>
\t\t</div>\t
\t</div>
  
";
    }

    public function getTemplateName()
    {
        return "@particles/simplecounter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 35,  115 => 33,  112 => 32,  106 => 31,  103 => 30,  100 => 29,  88 => 22,  82 => 21,  76 => 20,  70 => 19,  61 => 17,  50 => 10,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block javascript %}*/
/*   {% if gantry.platform.getName() == 'joomla' %}*/
/*     {% do joomla.html('behavior.framework') %}*/
/*   {% elseif gantry.platform.getName() == 'wordpress' and (gantry.platform.call('wp_script_is', 'mootools.js') == true or gantry.platform.call('wp_script_is', 'rok_mootools_js') == true) %}*/
/*   {% else %}*/
/*     <script type="text/javascript" src="{{ url('https://ajax.googleapis.com/ajax/libs/mootools/1.5.1/mootools-yui-compressed.js') }}"></script>*/
/*   {% endif %}*/
/*   <script src="{{ url('gantry-theme://js/simplecounter.js') }}"></script>*/
/*   <script type="text/javascript">*/
/*   window.addEvent('load', function(){*/
/*     var counter = new SimpleCounter(*/
/*       'g-simplecounter-calendar',*/
/*       /* Year (Full Year), Month (0 to 11), Day (1 to 31) *//* */
/*       /* For example: Date(2020,10,1) means 1 November 2020 *//* */
/*       new Date('{{ particle.year }}','{{ particle.month }}','{{ particle.date }}'),*/
/*       {lang : {*/
/*         d:{single:'{{ particle.daytext }}',plural:'{{ particle.daystext }}'}, //days*/
/*         h:{single:'{{ particle.hourtext }}',plural:'{{ particle.hourstext }}'}, //hours*/
/*         m:{single:'{{ particle.minutetext }}',plural:'{{ particle.minutestext }}'}, //minutes*/
/*         s:{single:'{{ particle.secondtext }}',plural:'{{ particle.secondstext }}'}  //seconds*/
/*       }*/
/*     });*/
/*   });*/
/*   </script>*/
/* {% endblock %}*/
/* */
/* {% block particle %}*/
/* */
/* 	{% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %}*/
/* */
/* 	<div class="g-simplecounter {{ particle.class|e }}">*/
/* 		<div class="g-simplecounter-content">*/
/* 			{{ particle.desc|raw }}*/
/* 		</div>*/
/* 		<div class="g-simplecounter-block">*/
/* 			<div id="g-simplecounter-calendar"></div>*/
/* 		</div>	*/
/* 	</div>*/
/*   */
/* {% endblock %}*/
