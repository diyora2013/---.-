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

/* dreamauto/template/product/category.twig */
class __TwigTemplate_2e60a43c0b8c370dc22e418480d0eac7e923d340eccdcc2c2126e12c365a6e5d extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-category\" class=\"container\">
  <div class=\"row\">
  <div class=\"wrapper_container\">";
        // line 4
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 5
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 7
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"breadcrumb-container\">
        <h2 class=\"page-title\">";
        // line 14
        echo ($context["heading_title"] ?? null);
        echo "</h2>
        <ul class=\"breadcrumb\">
          ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </ul>
      </div>
      <div class=\"products\">
        ";
        // line 22
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 23
            echo "          <div class=\"category_banner\">
            <div class=\"row\">
              <div class=\"col-sm-12 category-title\">";
            // line 25
            echo ($context["heading_title"] ?? null);
            echo "</div>
              ";
            // line 26
            if (($context["description"] ?? null)) {
                // line 27
                echo "              <div class=\"col-sm-12 category_description\">";
                echo ($context["description"] ?? null);
                echo "</div>
              ";
            }
            // line 29
            echo "            </div>
          </div>
        ";
        }
        // line 31
        echo "\t\t
        ";
        // line 32
        if ((($context["subcategory_type"] ?? null) != "none")) {
            // line 33
            echo "            ";
            if (($context["categories"] ?? null)) {
                // line 34
                echo "              <div class=\"refine-search\">
                  <div class=\"row\">
                    <div class=\"col-sm-12 category-list\">
                      <ul class=\"";
                // line 37
                if ((($context["subcategory_type"] ?? null) == "slider")) {
                    echo " owl-carousel ";
                } else {
                    echo "row";
                }
                echo "\">
                        ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 39
                    echo "                          <li class=\"item ";
                    if ((($context["subcategory_type"] ?? null) == "grid")) {
                        echo "col-md-3 col-sm-3 col-xs-4";
                    }
                    echo "\">
                            <a href=\"";
                    // line 40
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 40);
                    echo "\">
                              <img src=\"";
                    // line 41
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "subcategory_image", [], "any", false, false, false, 41);
                    echo "\" />
                              <span class=\"subcategory-title\">";
                    // line 42
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 42);
                    echo "</span>
                            </a>
                          </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                      </ul>
                    </div>
                  </div>
              </div>
            ";
            }
            // line 51
            echo "        ";
        }
        echo "\t\t
        ";
        // line 52
        if (($context["products"] ?? null)) {
            // line 53
            echo "          <div class=\"product-list-top\">
            <div class=\"row\">
              <div class=\"btn-list-grid\">
                <div class=\"btn-group btn-group-sm\">
                  <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 57
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
                  <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 58
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>                
                </div>
              </div>
              <div class=\"compare-total\"><a href=\"";
            // line 61
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
              <div class=\"pagination-right\">
                <div class=\"sort-by-wrapper\">
                  <div class=\"col-md-2 text-right sort-by\">
                    <label class=\"control-label\" for=\"input-sort\">";
            // line 65
            echo ($context["text_sort"] ?? null);
            echo "</label>
                  </div>
                  <div class=\"col-md-3 text-right sort\">
                    <div class=\"select-wrapper\">
                      <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 71
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 71) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 72
                    echo "                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 72);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 72);
                    echo "</option>
                        ";
                } else {
                    // line 73
                    echo "                    
                        <option value=\"";
                    // line 74
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 74);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 74);
                    echo "</option>
                        ";
                }
                // line 76
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                      </select>
                    </div>
                  </div>
                </div>
                <div class=\"show-wrapper\">
                  <div class=\"col-md-1 text-right show\">
                    <label class=\"control-label\" for=\"input-limit\">";
            // line 83
            echo ($context["text_limit"] ?? null);
            echo "</label>
                  </div>
                  <div class=\"col-md-2 text-right limit\">
                    <div class=\"select-wrapper\">
                      <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                        ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 89
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 89) == ($context["limit"] ?? null))) {
                    // line 90
                    echo "                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 90);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 90);
                    echo "</option>
                        ";
                } else {
                    // line 92
                    echo "                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 92);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 92);
                    echo "</option>
                        ";
                }
                // line 94
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "                  
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"row product-list-js\"> 
            ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 104
                echo "            <div class=\"product-layout product-list\" data-countdowntime=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 104);
                echo "\">
              <div class=\"product-thumb\">
                <div class=\"image\">
                  <a href=\"";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 107);
                echo "\">
                    <img src=\"";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 108);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 108);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 108);
                echo "\" class=\"img-responsive\"/>
                    ";
                // line 109
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 109) != "") && (($context["hover_image"] ?? null) == 1))) {
                    // line 110
                    echo "                      <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 110);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 110);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 110);
                    echo "\"/>
                    ";
                }
                // line 112
                echo "                  </a>  
                  ";
                // line 113
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 113)) {
                    echo "<span class=\"outstock-overlay\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 113);
                    echo "</span>";
                }
                echo " 
                  ";
                // line 114
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 114)) {
                    // line 115
                    echo "                    <div class=\"rating\">
                      ";
                    // line 116
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 117
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 117) < $context["i"])) {
                            echo " 
                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                          </span> 
                        ";
                        } else {
                            // line 121
                            echo " 
                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                          </span> 
                        ";
                        }
                        // line 126
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    echo "                    </div>
                    ";
                } else {
                    // line 129
                    echo "                    <div class=\"rating\">
                      ";
                    // line 130
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 131
                        echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star gray fa-stack-2x\"></i>
                        </span>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 135
                    echo "                    </div>
                  ";
                }
                // line 136
                echo " 
                  ";
                // line 137
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 137) && (($context["category_page_counter"] ?? null) == 1))) {
                    // line 138
                    echo "                      <div class='countdown-container'>
                        <div class='countdown-days counter'>
                          <span class=\"data\"></span>
                          <span class=\"lbl\">";
                    // line 141
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                        </div>
                        <div class='countdown-hours counter'>
                          <span class=\"data\"></span>
                          <span class=\"lbl\">";
                    // line 145
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                        </div>
                        <div class='countdown-minutes counter'>
                          <span class=\"data\"></span>
                          <span class=\"lbl\">";
                    // line 149
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                        </div>
                        <div class='countdown-seconds counter'>
                          <span class=\"data\"></span>
                          <span class=\"lbl\">";
                    // line 153
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                        </div>
                      </div>
                  ";
                }
                // line 157
                echo "                  <div class=\"button-group\">  
                      <div class=\"btn-quickview\"> 
                        <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
                // line 159
                echo ($context["quick_view"] ?? null);
                echo "\"> 
                          <a class=\"quickbox\" href=\"";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 160);
                echo "\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                              <symbol id=\"eye-open1\" viewBox=\"0 0 1200 1200\"><title>eye-open</title><path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z\"></path></symbol>
                            </svg>
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open1\" x=\"28%\" y=\"28%\"></use></svg>
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                            <span class=\"lblcart\">";
                // line 166
                echo ($context["quick_view"] ?? null);
                echo "</span>
                          </a>
                        </div>
                      </div>

                      <div class=\"btn-wishlist\">
                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 172
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 172);
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
                // line 184
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 184);
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
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 195);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 195);
                echo "</a></h4>
                  <p class=\"description\">";
                // line 196
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 196);
                echo "</p>
                  ";
                // line 197
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 197)) {
                    // line 198
                    echo "                  <p class=\"price\">
                    ";
                    // line 199
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 199)) {
                        // line 200
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 200);
                        echo "
                    ";
                    } else {
                        // line 202
                        echo "                    <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 202);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 202);
                        echo "</span> 
                    ";
                    }
                    // line 204
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 204)) {
                        // line 205
                        echo "                    <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 205);
                        echo "</span>
                    ";
                    }
                    // line 207
                    echo "                  </p>
                  ";
                }
                // line 209
                echo "                  <div class=\"btn-cart\">
                    <button data-toggle=\"tooltip\" title=\"";
                // line 210
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 210);
                echo "');\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 210)) {
                    echo " class=\"sold-out\" disabled";
                }
                echo ">
                        <span class=\"lblcart\">";
                // line 211
                echo ($context["button_cart"] ?? null);
                echo "</span>
                    </button>
                  </div>
                </div>   
              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo " 
          </div>
          <div class=\"category-pagination\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-xs-12 text-left pagination-desc\">";
            // line 221
            echo ($context["results"] ?? null);
            echo "</div>
              <div class=\"col-sm-6 col-xs-12 text-right\">";
            // line 222
            echo ($context["pagination"] ?? null);
            echo "</div>
            </div>
          </div>
        ";
        }
        // line 226
        echo "      </div>
      ";
        // line 227
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 228
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 230
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 233
        echo "      ";
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 234
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
</div>
";
        // line 237
        echo ($context["footer"] ?? null);
        echo "
