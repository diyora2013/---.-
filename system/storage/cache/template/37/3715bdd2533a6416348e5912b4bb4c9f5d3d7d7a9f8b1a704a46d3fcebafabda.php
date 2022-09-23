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

/* freshmart/template/extension/module/latest.twig */
class __TwigTemplate_e072ffb74548562d315e81e88031d45cb1b97f6bc01dc773fbcc0eeb572a2310 extends \Twig\Template
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
        echo "<section class=\"featured-products clearfix\">  
  <h2 class=\"home-title hidden-sm hidden-xs\">
      ";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "
  </h2>
  <div class=\"block-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#latest-container\" data-toggle=\"collapse\">
    <span class=\"page-title\">";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</span>
    <span class=\"navbar-toggler collapse-icons\">
      <i class=\"fa fa-angle-down add\"></i>
      <i class=\"fa fa-angle-up remove\"></i>
    </span>
  </div>
  <div id=\"latest-container\" class=\"collapse in data-toggler\">
    <div id=\"newlatest\" class=\"owl-carousel\">
     ";
        // line 14
        $context["counter"] = 1;
        // line 15
        echo "      ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["products"] ?? null));
        // line 16
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 17
            echo "        ";
            if (((($context["counter"] ?? null) % 2) == 1)) {
                // line 18
                echo "          <div class=\"multilevel-item\">
        ";
            }
            // line 20
            echo "        <div class=\"product-thumb transition\">
        \t<div class=\"product-container\">
            <div class=\"image\">
              <a href=\"";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
            echo "\">
                <img src=\"";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 24);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
            echo "\" class=\"img-responsive\" />
                ";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 25) != "")) {
                // line 26
                echo "                  <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 26);
                echo "\"/>
                ";
            }
            // line 28
            echo "              </a>
            </div>
            <div class=\"caption\">
              <h4><a href=\"";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 31);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
            echo "</a></h4>
              <p class=\"description\">";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 32);
            echo "</p>
              ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 33)) {
                // line 34
                echo "                <p class=\"price\">
                  ";
                // line 35
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "                  ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 36);
                    echo "
                  ";
                } else {
                    // line 38
                    echo "                  <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 38);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 38);
                    echo "</span>
                  ";
                }
                // line 40
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 40)) {
                    // line 41
                    echo "                  <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 41);
                    echo "</span>
                  ";
                }
                // line 43
                echo "                </p>
              ";
            }
            // line 45
            echo "              ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 45)) {
                // line 46
                echo "                <div class=\"rating\">
                  ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 48
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 48) < $context["i"])) {
                        echo " 
                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star-o fa-stack-2x\"></i>
                      </span> 
                    ";
                    } else {
                        // line 52
                        echo " 
                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star fa-stack-2x\"></i>
                      </span> 
                    ";
                    }
                    // line 57
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "                </div>
              ";
            }
            // line 60
            echo "              <div class=\"button-group\">  
                <div class=\"btn-quickview\"> 
                  <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 62
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                    <a class=\"quickbox\" href=\"";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 63);
            echo "\">
                          <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                        </a>
                  </div>
                </div>
                <div class=\"btn-wishlist\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 69
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 69);
            echo "');\"><i class=\"fa fa-heart\"></i></button>
                </div>
                <div class=\"btn-compare\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 72
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 72);
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
                </div>
                <div class=\"btn-cart\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 75
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 75);
            echo "');\">
                    <i class=\"fa fa-shopping-cart\"></i> 
                    <span class=\"lblcart\">";
            // line 77
            echo ($context["button_cart"] ?? null);
            echo "</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
       </div>
        ";
            // line 84
            if ((((($context["counter"] ?? null) % 2) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                // line 85
                echo "          </div>
        ";
            }
            // line 87
            echo "      ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 88
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "freshmart/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 88,  247 => 87,  243 => 85,  241 => 84,  231 => 77,  224 => 75,  216 => 72,  208 => 69,  199 => 63,  195 => 62,  191 => 60,  187 => 58,  181 => 57,  174 => 52,  165 => 48,  161 => 47,  158 => 46,  155 => 45,  151 => 43,  143 => 41,  140 => 40,  132 => 38,  126 => 36,  124 => 35,  121 => 34,  119 => 33,  115 => 32,  109 => 31,  104 => 28,  94 => 26,  92 => 25,  84 => 24,  80 => 23,  75 => 20,  71 => 18,  68 => 17,  63 => 16,  60 => 15,  58 => 14,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshmart/template/extension/module/latest.twig", "");
    }
}
