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

/* freshmart/template/common/cart.twig */
class __TwigTemplate_9158977b341d11fd1d2a417366b5d084b4a071f73987074b64d593ba8762b584 extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
  <button type=\"button\" data-loading-text=\"";
        // line 2
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-inverse btn-block btn-lg\">
    <span class=\"cart-link\">
      <span class=\"cart-img hidden-xs hidden-sm\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">          
          <symbol id=\"shopping-bag\" viewBox=\"0 0 590 590\"><title>shopping-bag</title><path d=\"M258.005,218.355c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5l73.9-73.9c4.7-4.7,4.7-12.3,0-17s-12.3-4.7-17,0l-65.4,65.5l-26.4-26.4c-4.7-4.7-12.3-4.7-17,0s-4.7,12.3,0,17L258.005,218.355z\"/><path d=\"M145.005,318.355h268.9c29.7,0,53.8-24.2,53.8-53.8v-113.3c0-6.6-5.4-12-12-12s-12,5.4-12,12v113.2c0,16.5-13.4,29.8-29.8,29.8h-268.9c-16.5,0-29.8-13.4-29.8-29.8v-66.7v-74.6v-9.7v-70.2c0-0.4,0-0.9-0.1-1.3c0-0.1,0-0.2,0-0.3c0-0.3-0.1-0.6-0.1-0.8s-0.1-0.5-0.2-0.7c0-0.1-0.1-0.3-0.1-0.4c-0.1-0.3-0.2-0.5-0.3-0.8c0-0.1-0.1-0.2-0.1-0.3c-0.1-0.2-0.2-0.5-0.3-0.7c-0.1-0.1-0.1-0.3-0.2-0.4c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.2-0.2-0.3-0.3-0.5c-0.1-0.1-0.2-0.3-0.3-0.4c-0.1-0.2-0.3-0.4-0.4-0.5s-0.2-0.2-0.3-0.3c-0.2-0.2-0.3-0.4-0.5-0.6c-0.1-0.1-0.2-0.2-0.3-0.2c-0.2-0.2-0.4-0.4-0.6-0.5c-0.1-0.1-0.2-0.2-0.3-0.3c-0.2-0.1-0.4-0.3-0.6-0.4c-0.2-0.2-0.5-0.3-0.7-0.5c-0.1,0-0.2-0.1-0.2-0.2c-0.4-0.2-0.8-0.4-1.2-0.6l-73.9-31c-6.1-2.6-13.1,0.3-15.7,6.4c-2.6,6,0.3,13.1,6.4,15.7l66.5,28.1v62.3v9.7v74.6v66.7v84.3c0,28.2,21.7,51.3,49.3,53.6c-5.6,8.4-8.9,18.5-8.9,29.4c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2c0-10.8-3.2-20.8-8.7-29.2h127.3c-5.5,8.4-8.7,18.4-8.7,29.2c0,29.3,23.9,53.2,53.2,53.2s53.2-23.9,53.2-53.2s-23.9-53.2-53.2-53.2h-256c-16.5,0-29.8-13.4-29.8-29.8v-39.5C123.705,314.955,134.005,318.355,145.005,318.355z M213.905,431.755c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S213.905,415.655,213.905,431.755z M430.105,431.755c0,16.1-13.1,29.2-29.2,29.2s-29.2-13.1-29.2-29.2s13.1-29.2,29.2-29.2S430.105,415.655,430.105,431.755z\"/></symbol>
        </svg>
        <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-bag\" x=\"8%\" y=\"7%\"></use></svg>
      </span>
       <span class=\"cart-img hidden-lg hidden-md\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">          
            <symbol id=\"cart-responsive\" viewBox=\"0 0 510 510\"><title>cart-responsive</title>
                <path d=\"M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6
                v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4
                C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4
                C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z
                 M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4
                L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2
                V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2
                H270l22.4,209.2H30z\"></path>
            </symbol>
        </svg>
        <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#cart-responsive\" x=\"13%\" y=\"13%\"></use></svg>
      </span>
      <span class=\"cart-content\">
        <span class=\"cart-name\">";
        // line 26
        echo ($context["text_name"] ?? null);
        echo "</span>
        <span class=\"cart-products-count hidden-sm hidden-xs\">";
        // line 27
        echo ($context["text_items"] ?? null);
        echo "</span>
        <span class=\"cart-products-count hidden-lg hidden-md\">";
        // line 28
        echo ($context["text_items_small"] ?? null);
        echo "</span>
      </span>
    </span>
  </button>
  <ul class=\"cart-dropdown\">
    ";
        // line 33
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 34
            echo "    <li>
      <div class=\"slimScrollDiv\">
        <table class=\"table table-striped\">
          ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 38
                echo "          <tr>
            <td class=\"text-center product-image col-md-3 col-sm-3 col-xs-3\">";
                // line 39
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 39)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 39);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 39);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 39);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 39);
                    echo "\" class=\"img-responsive\" /></a> ";
                }
                // line 40
                echo "            </td>
            <td class=\"text-left col-md-7 col-sm-7 col-xs-7\">
              <span class=\"quantity-formated\">";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 42);
                echo " x</span>
              <a class=\"cart_block_product_name\" href=\"";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 43);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 43);
                echo "</a> 
              <span class=\"text-price text-left\">";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 44);
                echo "</span>
              ";
                // line 45
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 45)) {
                    // line 46
                    echo "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 46));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 47
                        echo "              - <span class=\"product-detail\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 47);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 47);
                        echo "</span> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "              ";
                }
                // line 49
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 49)) {
                    echo " <br />
              - <span class=\"product-detail\">";
                    // line 50
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 50);
                    echo "</span> ";
                }
                // line 51
                echo "            </td>
            
            <td class=\"text-center col-md-1 col-sm-1 col-xs-1\"><button type=\"button\" onclick=\"cart.remove('";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 53);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 57
                echo "          <tr>
            <td class=\"text-center\"></td>
            <td class=\"text-left\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 59);
                echo "</td>
            <td class=\"text-right\">x&nbsp;1</td>
            <td class=\"text-right\">";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 61);
                echo "</td>
            <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 62);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "        </table>
      </div>
    </li>
    <li>
      <div>
        <table class=\"table billing-info\">
          ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 72
                echo "          <tr>
            <td class=\"text-left\"><strong>";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 73);
                echo "</strong></td>
            <td class=\"text-right value\">";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 74);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "        </table>
        <div class=\"text-center cart-btn\">
          <a href=\"";
            // line 79
            echo ($context["cart"] ?? null);
            echo "\"><button type=\"button\" class=\"btn btn-default btn-cartblock\">  ";
            echo ($context["text_cart"] ?? null);
            echo "</button></a>&nbsp;&nbsp;&nbsp;
          <a href=\"";
            // line 80
            echo ($context["checkout"] ?? null);
            echo "\"><button type=\"button\" class=\"btn btn-primary btn-cartblock\"> ";
            echo ($context["text_checkout"] ?? null);
            echo "</button></a>
        </div>
      </div>
    </li>
    ";
        } else {
            // line 85
            echo "    <li>
      <p class=\"empty text-left\">";
            // line 86
            echo ($context["text_cartempty"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 89
        echo "  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "freshmart/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 89,  253 => 86,  250 => 85,  240 => 80,  234 => 79,  230 => 77,  221 => 74,  217 => 73,  214 => 72,  210 => 71,  202 => 65,  191 => 62,  187 => 61,  182 => 59,  178 => 57,  173 => 56,  162 => 53,  158 => 51,  152 => 50,  147 => 49,  144 => 48,  134 => 47,  129 => 46,  127 => 45,  123 => 44,  117 => 43,  113 => 42,  109 => 40,  97 => 39,  94 => 38,  90 => 37,  85 => 34,  83 => 33,  75 => 28,  71 => 27,  67 => 26,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshmart/template/common/cart.twig", "");
    }
}
