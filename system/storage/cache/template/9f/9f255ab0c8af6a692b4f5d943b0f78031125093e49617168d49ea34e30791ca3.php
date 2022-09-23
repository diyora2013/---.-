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

/* dreamauto/template/extension/module/ishiproductsblock.twig */
class __TwigTemplate_664af6d75c83f8512cfee360a528518d549bd5361f40057abb3aa1ff03068a69 extends \Twig\Template
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
        echo "\" class=\"ishiproductsblock\">
  <h3 class=\"home-title\">";
        // line 2
        echo ($context["heading"] ?? null);
        echo "</h3>
  <ul class=\"ishiproductstab nav nav-tabs clearfix\">
    ";
        // line 4
        if (($context["featured"] ?? null)) {
            // line 5
            echo "      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#featured-products-block";
            // line 6
            echo ($context["tab_randomnumer"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["heading_featured"] ?? null);
            echo "</a>
      </li>
    ";
        }
        // line 9
        echo "    ";
        if (($context["bestseller"] ?? null)) {
            // line 10
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#bestseller-products-block";
            // line 11
            echo ($context["tab_randomnumer"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["heading_bestseller"] ?? null);
            echo "</a>
      </li>
    ";
        }
        // line 14
        echo "    ";
        if (($context["new"] ?? null)) {
            // line 15
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#new-products-block";
            // line 16
            echo ($context["tab_randomnumer"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["heading_new"] ?? null);
            echo "</a>
      </li>
    ";
        }
        // line 19
        echo "    ";
        if (($context["special"] ?? null)) {
            // line 20
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#special-products-block";
            // line 21
            echo ($context["tab_randomnumer"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["heading_special"] ?? null);
            echo "</a>
      </li>
    ";
        }
        // line 24
        echo "\t";
        if (($context["category"] ?? null)) {
            // line 25
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 26
                echo "\t\t  <li class=\"nav-item\">
\t\t\t<a class=\"nav-link\" href=\"#category-block";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 27);
                echo "-";
                echo ($context["tab_randomnumer"] ?? null);
                echo "\" data-toggle=\"tab\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27);
                echo "</a>
\t\t  </li>
\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t";
        }
        // line 31
        echo "\t</ul>

  <div class=\"tab-content\">
    <div class=\"tab-pane active\" id=\"featured-products-block";
        // line 34
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content row\">        
        <div class=\"owl-carousel\"> 
            ";
        // line 37
        $context["counter"] = 1;
        // line 38
        echo "            ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["featured"] ?? null));
        echo " 
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featured"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 40
            echo "              ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 41
                echo "                ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 42
                    echo "                  <div class=\"multilevel-item\">
                ";
                }
                // line 44
                echo "              ";
            }
            // line 45
            echo "              <div class=\"product-container\">
                  <div class=\"item product-thumb\" data-countdowntime=\"";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 46);
            echo "\"> 
                    <div class=\"image\">
                      <a href=\"";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 48);
            echo "\">
                        <img src=\"";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 49);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
            echo "\" class=\"img-responsive\"/>
                        ";
            // line 50
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 50) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 51
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 51);
                echo "\"/>
                        ";
            }
            // line 53
            echo "                      </a>  
                      ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 54)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 54);
                echo "</span>";
            }
            // line 55
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 55)) {
                // line 56
                echo "                        <div class=\"rating\">
                          ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 58
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 58) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 62
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 67
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "                        </div>
                        ";
            } else {
                // line 70
                echo "                        <div class=\"rating\">
                          ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 72
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                        </div>
                      ";
            }
            // line 77
            echo " 
                      ";
            // line 78
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 79
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 83
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 87
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 91
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 95
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 98
                echo " 
                      ";
            }
            // line 99
            echo " 
                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 102
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 103);
            echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"eye-open1\" viewBox=\"0 0 1200 1200\"><title>eye-open</title><path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z\"></path></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open1\" x=\"28%\" y=\"28%\"></use></svg>
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                <span class=\"lblcart\">";
            // line 109
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>

                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 115
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 115);
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
            // line 127
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 127);
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
            // line 137
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 137);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 137);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 138
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 138);
            echo "</p>
                      ";
            // line 139
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 139)) {
                // line 140
                echo "                      <p class=\"price\">
                        ";
                // line 141
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 141)) {
                    // line 142
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 142);
                    echo "
                        ";
                } else {
                    // line 144
                    echo "                        <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 144);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 144);
                    echo "</span> 
                        ";
                }
                // line 146
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 146)) {
                    // line 147
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 147);
                    echo "</span>
                        ";
                }
                // line 149
                echo "                      </p>
                      ";
            }
            // line 151
            echo "                      <div class=\"btn-cart\">
                        <button data-toggle=\"tooltip\" title=\"";
            // line 152
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 152);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 152)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                            <span class=\"lblcart\">";
            // line 153
            echo ($context["button_cart"] ?? null);
            echo "</span>
                        </button>
                      </div>
                    </div>                         
                  </div>
              </div>
