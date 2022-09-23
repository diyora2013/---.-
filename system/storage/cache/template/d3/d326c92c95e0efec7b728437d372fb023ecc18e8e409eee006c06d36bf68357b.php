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
class __TwigTemplate_d280d57544d7cc23548196c8ea2729c8c81104dead72dda5504ff758c086e79f extends \Twig\Template
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
        ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "link", [], "any", false, false, false, 5)) {
                // line 6
                echo "          <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "link", [], "any", false, false, false, 6);
                echo "\">
            <img src=\"";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "image", [], "any", false, false, false, 7);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "title", [], "any", false, false, false, 7);
                echo "\" class=\"img-responsive\" />
          </a>
        ";
            } else {
                // line 10
                echo "          <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "image", [], "any", false, false, false, 10);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "title", [], "any", false, false, false, 10);
                echo "\" class=\"img-responsive\" />
        ";
            }
            // line 12
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_sliderimage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo " 
  </div>
  <script type=\"text/javascript\">
    \$('#";
        // line 16
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
        loop:true,
        nav:";
        // line 18
        echo ($context["navigation"] ?? null);
        echo ",
        dots:";
        // line 19
        echo ($context["dot"] ?? null);
        echo ",
        autoplay:";
        // line 20
        echo ($context["autoplay"] ?? null);
        echo ",
        rtl: \$('html').attr('dir') == 'rtl'? true : false,
        animateOut: 'fadeOut',
        dotsClass: 'owl-dots ";
        // line 23
        echo ($context["dot_style"] ?? null);
        echo "',
        navClass: [\"owl-prev ";
        // line 24
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
</div>";
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
        return array (  108 => 24,  104 => 23,  98 => 20,  94 => 19,  90 => 18,  85 => 16,  80 => 13,  73 => 12,  65 => 10,  57 => 7,  52 => 6,  50 => 5,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshmart/template/extension/module/ishislider.twig", "");
    }
}
