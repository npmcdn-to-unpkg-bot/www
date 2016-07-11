<?php

/* @particles/chartist.html.twig */
class __TwigTemplate_23a17137d871b8caab647f0d05d552b15c338d79b688fcbc21984dcd8651ec0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/chartist.html.twig", 1);
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
\t<div class=\"g-chartist\">
\t\t<div class=\"ct-chart-";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo " ct-golden-section\"></div>
\t</div>

</div>
";
    }

    // line 14
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 15
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-theme://js/chartist.js"), "html", null, true);
        echo "\"></script>

";
        // line 17
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "type", array()) == "line")) {
            // line 18
            echo "\t<script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            var chart = new Chartist.Line('.ct-chart-";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "', {
                labels: [";
            // line 21
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "labelsData", array());
            echo "],
                series: [
                    ";
            // line 23
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "seriesData", array());
            echo "
                ]
            }, {
                low: 0
            });
        });
\t</script>
";
        } elseif (($this->getAttribute(        // line 30
(isset($context["particle"]) ? $context["particle"] : null), "type", array()) == "bar")) {
            // line 31
            echo "\t<script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            new Chartist.Bar('.ct-chart-";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "', {
                labels: [";
            // line 34
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "labelsData", array());
            echo "],
                series: [
                    ";
            // line 36
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "seriesData", array());
            echo "
                ]
            }, {
                // Default mobile configuration
                stackBars: true,
                axisX: {
                    labelInterpolationFnc: function(value) {
                        return value.split(/\\s+/).map(function(word) {
                            return word[0];
                        }).join('');
                    }
                },
                axisY: {
                    offset: 20
                }
            }, [
                // Options override for media > 400px
                ['screen and (min-width: 400px)', {
                    reverseData: true,
                    horizontalBars: true,
                    axisX: {
                        labelInterpolationFnc: Chartist.noop
                    },
                    axisY: {
                        offset: 60
                    }
                }],
                // Options override for media > 800px
                ['screen and (min-width: 800px)', {
                    stackBars: false,
                    seriesBarDistance: 10
                }],
                // Options override for media > 1000px
                ['screen and (min-width: 1000px)', {
                    reverseData: false,
                    horizontalBars: false,
                    seriesBarDistance: 15
                }]
            ]);
        });