\t\t\t\t";
            // line 159
            if ((($context["product_row"] ?? null) != 1)) {
                // line 160
                echo "\t\t\t\t\t";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 161
                    echo "\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 163
                echo "\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 165
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "        </div>        
      </div>
    </div>

    <div class=\"tab-pane\" id=\"bestseller-products-block";
        // line 170
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content row\">        
        <div class=\"owl-carousel\">      
            ";
        // line 173
        $context["counter"] = 1;
        // line 174
        echo "            ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["bestseller"] ?? null));
        // line 175
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bestseller"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 176
            echo "              ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 177
                echo "                ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 178
                    echo "                  <div class=\"multilevel-item\">
                ";
                }
                // line 180
                echo "              ";
            }
            // line 181
            echo "                <div class=\"product-container\">
                  <div class=\"item product-thumb\" data-countdowntime=\"";
            // line 182
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 182);
            echo "\"> 
                    <div class=\"image\">
                      <a href=\"";
            // line 184
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 184);
            echo "\">
                        <img src=\"";
            // line 185
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 185);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 185);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 185);
            echo "\" class=\"img-responsive\"/>
                        ";
            // line 186
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 186) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 187
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 187);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 187);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 187);
                echo "\"/>
                        ";
            }
            // line 189
            echo "                      </a>  
                      ";
            // line 190
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 190)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 190);
                echo "</span>";
            }
            // line 191
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 191)) {
                // line 192
                echo "                        <div class=\"rating\">
                          ";
                // line 193
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 194
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 194) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 198
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 203
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 204
                echo "                        </div>
                        ";
            } else {
                // line 206
                echo "                        <div class=\"rating\">
                          ";
                // line 207
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 208
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 212
                echo "                        </div>
                      ";
            }
            // line 214
            echo "                      ";
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 215
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 215)) {
                    // line 216
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 219
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 223
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 227
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 231
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 234
                echo " 
                      ";
            }
            // line 235
            echo "  
                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 238
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 239
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 239);
            echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"eye-open1\" viewBox=\"0 0 1200 1200\"><title>eye-open</title><path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z\"></path></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open1\" x=\"28%\" y=\"28%\"></use></svg>
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                <span class=\"lblcart\">";
            // line 245
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>

                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 251
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 251);
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
            // line 263
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 263);
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
            // line 273
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 273);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 273);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 274
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 274);
            echo "</p>
                      ";
            // line 275
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 275)) {
                // line 276
                echo "                      <p class=\"price\">
                        ";
                // line 277
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 277)) {
                    // line 278
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 278);
                    echo "
                        ";
                } else {
                    // line 280
                    echo "                        <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 280);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 280);
                    echo "</span> 
                        ";
                }
                // line 282
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 282)) {
                    // line 283
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 283);
                    echo "</span>
                        ";
                }
                // line 285
                echo "                      </p>
                      ";
            }
            // line 287
            echo "                      <div class=\"btn-cart\">
                        <button data-toggle=\"tooltip\" title=\"";
            // line 288
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 288);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 288)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                            <span class=\"lblcart\">";
            // line 289
            echo ($context["button_cart"] ?? null);
            echo "</span>
                        </button>
                      </div>
                    </div>                         
                  </div>
                </div>
              ";
            // line 295
            if ((($context["product_row"] ?? null) != 1)) {
                // line 296
                echo "                ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 297
                    echo "                  </div>
                ";
                }
                // line 299
                echo "              ";
            }
            // line 300
            echo "            ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 301
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "        
        </div>        
      </div>
    </div>

    <div class=\"tab-pane\" id=\"new-products-block";
        // line 306
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content row\">       
        <div class=\"owl-carousel\"> 
          ";
        // line 309
        $context["counter"] = 1;
        // line 310
        echo "          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["new"] ?? null));
        // line 311
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["new"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "  
            ";
            // line 312
            if ((($context["product_row"] ?? null) != 1)) {
                // line 313
                echo "              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 314
                    echo "                <div class=\"multilevel-item\">
              ";
                }
                // line 316
                echo "            ";
            }
            // line 317
            echo "              <div class=\"product-container\">
                  <div class=\"item product-thumb\" data-countdowntime=\"";
            // line 318
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 318);
            echo "\"> 
                    <div class=\"image\">
                      <a href=\"";
            // line 320
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 320);
            echo "\">
                        <img src=\"";
            // line 321
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 321);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 321);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 321);
            echo "\" class=\"img-responsive\"/>
                        ";
            // line 322
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 322) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 323
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 323);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 323);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 323);
                echo "\"/>
                        ";
            }
            // line 325
            echo "                      </a>  
                      ";
            // line 326
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 326)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 326);
                echo "</span>";
            }
            // line 327
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 327)) {
                // line 328
                echo "                        <div class=\"rating\">
                          ";
                // line 329
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 330
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 330) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 334
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 339
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 340
                echo "                        </div>
                        ";
            } else {
                // line 342
                echo "                        <div class=\"rating\">
                          ";
                // line 343
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 344
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 348
                echo "                        </div>
                      ";
            }
            // line 349
            echo " 
                      ";
            // line 350
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 351
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 351)) {
                    // line 352
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 355
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 359
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 363
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 367
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 370
                echo " 
                      ";
            }
            // line 371
            echo " 
                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 374
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 375
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 375);
            echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"eye-open1\" viewBox=\"0 0 1200 1200\"><title>eye-open</title><path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z\"></path></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open1\" x=\"28%\" y=\"28%\"></use></svg>
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                <span class=\"lblcart\">";
            // line 381
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>

                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 387
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 387);
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
            // line 399
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 399);
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
            // line 409
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 409);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 409);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 410
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 410);
            echo "</p>
                      ";
            // line 411
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 411)) {
                // line 412
                echo "                      <p class=\"price\">
                        ";
                // line 413
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 413)) {
                    // line 414
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 414);
                    echo "
                        ";
                } else {
                    // line 416
                    echo "                        <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 416);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 416);
                    echo "</span> 
                        ";
                }
                // line 418
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 418)) {
                    // line 419
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 419);
                    echo "</span>
                        ";
                }
                // line 421
                echo "                      </p>
                      ";
            }
            // line 423
            echo "                          <div class=\"btn-cart\">
                            <button data-toggle=\"tooltip\" title=\"";
            // line 424
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 424);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 424)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                                <span class=\"lblcart\">";
            // line 425
            echo ($context["button_cart"] ?? null);
            echo "</span>
                            </button>
                          </div>
                    </div>                         
                  </div>
              </div>
            ";
            // line 431
            if ((($context["product_row"] ?? null) != 1)) {
                // line 432
                echo "              ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 433
                    echo "                </div>
              ";
                }
                // line 435
                echo "            ";
            }
            echo "\t
          ";
            // line 436
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 437
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "        
        </div>        
      </div>
    </div>

    <div class=\"tab-pane\" id=\"special-products-block";
        // line 442
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content row\">       
        <div class=\"owl-carousel\">
          ";
        // line 445
        $context["counter"] = 1;
        // line 446
        echo "          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["special"] ?? null));
        // line 447
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["special"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "  
            ";
            // line 448
            if ((($context["product_row"] ?? null) != 1)) {
                // line 449
                echo "              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 450
                    echo "                <div class=\"multilevel-item\">
              ";
                }
                // line 452
                echo "            ";
            }
            echo "\t\t  
              <div class=\"product-container\">
                  <div class=\"item product-thumb\" data-countdowntime=\"";
            // line 454
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 454);
            echo "\"> 
                    <div class=\"image\">
                      <a href=\"";
            // line 456
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 456);
            echo "\">
                        <img src=\"";
            // line 457
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 457);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 457);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 457);
            echo "\" class=\"img-responsive\"/>
                        ";
            // line 458
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 458) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 459
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 459);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 459);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 459);
                echo "\"/>
                        ";
            }
            // line 461
            echo "                      </a>  
                      ";
            // line 462
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 462)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 462);
                echo "</span>";
            }
            // line 463
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 463)) {
                // line 464
                echo "                        <div class=\"rating\">
                          ";
                // line 465
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 466
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 466) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 470
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 475
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 476
                echo "                        </div>
                        ";
            } else {
                // line 478
                echo "                        <div class=\"rating\">
                          ";
                // line 479
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 480
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 484
                echo "                        </div>
                      ";
            }
            // line 485
            echo " 
                      ";
            // line 486
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 487
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 487)) {
                    // line 488
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 491
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 495
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 499
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 503
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 506
                echo " 
                      ";
            }
            // line 507
            echo " 
                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 510
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 511
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 511);
            echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"eye-open1\" viewBox=\"0 0 1200 1200\"><title>eye-open</title><path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z\"></path></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open1\" x=\"28%\" y=\"28%\"></use></svg>
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                <span class=\"lblcart\">";
            // line 517
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>

                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 523
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 523);
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
            // line 535
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 535);
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
            // line 545
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 545);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 545);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 546
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 546);
            echo "</p>
                      ";
            // line 547
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 547)) {
                // line 548
                echo "                      <p class=\"price\">
                        ";
                // line 549
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 549)) {
                    // line 550
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 550);
                    echo "
                        ";
                } else {
                    // line 552
                    echo "                        <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 552);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 552);
                    echo "</span> 
                        ";
                }
                // line 554
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 554)) {
                    // line 555
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 555);
                    echo "</span>
                        ";
                }
                // line 557
                echo "                      </p>
                      ";
            }
            // line 559
            echo "                          <div class=\"btn-cart\">
                            <button data-toggle=\"tooltip\" title=\"";
            // line 560
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 560);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 560)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                                <span class=\"lblcart\">";
            // line 561
            echo ($context["button_cart"] ?? null);
            echo "</span>
                            </button>
                          </div>
                    </div>                         
                  </div>
              </div>
            ";
            // line 567
            if ((($context["product_row"] ?? null) != 1)) {
                // line 568
                echo "              ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 569
                    echo "                </div>
              ";
                }
                // line 571
                echo "            ";
            }
            echo "\t
          ";
            // line 572
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 573
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "        
        </div>        
      </div>
    </div>