<script type=\"text/javascript\">
  \$('.category-list .owl-carousel').owlCarousel({
    loop:false,
    nav:true,    
    margin: 30,
    dots: false,      
    rewind: true,
    rtl: \$('html').attr('dir') == 'rtl'? true : false,  
    navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
    responsive:{
          0:{
              items:2
          },
          450:{
              items:3
          },
          767:{
              items:3
          },
          991:{
              items:3
          },
          1200:{
              items:4
          }
      }
  });   
</script>";
    }

    public function getTemplateName()
    {
        return "dreamauto/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  624 => 237,  618 => 234,  612 => 233,  604 => 230,  598 => 228,  596 => 227,  593 => 226,  586 => 222,  582 => 221,  576 => 217,  563 => 211,  553 => 210,  550 => 209,  546 => 207,  538 => 205,  535 => 204,  527 => 202,  521 => 200,  519 => 199,  516 => 198,  514 => 197,  510 => 196,  504 => 195,  488 => 184,  471 => 172,  462 => 166,  453 => 160,  449 => 159,  445 => 157,  438 => 153,  431 => 149,  424 => 145,  417 => 141,  412 => 138,  410 => 137,  407 => 136,  403 => 135,  394 => 131,  390 => 130,  387 => 129,  383 => 127,  377 => 126,  370 => 121,  361 => 117,  357 => 116,  354 => 115,  352 => 114,  344 => 113,  341 => 112,  331 => 110,  329 => 109,  321 => 108,  317 => 107,  310 => 104,  306 => 103,  290 => 94,  282 => 92,  274 => 90,  271 => 89,  267 => 88,  259 => 83,  251 => 77,  245 => 76,  238 => 74,  235 => 73,  227 => 72,  224 => 71,  220 => 70,  212 => 65,  203 => 61,  197 => 58,  193 => 57,  187 => 53,  185 => 52,  180 => 51,  173 => 46,  163 => 42,  159 => 41,  155 => 40,  148 => 39,  144 => 38,  136 => 37,  131 => 34,  128 => 33,  126 => 32,  123 => 31,  118 => 29,  112 => 27,  110 => 26,  106 => 25,  102 => 23,  100 => 22,  95 => 19,  84 => 17,  80 => 16,  75 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamauto/template/product/category.twig", "");
    }
}
