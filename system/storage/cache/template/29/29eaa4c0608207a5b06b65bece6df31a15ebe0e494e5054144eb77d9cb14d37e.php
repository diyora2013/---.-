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

/* freshmart/template/common/footer.twig */
class __TwigTemplate_7a706b0b997fc0b566134e699f0615c7706d1d99910c085181c199af860a469a extends \Twig\Template
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
        echo "<div id=\"_mobile_column_left\" class=\"container\"></div>
<div id=\"_mobile_column_right\" class=\"container\"></div>
<footer id=\"footer\" class=\"";
        // line 3
        echo ($context["ishomefooter"] ?? null);
        echo "\">
    <div class=\"footer-before\"> 
      <div class=\"row valign_wrapper\">
          <div class=\"ishistoreinfoblock col-lg-4 col-md-4 col-sm-6 col-xs-6 footer-block\">
            <div id=\"ishistoreinfo-container\" class=\"ishistoreinfo-inner\">
              <a href=\"";
        // line 8
        echo ($context["storehome"] ?? null);
        echo "\" class=\"store-logo\">
                <img src=\"";
        // line 9
        echo ($context["footerlogo"] ?? null);
        echo "\" alt=\"footer-logo\">
              </a>
            </div>
          </div>
          ";
        // line 13
        echo ($context["footerbefore"] ?? null);
        echo " 
      </div>
    </div>
    <div class=\"footer-container\">
      <div class=\"footer-left col-lg-8 col-md-8\">
        <div class=\"row\">
            <section class=\"information col-lg-3 col-md-3 col-sm-12 footer-block\">
              <h5 class=\"hidden-sm hidden-xs\">";
        // line 20
        echo ($context["text_information"] ?? null);
        echo "</h5>
              <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#information-container\" data-toggle=\"collapse\">
                <span class=\"h3\">";
        // line 22
        echo ($context["text_information"] ?? null);
        echo "</span>
                <span class=\"navbar-toggler collapse-icons\">
                  <i class=\"fa fa-angle-down add\"></i>
                  <i class=\"fa fa-angle-up remove\"></i>
                </span>
              </div>
              ";
        // line 28
        if (($context["informations"] ?? null)) {
            // line 29
            echo "              <div id=\"information-container\" class=\"collapse footer-dropdown\">    
                <ul class=\"list-unstyled\">
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 32
                echo "                  <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 32);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 32);
                echo "</a></li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                </ul>
              </div>
              ";
        }
        // line 37
        echo "            </section>
            <section class=\"account col-lg-3 col-md-3 col-sm-12 footer-block\">
              <h5 class=\"hidden-sm hidden-xs\">";
        // line 39
        echo ($context["text_account"] ?? null);
        echo "</h5>
              <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#account-container\" data-toggle=\"collapse\">
                <span class=\"h3\">";
        // line 41
        echo ($context["text_account"] ?? null);
        echo "</span>
                <span class=\"navbar-toggler collapse-icons\">
                  <i class=\"fa fa-angle-down add\"></i>
                  <i class=\"fa fa-angle-up remove\"></i>
                </span>
              </div>
              <div id=\"account-container\" class=\"collapse footer-dropdown\">
                <ul class=\"list-unstyled\">
                  <li><a href=\"";
        // line 49
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 50
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 51
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 52
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
                </ul>
              </div>
            </section>
            <section class=\"extras col-lg-3 col-md-3 col-sm-12 footer-block\">
              <h5 class=\"hidden-sm hidden-xs\">";
        // line 57
        echo ($context["text_extra"] ?? null);
        echo "</h5>
              <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#extras-container\" data-toggle=\"collapse\">
                <span class=\"h3\">";
        // line 59
        echo ($context["text_extra"] ?? null);
        echo "</span>
                <span class=\"navbar-toggler collapse-icons\">
                  <i class=\"fa fa-angle-down add\"></i>
                  <i class=\"fa fa-angle-up remove\"></i>
                </span>
              </div>
              <div id=\"extras-container\" class=\"collapse footer-dropdown\">
                <ul class=\"list-unstyled\">
                  <li><a href=\"";
        // line 67
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 68
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 69
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 70
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
                </ul>
              </div>
            </section>
            <section class=\"Services col-lg-3 col-md-3 col-sm-12 footer-block\">
              <h5 class=\"hidden-sm hidden-xs\">";
        // line 75
        echo ($context["text_service"] ?? null);
        echo "</h5>
              <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#services-container\" data-toggle=\"collapse\">
                <span class=\"h3\">";
        // line 77
        echo ($context["text_service"] ?? null);
        echo "</span>
                <span class=\"navbar-toggler collapse-icons\">
                  <i class=\"fa fa-angle-down add\"></i>
                  <i class=\"fa fa-angle-up remove\"></i>
                </span>
              </div>
              <div id=\"services-container\" class=\"collapse footer-dropdown\">
                <ul class=\"list-unstyled\">
                  <li><a href=\"";
        // line 85
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>  
                  <li><a href=\"";
        // line 86
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li> 
                  <li><a href=\"";
        // line 87
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>           
                </ul>
              </div>
            </section>
            <div id=\"_mobile_contact\"></div>
            <div class=\"col-xs-12\">\t 
              ";
        // line 93
        echo ($context["footermiddle"] ?? null);
        echo " \t   
            </div> 
        </div>  
        <div class=\"footer-after\">
          <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-xs-12\"><p class=\"footer-aftertext\">";
        // line 98
        echo ($context["powered"] ?? null);
        echo "</p></div>
            <div class=\"col-lg-6 col-md-6 col-xs-12\">";
        // line 99
        echo ($context["footerafter"] ?? null);
        echo "</div>
          </div>
        </div>
      </div>
      <div class=\"footer-right col-lg-4 col-md-4 col-sm-12 col-xs-12\">
        <div id=\"_desktop_contact\" class=\"block-contact footer-block\">   
          <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#contact-info-container\" data-toggle=\"collapse\">
            <span class=\"h3\">";
        // line 106
        echo ($context["text_storeinformation"] ?? null);
        echo "</span>
            <span class=\"navbar-toggler collapse-icons\">
              <i class=\"fa fa-angle-down add\"></i>
              <i class=\"fa fa-angle-up remove\"></i>
            </span>
          </div>
          <div id=\"contact-info-container\" class=\"footer-contact collapse\">
            ";
        // line 113
        if (($context["storetelephone"] ?? null)) {
            // line 114
            echo "              <div class=\"block phone col-lg-12 col-md-12 col-sm-4 col-xs-4\">
                <span class=\"icon phone\">
                  <i class=\"fa fa-mobile\"></i>
                  <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\"> 
                    <symbol id=\"telephone\" viewBox=\"0 0 880 880\"><title>telephone</title><path d=\"M401.129,311.475c-1.137-3.426-8.371-8.473-21.697-15.129c-3.61-2.098-8.754-4.949-15.41-8.566 c-6.662-3.617-12.709-6.95-18.13-9.996c-5.432-3.045-10.521-5.995-15.276-8.846c-0.76-0.571-3.139-2.234-7.136-5 c-4.001-2.758-7.375-4.805-10.14-6.14c-2.759-1.327-5.473-1.995-8.138-1.995c-3.806,0-8.56,2.714-14.268,8.135 c-5.708,5.428-10.944,11.324-15.7,17.706c-4.757,6.379-9.802,12.275-15.126,17.7c-5.332,5.427-9.713,8.138-13.135,8.138 c-1.718,0-3.86-0.479-6.427-1.424c-2.566-0.951-4.518-1.766-5.858-2.423c-1.328-0.671-3.607-1.999-6.845-4.004 c-3.244-1.999-5.048-3.094-5.428-3.285c-26.075-14.469-48.438-31.029-67.093-49.676c-18.649-18.658-35.211-41.019-49.676-67.097 c-0.19-0.381-1.287-2.19-3.284-5.424c-2-3.237-3.333-5.518-3.999-6.854c-0.666-1.331-1.475-3.283-2.425-5.852 s-1.427-4.709-1.427-6.424c0-3.424,2.713-7.804,8.138-13.134c5.424-5.327,11.326-10.373,17.7-15.128 c6.379-4.755,12.275-9.991,17.701-15.699c5.424-5.711,8.136-10.467,8.136-14.273c0-2.663-0.666-5.378-1.997-8.137 c-1.332-2.765-3.378-6.139-6.139-10.138c-2.762-3.997-4.427-6.374-4.999-7.139c-2.852-4.755-5.799-9.846-8.848-15.271 c-3.049-5.424-6.377-11.47-9.995-18.131c-3.615-6.658-6.468-11.799-8.564-15.415C98.986,9.233,93.943,1.997,90.516,0.859 C89.183,0.288,87.183,0,84.521,0c-5.142,0-11.85,0.95-20.129,2.856c-8.282,1.903-14.799,3.899-19.558,5.996 c-9.517,3.995-19.604,15.605-30.264,34.826C4.863,61.566,0.01,79.271,0.01,96.78c0,5.135,0.333,10.131,0.999,14.989 c0.666,4.853,1.856,10.326,3.571,16.418c1.712,6.09,3.093,10.614,4.137,13.56c1.045,2.948,2.996,8.229,5.852,15.845 c2.852,7.614,4.567,12.275,5.138,13.988c6.661,18.654,14.56,35.307,23.695,49.964c15.03,24.362,35.541,49.539,61.521,75.521 c25.981,25.98,51.153,46.49,75.517,61.526c14.655,9.134,31.314,17.032,49.965,23.698c1.714,0.568,6.375,2.279,13.986,5.141 c7.614,2.854,12.897,4.805,15.845,5.852c2.949,1.048,7.474,2.43,13.559,4.145c6.098,1.715,11.566,2.905,16.419,3.576 c4.856,0.657,9.853,0.996,14.989,0.996c17.508,0,35.214-4.856,53.105-14.562c19.219-10.656,30.826-20.745,34.823-30.269 c2.102-4.754,4.093-11.273,5.996-19.555c1.909-8.278,2.857-14.985,2.857-20.126C401.99,314.814,401.703,312.819,401.129,311.475z\"/>
                  </svg>
                  <svg class=\"icon\" viewBox=\"0 0 50 50\"><use xlink:href=\"#telephone\" x=\"28%\" y=\"28%\"></use></svg>
                </span>
                <div class=\"content\">
                  <div class=\"hidden-md-down\">";
            // line 123
            echo ($context["text_contact"] ?? null);
            echo "</div>
                  <a href=\"#\">";
            // line 124
            echo ($context["storetelephone"] ?? null);
            echo "</a>
                </div>
              </div>
              ";
        }
        // line 128
        echo "              ";
        if (($context["storeemail"] ?? null)) {
            // line 129
            echo "              <div class=\"block email col-lg-12 col-md-12 col-sm-4 col-xs-4\">
                <span class=\"icon\">
                  <i class=\"fa fa-envelope\"></i>
                  <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\"> 
                    <symbol id=\"envelope\" viewBox=\"0 0 1080 1080\"><title>envelope</title><path d=\"M49.106,178.729c6.472,4.567,25.981,18.131,58.528,40.685c32.548,22.554,57.482,39.92,74.803,52.099 c1.903,1.335,5.946,4.237,12.131,8.71c6.186,4.476,11.326,8.093,15.416,10.852c4.093,2.758,9.041,5.852,14.849,9.277 c5.806,3.422,11.279,5.996,16.418,7.7c5.14,1.718,9.898,2.569,14.275,2.569h0.287h0.288c4.377,0,9.137-0.852,14.277-2.569 c5.137-1.704,10.615-4.281,16.416-7.7c5.804-3.429,10.752-6.52,14.845-9.277c4.093-2.759,9.229-6.376,15.417-10.852 c6.184-4.477,10.232-7.375,12.135-8.71c17.508-12.179,62.051-43.11,133.615-92.79c13.894-9.703,25.502-21.411,34.827-35.116 c9.332-13.699,13.993-28.07,13.993-43.105c0-12.564-4.523-23.319-13.565-32.264c-9.041-8.947-19.749-13.418-32.117-13.418H45.679 c-14.655,0-25.933,4.948-33.832,14.844C3.949,79.562,0,91.934,0,106.779c0,11.991,5.236,24.985,15.703,38.974 C26.169,159.743,37.307,170.736,49.106,178.729z\"/><path d=\"M483.072,209.275c-62.424,42.251-109.824,75.087-142.177,98.501c-10.849,7.991-19.65,14.229-26.409,18.699 c-6.759,4.473-15.748,9.041-26.98,13.702c-11.228,4.668-21.692,6.995-31.401,6.995h-0.291h-0.287 c-9.707,0-20.177-2.327-31.405-6.995c-11.228-4.661-20.223-9.229-26.98-13.702c-6.755-4.47-15.559-10.708-26.407-18.699 c-25.697-18.842-72.995-51.68-141.896-98.501C17.987,202.047,8.375,193.762,0,184.437v226.685c0,12.57,4.471,23.319,13.418,32.265 c8.945,8.949,19.701,13.422,32.264,13.422h420.266c12.56,0,23.315-4.473,32.261-13.422c8.949-8.949,13.418-19.694,13.418-32.265 V184.437C503.441,193.569,493.927,201.854,483.072,209.275z\"/></symbol>
                  </svg>
                  <svg class=\"icon\" viewBox=\"0 0 50 50\"><use xlink:href=\"#envelope\" x=\"27%\" y=\"28%\"></use></svg>
                </span>
                <div class=\"content\">
                  <div class=\"hidden-md-down\">";
            // line 138
            echo ($context["text_email"] ?? null);
            echo "</div>
                  <a href=\"mailto:";
            // line 139
            echo ($context["storeemail"] ?? null);
            echo "\">";
            echo ($context["storeemail"] ?? null);
            echo "</a>
                </div>
              </div>
              ";
        }
        // line 143
        echo "              ";
        if (($context["storeaddress"] ?? null)) {
            // line 144
            echo "              <div class=\"block address col-lg-12 col-md-12 col-sm-4 col-xs-4\">
                <span class=\"icon\">
                  <i class=\"fa fa-map-marker\"></i>
                  <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\"> 
                    <symbol id=\"placeholder\" viewBox=\"0 0 120 120\"><title>placeholder</title><path d=\"M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952 L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M27.557,26c-3.859,0-7-3.141-7-7s3.141-7,7-7s7,3.141,7,7 S31.416,26,27.557,26z\"/></symbol>
                  </svg>
                  <svg class=\"icon\" viewBox=\"0 0 50 50\"><use xlink:href=\"#placeholder\" x=\"27%\" y=\"28%\"></use></svg>
                </span>
                <div class=\"content\">
                  <div class=\"hidden-md-down\">";
            // line 153
            echo ($context["text_address"] ?? null);
            echo "</div>
                  <a href=\"#\">";
            // line 154
            echo ($context["storeaddress"] ?? null);
            echo "</a>
              </div>
              </div>
              ";
        }
        // line 157
        echo " 
              ";
        // line 158
        if (($context["storefax"] ?? null)) {
            // line 159
            echo "              <div class=\"block fax col-lg-12 col-md-12 col-sm-4 col-xs-4\">
                <span class=\"icon\"><i class=\"fa fa-fax\"></i></span>
                <div class=\"content\">";
            // line 161
            echo ($context["storefax"] ?? null);
            echo "</div>
              </div>
              ";
        }
        // line 164
        echo "          </div>
        </div>
      </div>
    </div>
    <a id=\"slidetop\" href=\"#\" ></a>
  </div>
</footer>
";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 172
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "freshmart/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 174,  377 => 172,  373 => 171,  364 => 164,  358 => 161,  354 => 159,  352 => 158,  349 => 157,  342 => 154,  338 => 153,  327 => 144,  324 => 143,  315 => 139,  311 => 138,  300 => 129,  297 => 128,  290 => 124,  286 => 123,  275 => 114,  273 => 113,  263 => 106,  253 => 99,  249 => 98,  241 => 93,  230 => 87,  224 => 86,  218 => 85,  207 => 77,  202 => 75,  192 => 70,  186 => 69,  180 => 68,  174 => 67,  163 => 59,  158 => 57,  148 => 52,  142 => 51,  136 => 50,  130 => 49,  119 => 41,  114 => 39,  110 => 37,  105 => 34,  94 => 32,  90 => 31,  86 => 29,  84 => 28,  75 => 22,  70 => 20,  60 => 13,  53 => 9,  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshmart/template/common/footer.twig", "");
    }
}