\t
\t";
        // line 578
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 579
            echo "\t<div class=\"tab-pane\" id=\"category-block";
            echo twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 579);
            echo "-";
            echo ($context["tab_randomnumer"] ?? null);
            echo "\">
      <div class=\"block_content row\">       
        <div class=\"owl-carousel\">
          ";
            // line 582
            $context["counter"] = 1;
            // line 583
            echo "            ";
            $context["lastproduct"] = twig_length_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["category"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 583)] ?? null) : null));
            // line 584
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["category"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 584)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 585
                echo "              ";
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 586
                    echo "                ";
                    if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                        // line 587
                        echo "                  <div class=\"multilevel-item\">
                ";
                    }
                    // line 589
                    echo "              ";
                }
                // line 590
                echo "                <div class=\"product-container\">
                    <div class=\"item product-thumb\" data-countdowntime=\"";
                // line 591
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 591);
                echo "\"> 
                      <div class=\"image\">
                        <a href=\"";
                // line 593
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 593);
                echo "\">
                          <img src=\"";
                // line 594
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 594);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 594);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 594);
                echo "\" class=\"img-responsive\"/>
                          ";
                // line 595
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 595) != "") && (($context["hover_image"] ?? null) == 1))) {
                    // line 596
                    echo "                            <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 596);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 596);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 596);
                    echo "\"/>
                          ";
                }
                // line 598
                echo "                        </a>  
                        ";
                // line 599
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 599)) {
                    echo "<span class=\"outstock-overlay\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 599);
                    echo "</span>";
                }
                // line 600
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 600)) {
                    // line 601
                    echo "                          <div class=\"rating\">
                            ";
                    // line 602
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 603
                        echo "                              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 603) < $context["i"])) {
                            echo " 
                                <span class=\"fa fa-stack\">
                                  <i class=\"fa fa-star gray fa-stack-2x\"></i>
                                </span> 
                              ";
                        } else {
                            // line 607
                            echo " 
                                <span class=\"fa fa-stack\">
                                  <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                                </span> 
                              ";
                        }
                        // line 612
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 613
                    echo "                          </div>
                          ";
                } else {
                    // line 615
                    echo "                          <div class=\"rating\">
                            ";
                    // line 616
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 617
                        echo "                            <span class=\"fa fa-stack\">
                              <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 621
                    echo "                          </div>
                        ";
                }
                // line 622
                echo " 
                        ";
                // line 623
                if ((($context["product_counter"] ?? null) == 1)) {
                    // line 624
                    echo "                          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 624)) {
                        // line 625
                        echo "                            <div class='countdown-container'>
                              <div class='countdown-days counter'>
                                <span class=\"data\"></span>
                                <span class=\"lbl\">";
                        // line 628
                        echo ($context["days_name"] ?? null);
                        echo "</span>
                              </div>
                              <div class='countdown-hours counter'>
                                <span class=\"data\"></span>
                                <span class=\"lbl\">";
                        // line 632
                        echo ($context["hours_name"] ?? null);
                        echo "</span>
                              </div>
                              <div class='countdown-minutes counter'>
                                <span class=\"data\"></span>
                                <span class=\"lbl\">";
                        // line 636
                        echo ($context["min_name"] ?? null);
                        echo "</span>
                              </div>
                              <div class='countdown-seconds counter'>
                                <span class=\"data\"></span>
                                <span class=\"lbl\">";
                        // line 640
                        echo ($context["sec_name"] ?? null);
                        echo "</span>
                              </div>
                            </div>
                          ";
                    }
                    // line 643
                    echo " 
                        ";
                }
                // line 644
                echo " 
                        <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
                // line 647
                echo ($context["quick_view"] ?? null);
                echo "\"> 
                              <a class=\"quickbox\" href=\"";
                // line 648
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 648);
                echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"eye-open1\" viewBox=\"0 0 1200 1200\"><title>eye-open</title><path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z\"></path></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open1\" x=\"28%\" y=\"28%\"></use></svg>
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                <span class=\"lblcart\">";
                // line 654
                echo ($context["quick_view"] ?? null);
                echo "</span>
                              </a>
                            </div>
                          </div>

                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 660
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 660);
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
                // line 672
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 672);
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
                // line 682
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 682);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 682);
                echo "</a></h4>
                        <p class=\"description\">";
                // line 683
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 683);
                echo "</p>
                        ";
                // line 684
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 684)) {
                    // line 685
                    echo "                        <p class=\"price\">
                          ";
                    // line 686
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 686)) {
                        // line 687
                        echo "                          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 687);
                        echo "
                          ";
                    } else {
                        // line 689
                        echo "                          <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 689);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 689);
                        echo "</span> 
                          ";
                    }
                    // line 691
                    echo "                          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 691)) {
                        // line 692
                        echo "                          <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 692);
                        echo "</span>
                          ";
                    }
                    // line 694
                    echo "                        </p>
                        ";
                }
                // line 696
                echo "                          <div class=\"btn-cart\">
                            <button data-toggle=\"tooltip\" title=\"";
                // line 697
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 697);
                echo "');\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 697)) {
                    echo " class=\"sold-out\" disabled";
                }
                echo ">
                                <span class=\"lblcart\">";
                // line 698
                echo ($context["button_cart"] ?? null);
                echo "</span>
                            </button>
                          </div>
                      </div>                         
                    </div>
                </div>
              ";
                // line 704
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 705
                    echo "                ";
                    if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                        // line 706
                        echo "                  </div>
                ";
                    }
                    // line 708
                    echo "              ";
                }
                echo "\t
            ";
                // line 709
                $context["counter"] = (($context["counter"] ?? null) + 1);
                // line 710
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "        
          </div>        
        </div>
  </div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 715
        echo "  </div>
  <script type=\"text/javascript\">
    \$('#";
        // line 717
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
        loop:false,
        nav:true,  
        dots:false, 
        rewind: true,
        rtl: \$('html').attr('dir') == 'rtl'? true : false,
        navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
        responsive:{
            0:{
                items:";
        // line 726
        echo ($context["mobile_column"] ?? null);
        echo "
            },
            544:{
                items:";
        // line 729
        echo ($context["mobile_column"] ?? null);
        echo "
            },
            768:{
                items:";
        // line 732
        echo ($context["tablet_column"] ?? null);
        echo "
            },
            992:{
                items:";
        // line 735
        echo ($context["laptop_column"] ?? null);
        echo "
            },
            1200:{
                items:";
        // line 738
        echo ($context["desktop_column"] ?? null);
        echo "
            }
        }
    });   
  </script>
