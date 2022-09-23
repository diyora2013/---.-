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

/* freshmart/template/extension/module/ishimanufacturerblock.twig */
class __TwigTemplate_f9e484fdea99088c70ab512945a41aa239b16bc9627148ccbad88df81f2e9630 extends \Twig\Template
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
        echo "<section id=\"";
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"manufacturerblock\">
    <h3 class=\"home-title\">";
        // line 2
        echo ($context["heading"] ?? null);
        echo "</h3>
    <div class=\"owl-carousel\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 5
            echo "            <div class=\"item\">
                ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["manufacturer"], "link", [], "any", false, false, false, 6)) {
                // line 7
                echo "                    <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "link", [], "any", false, false, false, 7);
                echo "\">
                        <img src=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "image", [], "any", false, false, false, 8);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "title", [], "any", false, false, false, 8);
                echo "\" class=\"img-responsive\" />
                    </a>
                ";
            } else {
                // line 11
                echo "                    <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "image", [], "any", false, false, false, 11);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "title", [], "any", false, false, false, 11);
                echo "\" class=\"img-responsive\" />
                ";
            }
            // line 13
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </div>
    <script type=\"text/javascript\">
        \$('#";
        // line 17
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
            loop:";
        // line 18
        echo ($context["loop"] ?? null);
        echo ",
            nav:true,
            dots:false,
            autoplay:";
        // line 21
        echo ($context["autoplay"] ?? null);
        echo ",
            animateOut: 'fadeOut',
            rtl: \$('html').attr('dir') == 'rtl'? true : false,
            navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
            responsive:{
                    0:{
                        items:2
                    },
                    480:{
                        items:3
                    },
                    768:{
                        items:4
                    },
                    992:{
                        items:4
                    },
                    1200:{
                        items:5
                    }
                }
        });
    </script>
</section>";
    }

    public function getTemplateName()
    {
        return "freshmart/template/extension/module/ishimanufacturerblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  92 => 18,  88 => 17,  84 => 15,  77 => 13,  69 => 11,  61 => 8,  56 => 7,  54 => 6,  51 => 5,  47 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshmart/template/extension/module/ishimanufacturerblock.twig", "");
    }
}