\t</script>
";
        } elseif (($this->getAttribute(        // line 77
(isset($context["particle"]) ? $context["particle"] : null), "type", array()) == "pie")) {
            // line 78
            echo "\t<script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            var chart = new Chartist.Pie('.ct-chart-";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "', {
                series: [";
            // line 81
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "labelsData", array());
            echo "],
                labels: ";
            // line 82
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "seriesData", array());
            echo "
            }, {
                donut: true
            });

            function detectIE() {
                var ua = window.navigator.userAgent;

                var msie = ua.indexOf('MSIE ');
                if (msie > 0) {
                    // IE 10 or older => return version number
                    return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
                }

                var trident = ua.indexOf('Trident/');
                if (trident > 0) {
                    // IE 11 => return version number
                    var rv = ua.indexOf('rv:');
                    return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
                }

                var edge = ua.indexOf('Edge/');
                if (edge > 0) {
                    // IE 12 => return version number
                    return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
                }

                // other browser
                return false;
            }

            chart.on('draw', function(data) {
                if (data.type === 'slice') {
                    data.element.addClass(\"animated-slice\");

                    // // Get the total path length in order to use for dash array animation
                    var pathLength = data.element._node.getTotalLength();
                    //
                    // // Set a dasharray that matches the path length as prerequisite to animate dashoffset
                    if (detectIE() == false) {
                        data.element.attr({
                            'stroke-dasharray': pathLength + 'px ' + pathLength + 'px',
                            'stroke-dashoffset': -pathLength + 'px'
                        });
                    }
                }
            });

            // For the sake of the example we update the chart every time it's created with a delay of 8 seconds
            chart.on('created', function() {
                if (window.__anim21278907124) {
                    clearTimeout(window.__anim21278907124);
                    window.__anim21278907124 = null;
                }
                window.__anim21278907124 = setTimeout(chart.update.bind(chart), 5000);
            });
        });
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@particles/chartist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 82,  159 => 81,  155 => 80,  151 => 78,  149 => 77,  105 => 36,  100 => 34,  96 => 33,  92 => 31,  90 => 30,  80 => 23,  75 => 21,  71 => 20,  67 => 18,  65 => 17,  59 => 15,  56 => 14,  47 => 8,  43 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/* <div class="{{ particle.class|e }}">*/
/*   	{% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %}*/
/* */
/* 	<div class="g-chartist">*/
/* 		<div class="ct-chart-{{ id }} ct-golden-section"></div>*/
/* 	</div>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascript_footer %}*/
/* <script src="{{ url('gantry-theme://js/chartist.js') }}"></script>*/
/* */
/* {% if particle.type == "line" %}*/
/* 	<script>*/
/*         document.addEventListener("DOMContentLoaded", function() {*/
/*             var chart = new Chartist.Line('.ct-chart-{{ id }}', {*/
/*                 labels: [{{ particle.labelsData|raw }}],*/
/*                 series: [*/
/*                     {{ particle.seriesData|raw }}*/
/*                 ]*/
/*             }, {*/
/*                 low: 0*/
/*             });*/
/*         });*/
/* 	</script>*/
/* {% elseif particle.type == "bar" %}*/
/* 	<script>*/
/*         document.addEventListener("DOMContentLoaded", function() {*/
/*             new Chartist.Bar('.ct-chart-{{ id }}', {*/
/*                 labels: [{{ particle.labelsData|raw }}],*/
/*                 series: [*/
/*                     {{ particle.seriesData|raw }}*/
/*                 ]*/
/*             }, {*/
/*                 // Default mobile configuration*/
/*                 stackBars: true,*/
/*                 axisX: {*/
/*                     labelInterpolationFnc: function(value) {*/
/*                         return value.split(/\s+/).map(function(word) {*/
/*                             return word[0];*/
/*                         }).join('');*/
/*                     }*/
/*                 },*/
/*                 axisY: {*/
/*                     offset: 20*/
/*                 }*/
/*             }, [*/
/*                 // Options override for media > 400px*/
/*                 ['screen and (min-width: 400px)', {*/
/*                     reverseData: true,*/
/*                     horizontalBars: true,*/
/*                     axisX: {*/
/*                         labelInterpolationFnc: Chartist.noop*/
/*                     },*/
/*                     axisY: {*/
/*                         offset: 60*/
/*                     }*/
/*                 }],*/
/*                 // Options override for media > 800px*/
/*                 ['screen and (min-width: 800px)', {*/
/*                     stackBars: false,*/
/*                     seriesBarDistance: 10*/
/*                 }],*/
/*                 // Options override for media > 1000px*/
/*                 ['screen and (min-width: 1000px)', {*/
/*                     reverseData: false,*/
/*                     horizontalBars: false,*/
/*                     seriesBarDistance: 15*/
/*                 }]*/
/*             ]);*/
/*         });*/
/* 	</script>*/
/* {% elseif particle.type == "pie" %}*/
/* 	<script>*/
/*         document.addEventListener("DOMContentLoaded", function() {*/
/*             var chart = new Chartist.Pie('.ct-chart-{{ id }}', {*/
/*                 series: [{{ particle.labelsData|raw }}],*/
/*                 labels: {{ particle.seriesData|raw }}*/
/*             }, {*/
/*                 donut: true*/
/*             });*/
/* */
/*             function detectIE() {*/
/*                 var ua = window.navigator.userAgent;*/
/* */
/*                 var msie = ua.indexOf('MSIE ');*/
/*                 if (msie > 0) {*/
/*                     // IE 10 or older => return version number*/
/*                     return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);*/
/*                 }*/
/* */
/*                 var trident = ua.indexOf('Trident/');*/
/*                 if (trident > 0) {*/
/*                     // IE 11 => return version number*/
/*                     var rv = ua.indexOf('rv:');*/
/*                     return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);*/
/*                 }*/
/* */
/*                 var edge = ua.indexOf('Edge/');*/
/*                 if (edge > 0) {*/
/*                     // IE 12 => return version number*/
/*                     return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);*/
/*                 }*/
/* */
/*                 // other browser*/
/*                 return false;*/
/*             }*/
/* */
/*             chart.on('draw', function(data) {*/
/*                 if (data.type === 'slice') {*/
/*                     data.element.addClass("animated-slice");*/
/* */
/*                     // // Get the total path length in order to use for dash array animation*/
/*                     var pathLength = data.element._node.getTotalLength();*/
/*                     //*/
/*                     // // Set a dasharray that matches the path length as prerequisite to animate dashoffset*/
/*                     if (detectIE() == false) {*/
/*                         data.element.attr({*/
/*                             'stroke-dasharray': pathLength + 'px ' + pathLength + 'px',*/
/*                             'stroke-dashoffset': -pathLength + 'px'*/
/*                         });*/
/*                     }*/
/*                 }*/
/*             });*/
/* */
/*             // For the sake of the example we update the chart every time it's created with a delay of 8 seconds*/
/*             chart.on('created', function() {*/
/*                 if (window.__anim21278907124) {*/
/*                     clearTimeout(window.__anim21278907124);*/
/*                     window.__anim21278907124 = null;*/
/*                 }*/
/*                 window.__anim21278907124 = setTimeout(chart.update.bind(chart), 5000);*/
/*             });*/
/*         });*/
/* 	</script>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
