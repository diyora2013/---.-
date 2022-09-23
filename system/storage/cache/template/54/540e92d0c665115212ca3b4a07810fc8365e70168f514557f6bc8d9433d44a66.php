<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* freshmart/template/extension/module/ishitestimonialsblock.twig */
class __TwigTemplate_ada1e79bad8226b42e031dfd4edaaf547ce33b0814b13cd59e0c6f7c29312cd3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section class=\"ishitestimonials\">
\t";
        // line 2
        if (($context["title"] ?? null)) {
            // line 3
            echo "\t\t<h3 class=\"home-title hidden-sm hidden-xs\">";
            echo ($context["title"] ?? null);
            echo "</h3>
\t";
        }
        // line 5
        echo "\t<div class=\"block-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#testimonials\" data-toggle=\"collapse\">
\t\t<span class=\"page-title\">";
        // line 6
        echo ($context["title"] ?? null);
        echo "</span>
\t\t<span class=\"navbar-toggler collapse-icons\">
\t\t\t<i class=\"fa fa-angle-down add\"></i>
\t\t\t<i class=\"fa fa-angle-up remove\"></i>
\t\t</span>
\t</div>
\t<div id=\"";
        // line 12
        echo ($context["random_id"] ?? null);
        echo "\">\t\t\t
\t\t<div id=\"testimonials\" class=\"ishitestimonials-container collapse data-toggler\">\t\t\t
\t\t\t<div class=\"owl-carousel\">\t\t\t\t
\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishitestimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishitestimonial"]) {
            // line 16
            echo "\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"user-description\">
\t\t\t\t\t\t\t<span class=\"quote\">
\t\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"40px\" y=\"40px\"
\t\t\t\t\t\t\t\t\tviewBox=\"0 0 1040 1040\">\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<path d=\"M925.036,57.197h-304c-27.6,0-50,22.4-50,50v304c0,27.601,22.4,50,50,50h145.5c-1.9,79.601-20.4,143.3-55.4,191.2 c-27.6,37.8-69.399,69.1-125.3,93.8c-25.7,11.3-36.8,41.7-24.8,67.101l36,76c11.6,24.399,40.3,35.1,65.1,24.399 c66.2-28.6,122.101-64.8,167.7-108.8c55.601-53.7,93.7-114.3,114.3-181.9c20.601-67.6,30.9-159.8,30.9-276.8v-239 C975.036,79.598,952.635,57.197,925.036,57.197z\"/><path d=\"M106.036,913.497c65.4-28.5,121-64.699,166.9-108.6c56.1-53.7,94.4-114.1,115-181.2c20.6-67.1,30.899-159.6,30.899-277.5 v-239c0-27.6-22.399-50-50-50h-304c-27.6,0-50,22.4-50,50v304c0,27.601,22.4,50,50,50h145.5c-1.9,79.601-20.4,143.3-55.4,191.2 c-27.6,37.8-69.4,69.1-125.3,93.8c-25.7,11.3-36.8,41.7-24.8,67.101l35.9,75.8C52.336,913.497,81.236,924.298,106.036,913.497z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "description", [], "any", false, false, false, 24);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"testimonial-img\">
\t\t\t\t\t\t\t<img src=\"";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "image", [], "any", false, false, false, 27);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "username", [], "any", false, false, false, 27);
            echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"testimonial-info\">
\t\t\t\t\t\t\t<span class=\"user-name\">
\t\t\t\t\t\t\t\t";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "username", [], "any", false, false, false, 31);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"user-designation\">
\t\t\t\t\t\t\t\t";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "designation", [], "any", false, false, false, 34);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishitestimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<script type=\"text/javascript\">  
\t\t\$('#";
        // line 43
        echo ($context["random_id"] ?? null);
        echo " .owl-carousel').owlCarousel({
\t\t\tloop:false,
\t\t\tnav: true,
\t\t\trewind: true,
\t\t\tdots: false,
\t\t\tautoplay:";
        // line 48
        echo ($context["autoplay"] ?? null);
        echo ",
\t\t\trtl: \$('html').attr('dir') == 'rtl'? true : false,
\t\t\tnavText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
\t\t\titems:1
\t\t});
\t</script>
\t<style>
\t\t.ishitestimonials{
\t\t\tbackground-color: ";
        // line 56
        echo ($context["bgcolor"] ?? null);
        echo "
\t\t}
\t</style>
</section>";
    }

    public function getTemplateName()
    {
        return "freshmart/template/extension/module/ishitestimonialsblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 56,  127 => 48,  119 => 43,  112 => 38,  101 => 34,  95 => 31,  86 => 27,  80 => 24,  70 => 16,  66 => 15,  60 => 12,  51 => 6,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshmart/template/extension/module/ishitestimonialsblock.twig", "");
    }
}
