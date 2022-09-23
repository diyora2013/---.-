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

/* freshmart/template/extension/module/bestseller.twig */
class __TwigTemplate_ec068f7ac9f8185d43fb67d7c38f4dd63449f3343c4e8ad0fbfb1f2f69e8c2d7 extends \Twig\Template
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
  <h3 class=\"home-title hidden-sm hidden-xs\">
      ";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "
  </h3>
  <div class=\"block-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#bestseller-container\" data-toggle=\"collapse\">
    <span class=\"page-title\">";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</span>
    <span class=\"navbar-toggler collapse-icons\">
      <i class=\"fa fa-angle-down add\"></i>
      <i class=\"fa fa-angle-up remove\"></i>
    </span>
  </div>
  <div id=\"bestseller-container\" class=\"collapse in data-toggler\">
    <div id=\"bestseller\" class=\"owl-carousel\">
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
            echo "      <div class=\"product-thumb transition\">
        <div class=\"image\">
          <a href=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
            echo "\">
            <img src=\"";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 23);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
            echo "\" class=\"img-responsive\" />
            ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 24) != "")) {
                // line 25
                echo "              <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 25);
                echo "\"/>
            ";
            }
            // line 27
            echo "          </a>
        </div>
        <div class=\"caption\">
          <h4><a href=\"";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30);
            echo "</a></h4>
          <p class=\"description\">";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 31);
            echo "</p>
          ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 32)) {
                // line 33
                echo "            <p class=\"price\">
              ";
                // line 34
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "              ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 35);
                    echo "
              ";
                } else {
                    // line 37
                    echo "              <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 37);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 37);
                    echo "</span>
              ";
                }
                // line 39
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 39)) {
                    // line 40
                    echo "              <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 40);
                    echo "</span>
              ";
                }
                // line 42
                echo "            </p>
          ";
            }
            // line 44
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 44)) {
                // line 45
                echo "            <div class=\"rating\">
              ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 47
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 47) < $context["i"])) {
                        echo " 
                  <span class=\"fa fa-stack\">
                    <i class=\"fa fa-star-o fa-stack-2x\"></i>
                  </span> 
                ";
                    } else {
                        // line 51
                        echo " 
                  <span class=\"fa fa-stack\">
                    <i class=\"fa fa-star fa-stack-2x\"></i>
                  </span> 
                ";
                    }
                    // line 56
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "            </div>
          ";
            }
            // line 59
            echo "          <div class=\"button-group\">  
            <div class=\"btn-quickview\"> 
              <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 61
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                <a class=\"quickbox\" href=\"";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 62);
            echo "\">
                      <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                    </a>
              </div>
            </div>
            <div class=\"btn-wishlist\">
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 68
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 68);
            echo "');\"><i class=\"fa fa-heart\"></i></button>
            </div>
            <div class=\"btn-compare\">
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 71
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 71);
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
            <div class=\"btn-cart\">
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 74
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 74);
            echo "');\">
                <i class=\"fa fa-shopping-cart\"></i> 
                <span class=\"lblcart\">";
            // line 76
            echo ($context["button_cart"] ?? null);
            echo "</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      ";
            // line 82
            if ((((($context["counter"] ?? null) % 2) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                // line 83
                echo "        </div>
      ";
            }
            // line 85
            echo "      ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 86
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "freshmart/template/extension/module/bestseller.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 86,  245 => 85,  241 => 83,  239 => 82,  230 => 76,  223 => 74,  215 => 71,  207 => 68,  198 => 62,  194 => 61,  190 => 59,  186 => 57,  180 => 56,  173 => 51,  164 => 47,  160 => 46,  157 => 45,  154 => 44,  150 => 42,  142 => 40,  139 => 39,  131 => 37,  125 => 35,  123 => 34,  120 => 33,  118 => 32,  114 => 31,  108 => 30,  103 => 27,  93 => 25,  91 => 24,  83 => 23,  79 => 22,  75 => 20,  71 => 18,  68 => 17,  63 => 16,  60 => 15,  58 => 14,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshmart/template/extension/module/bestseller.twig", "");
    }
}
