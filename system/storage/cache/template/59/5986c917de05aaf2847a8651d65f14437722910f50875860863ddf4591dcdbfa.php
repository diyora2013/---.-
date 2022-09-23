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

/* dreamauto/template/extension/module/ishispecialdeals.twig */
class __TwigTemplate_14e73a218c66c72e63a6df2be14d087efaf5dfab3e0d525fbd69fa4aa67d4555 extends \Twig\Template
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
        echo "\" class=\"ishispecialdeals\">
  <h3 class=\"home-title\">";
        // line 2
        echo ($context["heading"] ?? null);
        echo "</h3>
  <div class=\"box_productblock row\">
    <div class=\"owl-carousel\">
\t    ";
        // line 5
        $context["counter"] = 1;
        // line 6
        echo "      ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["special"] ?? null));
        // line 7
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["special"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "   
        ";
            // line 8
            if ((($context["product_row"] ?? null) != 1)) {
                // line 9
                echo "          ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 10
                    echo "            <div class=\"multilevel-item\">
          ";
                }
                // line 12
                echo "        ";
            }
            // line 13
            echo "          <div class=\"item\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 13);
            echo "\">
            <div class=\"product-thumb\">
                <div class=\"image\">
                  <a href=\"";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
            echo "\">
                    <img src=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
            echo "\" class=\"img-responsive\"/>
                    ";
            // line 18
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 18) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 19
                echo "                      <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 19);
                echo "\"/>
                    ";
            }
            // line 21
            echo "                  </a>  
                  ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 22)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 22);
                echo "</span>";
            }
            // line 23
            echo "                  ";
            if ((($context["review"] ?? null) == 1)) {
                // line 24
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "                      <div class=\"rating\">
                        ";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 27
                        echo "                          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 27) < $context["i"])) {
                            echo " 
                            <span class=\"fa fa-stack\">
                              <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span> 
                          ";
                        } else {
                            // line 31
                            echo " 
                            <span class=\"fa fa-stack\">
                              <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                            </span> 
                          ";
                        }
                        // line 36
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "                      </div>
                      ";
                } else {
                    // line 39
                    echo "                      <div class=\"rating\">
                        ";
                    // line 40
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 41
                        echo "                        <span class=\"fa fa-stack\">
                          <i class=\"fa fa-star gray fa-stack-2x\"></i>
                          </span>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "                      </div>
                    ";
                }
                // line 46
                echo " 
                  ";
            }
            // line 47
            echo " 
                  ";
            // line 48
            if ((($context["displaycounter"] ?? null) == 1)) {
                // line 49
                echo "                    <div class='countdown-container'>
                      <div class='countdown-days counter'>
                        <span class=\"data\"></span>
                        <span class=\"lbl\">";
                // line 52
                echo ($context["days_name"] ?? null);
                echo "</span>
                      </div>
                      <div class='countdown-hours counter'>
                        <span class=\"data\"></span>
                        <span class=\"lbl\">";
                // line 56
                echo ($context["hours_name"] ?? null);
                echo "</span>
                      </div>
                      <div class='countdown-minutes counter'>
                        <span class=\"data\"></span>
                        <span class=\"lbl\">";
                // line 60
                echo ($context["min_name"] ?? null);
                echo "</span>
                      </div>
                      <div class='countdown-seconds counter'>
                        <span class=\"data\"></span>
                        <span class=\"lbl\">";
                // line 64
                echo ($context["sec_name"] ?? null);
                echo "</span>
                      </div>
                    </div> 
                  ";
            }
            // line 67
            echo " 
                  <div class=\"button-group\">  
                    <div class=\"btn-quickview\"> 
                      <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 70
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                        <a class=\"quickbox\" href=\"";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 71);
            echo "\">
                          <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                            <symbol id=\"eye-open1\" viewBox=\"0 0 1200 1200\"><title>eye-open</title><path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z\"></path></symbol>
                          </svg>
                          <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open1\" x=\"28%\" y=\"28%\"></use></svg>
                          <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                          <span class=\"lblcart\">";
            // line 77
            echo ($context["quick_view"] ?? null);
            echo "</span>
                        </a>
                      </div>
                    </div>

                    <div class=\"btn-wishlist\">
                      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 83
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 83);
            echo "');\"><i class=\"fa fa-heart\"></i>                            
                        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                          <symbol id=\"heart-fillshape-outline\" viewBox=\"0 0 1500 1500\">
                            <title>heart-fillshape-outline</title>
                            <path d=\"M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514C512,93.417,453.532,30,376,30z\"/>
                          </symbol>
                        </svg>
                        <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-fillshape-outline\" x=\"32%\" y=\"35%\"></use></svg>
                      </button>
                    </div>

                    <div class=\"btn-compare\">  
                      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 95
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 95);
            echo "');\"><i class=\"fa fa-exchange\"></i>                            
                        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                          <symbol id=\"report\" viewBox=\"0 0 1510 1510\"><title>report</title><path d=\"M106.547,234.667H10.88c-5.888,0-10.667,4.779-10.667,10.667v256C0.213,507.221,4.992,512,10.88,512h106.667c5.888,0,10.667-4.779,-6.333-10.667v-256C128.213,239.445,123.456,234.667,117.547,234.667z\"></path><path d=\"M309.12,0H202.453c-5.888,0-10.667,4.779-10.667,10.667v490.667c0,5.112,4.779,10.667,10.667,10.667H309.12c5.888,0,10.667-4.779,-12.333-10.667V10.667C319.787,4.779,315.008,0,309.12,0z\"></path><path d=\"M501.12,106.667H394.453c-5.888,0-10.667,4.779-10.667,10.667v384c0,5.888,4.779,10.667,10.667,10.667H501.12c5.888,0,10.667-4.779,-6.333-10.667v10-384C511.787,111.445,507.008,106.667,501.12,106.667z\"></path></symbol>
                        </svg>
                        <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"30%\" y=\"30%\"></use></svg>
                      </button>
                    </div>
                  </div>   
                </div> 
                <div class=\"caption\">
                  <h4><a href=\"";
            // line 105
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 105);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 105);
            echo "</a></h4>
                  ";
            // line 106
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 106)) {
                // line 107
                echo "                  <p class=\"price\">
                    ";
                // line 108
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 108)) {
                    // line 109
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 109);
                    echo "
                    ";
                } else {
                    // line 111
                    echo "                    <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 111);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 111);
                    echo "</span> 
                    ";
                }
                // line 113
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 113)) {
                    // line 114
                    echo "                    <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 114);
                    echo "</span>
                    ";
                }
                // line 116
                echo "                  </p>
                  ";
            }
            // line 118
            echo "                  ";
            if ((($context["description"] ?? null) == 1)) {
                echo "<p class=\"description\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 118);
                echo "</p>";
            }
            // line 119
            echo "                  <div class=\"btn-cart\">
                    <button data-toggle=\"tooltip\" title=\"";
            // line 120
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 120);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 120)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                        <span class=\"lblcart\">";
            // line 121
            echo ($context["button_cart"] ?? null);
            echo "</span>
                    </button>
                  </div>
                </div> 
            </div>                       
          </div>
        ";
            // line 127
            if ((($context["product_row"] ?? null) != 1)) {
                // line 128
                echo "          ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 129
                    echo "            </div>
          ";
                }
                // line 131
                echo "        ";
            }
            // line 132
            echo "        ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 133
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "       
    </div>
  </div>
  <script type=\"text/javascript\">
    \$(\"#";
        // line 137
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .item\").each(function() {
      var container = \$(this).find('.countdown-container');
      var time = \$(this).data('countdowntime');
      \$(container).countdown(time, function(event) {
        \$(this).find(\".countdown-days .data\").html(event.strftime('%D'));
        \$(this).find(\".countdown-hours .data\").html(event.strftime('%H'));
        \$(this).find(\".countdown-minutes .data\").html(event.strftime('%M'));
        \$(this).find(\".countdown-seconds .data\").html(event.strftime('%S'));
        });
    });

    \$('#";
        // line 148
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
        loop:false,
        nav:true,
        rewind:true,
        dots:false,
        rtl: \$('html').attr('dir') == 'rtl'? true : false,
        navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
        responsive:{
            0:{
                items:2
            },
            544:{
                items:2
            },
            768:{
                items:2
            },
            992:{
                items:2
            },
            1200:{
                items:4
            }
        }
    });
  </script>
</section>


";
    }

    public function getTemplateName()
    {
        return "dreamauto/template/extension/module/ishispecialdeals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 148,  369 => 137,  358 => 133,  355 => 132,  352 => 131,  348 => 129,  345 => 128,  343 => 127,  334 => 121,  324 => 120,  321 => 119,  314 => 118,  310 => 116,  302 => 114,  299 => 113,  291 => 111,  285 => 109,  283 => 108,  280 => 107,  278 => 106,  272 => 105,  257 => 95,  240 => 83,  231 => 77,  222 => 71,  218 => 70,  213 => 67,  206 => 64,  199 => 60,  192 => 56,  185 => 52,  180 => 49,  178 => 48,  175 => 47,  171 => 46,  167 => 45,  158 => 41,  154 => 40,  151 => 39,  147 => 37,  141 => 36,  134 => 31,  125 => 27,  121 => 26,  118 => 25,  115 => 24,  112 => 23,  106 => 22,  103 => 21,  93 => 19,  91 => 18,  83 => 17,  79 => 16,  72 => 13,  69 => 12,  65 => 10,  62 => 9,  60 => 8,  53 => 7,  50 => 6,  48 => 5,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamauto/template/extension/module/ishispecialdeals.twig", "");
    }
}