<script type=\"text/javascript\"><!--
\$('#";
        // line 744
        echo ($context["ishi_randomnumer"] ?? null);
        echo " li a:first').tab('show');
//--></script>
</section>";
    }

    public function getTemplateName()
    {
        return "dreamauto/template/extension/module/ishiproductsblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1822 => 744,  1813 => 738,  1807 => 735,  1801 => 732,  1795 => 729,  1789 => 726,  1777 => 717,  1773 => 715,  1758 => 710,  1756 => 709,  1751 => 708,  1747 => 706,  1744 => 705,  1742 => 704,  1733 => 698,  1723 => 697,  1720 => 696,  1716 => 694,  1708 => 692,  1705 => 691,  1697 => 689,  1691 => 687,  1689 => 686,  1686 => 685,  1684 => 684,  1680 => 683,  1674 => 682,  1659 => 672,  1642 => 660,  1633 => 654,  1624 => 648,  1620 => 647,  1615 => 644,  1611 => 643,  1604 => 640,  1597 => 636,  1590 => 632,  1583 => 628,  1578 => 625,  1575 => 624,  1573 => 623,  1570 => 622,  1566 => 621,  1557 => 617,  1553 => 616,  1550 => 615,  1546 => 613,  1540 => 612,  1533 => 607,  1524 => 603,  1520 => 602,  1517 => 601,  1514 => 600,  1508 => 599,  1505 => 598,  1495 => 596,  1493 => 595,  1485 => 594,  1481 => 593,  1476 => 591,  1473 => 590,  1470 => 589,  1466 => 587,  1463 => 586,  1460 => 585,  1455 => 584,  1452 => 583,  1450 => 582,  1441 => 579,  1437 => 578,  1425 => 573,  1423 => 572,  1418 => 571,  1414 => 569,  1411 => 568,  1409 => 567,  1400 => 561,  1390 => 560,  1387 => 559,  1383 => 557,  1375 => 555,  1372 => 554,  1364 => 552,  1358 => 550,  1356 => 549,  1353 => 548,  1351 => 547,  1347 => 546,  1341 => 545,  1326 => 535,  1309 => 523,  1300 => 517,  1291 => 511,  1287 => 510,  1282 => 507,  1278 => 506,  1271 => 503,  1264 => 499,  1257 => 495,  1250 => 491,  1245 => 488,  1242 => 487,  1240 => 486,  1237 => 485,  1233 => 484,  1224 => 480,  1220 => 479,  1217 => 478,  1213 => 476,  1207 => 475,  1200 => 470,  1191 => 466,  1187 => 465,  1184 => 464,  1181 => 463,  1175 => 462,  1172 => 461,  1162 => 459,  1160 => 458,  1152 => 457,  1148 => 456,  1143 => 454,  1137 => 452,  1133 => 450,  1130 => 449,  1128 => 448,  1121 => 447,  1118 => 446,  1116 => 445,  1110 => 442,  1098 => 437,  1096 => 436,  1091 => 435,  1087 => 433,  1084 => 432,  1082 => 431,  1073 => 425,  1063 => 424,  1060 => 423,  1056 => 421,  1048 => 419,  1045 => 418,  1037 => 416,  1031 => 414,  1029 => 413,  1026 => 412,  1024 => 411,  1020 => 410,  1014 => 409,  999 => 399,  982 => 387,  973 => 381,  964 => 375,  960 => 374,  955 => 371,  951 => 370,  944 => 367,  937 => 363,  930 => 359,  923 => 355,  918 => 352,  915 => 351,  913 => 350,  910 => 349,  906 => 348,  897 => 344,  893 => 343,  890 => 342,  886 => 340,  880 => 339,  873 => 334,  864 => 330,  860 => 329,  857 => 328,  854 => 327,  848 => 326,  845 => 325,  835 => 323,  833 => 322,  825 => 321,  821 => 320,  816 => 318,  813 => 317,  810 => 316,  806 => 314,  803 => 313,  801 => 312,  794 => 311,  791 => 310,  789 => 309,  783 => 306,  771 => 301,  768 => 300,  765 => 299,  761 => 297,  758 => 296,  756 => 295,  747 => 289,  737 => 288,  734 => 287,  730 => 285,  722 => 283,  719 => 282,  711 => 280,  705 => 278,  703 => 277,  700 => 276,  698 => 275,  694 => 274,  688 => 273,  673 => 263,  656 => 251,  647 => 245,  638 => 239,  634 => 238,  629 => 235,  625 => 234,  618 => 231,  611 => 227,  604 => 223,  597 => 219,  592 => 216,  589 => 215,  586 => 214,  582 => 212,  573 => 208,  569 => 207,  566 => 206,  562 => 204,  556 => 203,  549 => 198,  540 => 194,  536 => 193,  533 => 192,  530 => 191,  524 => 190,  521 => 189,  511 => 187,  509 => 186,  501 => 185,  497 => 184,  492 => 182,  489 => 181,  486 => 180,  482 => 178,  479 => 177,  476 => 176,  471 => 175,  468 => 174,  466 => 173,  460 => 170,  454 => 166,  448 => 165,  445 => 164,  442 => 163,  438 => 161,  435 => 160,  433 => 159,  424 => 153,  414 => 152,  411 => 151,  407 => 149,  399 => 147,  396 => 146,  388 => 144,  382 => 142,  380 => 141,  377 => 140,  375 => 139,  371 => 138,  365 => 137,  350 => 127,  333 => 115,  324 => 109,  315 => 103,  311 => 102,  306 => 99,  302 => 98,  295 => 95,  288 => 91,  281 => 87,  274 => 83,  269 => 80,  266 => 79,  264 => 78,  261 => 77,  257 => 76,  248 => 72,  244 => 71,  241 => 70,  237 => 68,  231 => 67,  224 => 62,  215 => 58,  211 => 57,  208 => 56,  205 => 55,  199 => 54,  196 => 53,  186 => 51,  184 => 50,  176 => 49,  172 => 48,  167 => 46,  164 => 45,  161 => 44,  157 => 42,  154 => 41,  151 => 40,  147 => 39,  142 => 38,  140 => 37,  134 => 34,  129 => 31,  126 => 30,  113 => 27,  110 => 26,  105 => 25,  102 => 24,  94 => 21,  91 => 20,  88 => 19,  80 => 16,  77 => 15,  74 => 14,  66 => 11,  63 => 10,  60 => 9,  52 => 6,  49 => 5,  47 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamauto/template/extension/module/ishiproductsblock.twig", "");
    }
}
