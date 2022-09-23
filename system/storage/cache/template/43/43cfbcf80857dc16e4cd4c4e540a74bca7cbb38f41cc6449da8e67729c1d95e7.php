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

/* freshmart/template/extension/module/ishislider.twig */
class __TwigTemplate_dd95e2d2b64210be5e5bbb3e791564c64849e8533ca27ea5be09e0f580415e32 extends \Twig\Template
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
        echo "<div id=\"";
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"ishislider col-lg-9 col-md-9 col-sm-12 col-xs-12\">
  <div class=\"owl-carousel\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_sliderimages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_sliderimage"]) {
            // line 4
            echo "      <div class=\"item\">
          <a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "link", [], "any", false, false, false, 5);
            echo "\" class=\"slideshow__link\">
            <img src=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "image", [], "any", false, false, false, 6);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "title", [], "any", false, false, false, 6);
            echo "\" class=\"img-responsive\" />
            <div class=\"container\">
              <div class=\"slider-content col-lg-7 col-md-7 col-sm-7 col-xs-7 ";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "textposition", [], "any", false, false, false, 8);
            echo "\" style=\"text-align:";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "textalignment", [], "any", false, false, false, 8);
            echo "\">
                ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "subtitle", [], "any", false, false, false, 9)) {
                // line 10
                echo "                  <div class=\"sub-title\" style=\"color:";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "subtitlecolor", [], "any", false, false, false, 10);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "subtitle", [], "any", false, false, false, 10);
                echo "</div>
                ";
            }
            // line 12
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "title", [], "any", false, false, false, 12)) {
                // line 13
                echo "                  <div class=\"main-title\" style=\"color: ";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "titlecolor", [], "any", false, false, false, 13);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "title", [], "any", false, false, false, 13);
                echo "</div>
                ";
            }
            // line 15
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "description", [], "any", false, false, false, 15)) {
                // line 16
                echo "                  <div class=\"desc\" >
                    <p style=\"color: ";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "descriptioncolor", [], "any", false, false, false, 17);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "description", [], "any", false, false, false, 17);
                echo "</p>
                  </div>
                ";
            }
            // line 20
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "btntext", [], "any", false, false, false, 20)) {
                // line 21
                echo "                  <div class=\"slider-btn\"><span class=\"btn-default btn\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "btntext", [], "any", false, false, false, 21);
                echo "</span></div>
                ";
            }
            // line 23
            echo "              </div> 
            </div>
          </a>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_sliderimage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo " 
  </div>
  <script type=\"text/javascript\">
    \$('#";
        // line 30
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
        loop:true,
        nav:";
        // line 32
        echo ($context["navigation"] ?? null);
        echo ",
        dots:";
        // line 33
        echo ($context["dot"] ?? null);
        echo ",
        autoplay:";
        // line 34
        echo ($context["autoplay"] ?? null);
        echo ",
        rtl: \$('html').attr('dir') == 'rtl'? true : false,
        animateOut: 'fadeOut',
        dotsClass: 'owl-dots ";
        // line 37
        echo ($context["dot_style"] ?? null);
        echo "',
        navClass: [\"owl-prev ";
        // line 38
        echo ($context["navigation_style"] ?? null);
        echo "\",\"owl-next ";
        echo ($context["navigation_style"] ?? null);
        echo "\"],
        navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
        responsive:{
            0:{
                items:1
            }
        }
    });
  </script>
</div>
<div id=\"_mobile_servicesblock\"></div>";
    }

    public function getTemplateName()
    {
        return "freshmart/template/extension/module/ishislider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 38,  145 => 37,  139 => 34,  135 => 33,  131 => 32,  126 => 30,  121 => 27,  111 => 23,  105 => 21,  102 => 20,  94 => 17,  91 => 16,  88 => 15,  80 => 13,  77 => 12,  69 => 10,  67 => 9,  61 => 8,  54 => 6,  50 => 5,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshmart/template/extension/module/ishislider.twig", "");
    }
}
