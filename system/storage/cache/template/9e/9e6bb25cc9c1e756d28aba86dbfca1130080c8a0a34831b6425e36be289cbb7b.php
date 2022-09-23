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

/* freshmart/template/common/header.twig */
class __TwigTemplate_d0c9ca078846aff0db28eff29f0900ccf7df68e50e599bde78af3cd5ada07cfb extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/magnific/magnific-popup.css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/";
        // line 26
        echo ($context["activetemplate"] ?? null);
        echo "/stylesheet/owl.carousel.min.css\" rel=\"stylesheet\">
<script src=\"catalog/view/theme/";
        // line 27
        echo ($context["activetemplate"] ?? null);
        echo "/javascripts/owl.carousel.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/theme/";
        // line 28
        echo ($context["activetemplate"] ?? null);
        echo "/javascripts/theme.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/theme/";
        // line 29
        echo ($context["activetemplate"] ?? null);
        echo "/stylesheet/stylesheet.css\" rel=\"stylesheet\">


";
        // line 32
        if ((($context["direction"] ?? null) == "rtl")) {
            // line 33
            echo "  
<link href=\"catalog/view/theme/";
            // line 34
            echo ($context["activetemplate"] ?? null);
            echo "/stylesheet/rtl.css\" rel=\"stylesheet\">
";
        }
        // line 36
        echo "
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 38
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 38);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 38);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 38);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 41
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/support.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<script src=\"catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 51
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 51);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 51);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 54
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</head>
<body>
  <main class=\"";
        // line 58
        echo ($context["ishihomepage"] ?? null);
        echo "\"> 
  \t<div id=\"menu_wrapper\"></div>
    <header id=\"header\">
    \t<div class=\"header-nav\">
      \t\t<div class=\"container\">
\t\t\t  <div class=\"row\">
\t\t      \t<div class=\"col-xs-12 col-sm-6 col-md-6 left-nav\">
\t\t      \t\t";
        // line 65
        echo ($context["headerbefore"] ?? null);
        echo "
\t\t    \t</div>
\t\t    \t<div class=\"col-xs-12 col-sm-6 col-md-6 right-nav\">
\t\t      \t\t<div class=\"language-selector\">";
        // line 68
        echo ($context["language"] ?? null);
        echo "</div>
\t\t      \t\t<div class=\"currency-selector\">";
        // line 69
        echo ($context["currency"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t<div id=\"_desktop_user_info\">
\t\t\t\t\t\t\t\t<div class=\"user-info\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<a title=\"";
        // line 73
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">  
\t\t\t\t\t\t\t\t\t\t\t<span class=\"expand-more\">";
        // line 74
        echo ($context["text_account"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t";
        // line 78
        if (($context["logged"] ?? null)) {
            // line 79
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 80
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 81
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 82
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 83
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 85
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 86
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 87
            echo ($context["wishlist"] ?? null);
            echo "\" id=\"wishlist-total\" title=\"";
            echo ($context["text_wishlist"] ?? null);
            echo "\"><span class=\"wishlist-text\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</span></a></li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t\t\t\t\t\t</ul>             
\t\t\t\t\t\t\t\t\t</div>           
\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t</div> 
\t\t\t\t </div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"header-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"mobile-width-left col-sm-4 col-xs-4\"> 
\t\t\t\t\t\t\t\t<div id=\"menu-icon\" class=\"menu-icon hidden-md hidden-lg\">
\t\t\t\t\t\t\t    \t<div class=\"nav-icon\">
\t\t\t\t\t\t\t\t        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t        <symbol id=\"menu\" viewBox=\"0 0 750 750\"><title>menu</title>
\t\t\t\t\t\t\t\t\t            <path d=\"M12.03,84.212h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03
\t\t\t\t\t\t\t\t\t            C5.39,60.152,0,65.541,0,72.182C0,78.823,5.39,84.212,12.03,84.212z\"></path>
\t\t\t\t\t\t\t\t\t            <path d=\"M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03
\t\t\t\t\t\t\t\t\t                S379.58,180.455,372.939,180.455z\"></path>
\t\t\t\t\t\t\t\t\t            <path d=\"M372.939,300.758H12.03c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h360.909
\t\t\t\t\t\t\t\t\t            c6.641,0,12.03-5.39,12.03-12.03C384.97,306.147,379.58,300.758,372.939,300.758z\"></path>
\t\t\t\t\t\t\t\t\t        </symbol>
\t\t\t\t\t\t\t\t\t    </svg>
\t\t\t\t\t\t\t\t\t    <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#menu\" x=\"22%\" y=\"25%\"></use></svg>
\t\t\t\t\t\t\t\t\t</div>    
\t\t\t\t\t\t\t  \t</div> 
\t\t\t\t\t\t\t\t<div id=\"_mobile_seach_widget\"></div>
\t\t\t\t\t\t\t</div>  \t
\t\t\t        <div class=\"desktop-logo col-lg-4 col-md-4 col-sm-6 col-xs-6\">
\t\t\t          <div id=\"logo\">
\t\t\t            ";
        // line 120
        if (($context["logo"] ?? null)) {
            // line 121
            echo "\t\t\t            <a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>
\t\t\t            ";
        } else {
            // line 123
            echo "\t\t\t            <span style=\"font-size: 20px;line-height: 20px;\">
\t\t\t              <a href=\"";
            // line 124
            echo ($context["home"] ?? null);
            echo "\">
\t\t\t                ";
            // line 125
            echo ($context["name"] ?? null);
            echo "
\t\t\t              </a>
\t\t\t            </span>
\t\t\t            ";
        }
        // line 129
        echo "\t\t\t          </div>
\t\t\t        </div><div class=\"mobile-width-right col-sm-4 col-xs-4\">
\t\t            <div id=\"_mobile_cart\"></div>
\t\t\t\t\t\t<div id=\"_mobile_link_menu\"></div>
\t            \t</div>
\t\t\t\t\t\t\t<div id=\"_desktop_seach_widget\" class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
\t\t\t            <div id=\"ishisearch_widget\" class=\"search-widget\">
\t\t\t\t              <div class=\"search-logo hidden-lg hidden-md\">
\t\t\t\t\t\t\t  \t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">   
\t\t\t\t                    <symbol id=\"magnifying-desktop\" viewBox=\"0 0 1200 1200\"><title>magnifying-desktop</title>
\t\t\t\t                      <path d=\"M606.209,578.714L448.198,423.228C489.576,378.272,515,318.817,515,253.393C514.98,113.439,399.704,0,257.493,0
\t\t\t\t                           C115.282,0,0.006,113.439,0.006,253.393s115.276,253.393,257.487,253.393c61.445,0,117.801-21.253,162.068-56.586
\t\t\t\t                           l158.624,156.099c7.729,7.614,20.277,7.614,28.006,0C613.938,598.686,613.938,586.328,606.209,578.714z M257.493,467.8
\t\t\t\t                           c-120.326,0-217.869-95.993-217.869-214.407S137.167,38.986,257.493,38.986c120.327,0,217.869,95.993,217.869,214.407
\t\t\t\t                           S377.82,467.8,257.493,467.8z\"></path>
\t\t\t\t                     </symbol>
\t\t\t\t                  </svg>
\t\t\t\t                  <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#magnifying-desktop\" x=\"20%\" y=\"22%\"></use></svg>
\t\t\t\t\t\t  \t\t</div>
\t\t              \t\t\t<form>";
        // line 148
        echo ($context["search"] ?? null);
        echo "</form>
\t\t\t            </div>
        \t\t\t</div> 
        \t\t\t<div class=\"header-right col-lg-4 col-md-4 col-sm-6 col-xs-6\">
        \t\t\t\t<div id=\"_desktop-contactinfo\">
\t\t\t\t          <div class=\"contact-num\">
\t\t\t\t            <a href=\"";
        // line 154
        echo ($context["contact"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"call-img\">
\t\t\t\t\t\t\t\t\t\t\t  <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">          
\t\t\t\t\t\t\t\t\t\t\t    <symbol id=\"email\" viewBox=\"0 0 600 600\"><title>email</title>
\t\t\t\t\t\t\t\t\t\t\t      <path d=\"M467,61H45C20.218,61,0,81.196,0,106v300c0,24.72,20.128,45,45,45h422c24.72,0,45-20.128,45-45V106
\t\t\t\t\t\t\t\t\t\t\t\t\t\tC512,81.28,491.872,61,467,61z M460.786,91L256.954,294.833L51.359,91H460.786z M30,399.788V112.069l144.479,143.24L30,399.788z
\t\t\t\t\t\t\t\t\t\t\t\t\t\t M51.213,421l144.57-144.57l50.657,50.222c5.864,5.814,15.327,5.795,21.167-0.046L317,277.213L460.787,421H51.213z M482,399.787
\t\t\t\t\t\t\t\t\t\t\t\t\t\tL338.213,256L482,112.212V399.787z\"></path>
\t\t\t\t\t\t\t\t\t\t\t    </symbol>
\t\t\t\t\t\t\t\t\t\t\t  </svg>
\t\t\t\t\t\t\t\t\t\t\t  <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#email\" x=\"6%\" y=\"8%\"></use></svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"call\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"call-us\">";
        // line 167
        echo ($context["text_email"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"call-num\">";
        // line 168
        echo ($context["email"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t          </div> 
\t\t\t        \t</div> 
\t\t\t\t        <div id=\"_desktop_cart\">
\t\t\t\t          <div class=\"blockcart\">
\t\t\t\t            ";
        // line 175
        echo ($context["cart"] ?? null);
        echo "
\t\t\t\t          </div>
\t\t\t\t        </div> 
        \t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>  
\t      <div class=\"nav-full-width ";
        // line 182
        echo ($context["ishome"] ?? null);
        echo "\">
\t        <div class=\"container\">
\t          <div class=\"row\"> 
\t            ";
        // line 185
        echo ($context["menu"] ?? null);
        echo "  
        \t\t";
        // line 186
        echo ($context["headerafter"] ?? null);
        echo "            
\t          </div>
\t        </div>
\t      </div>
    </header>
    
    <div id=\"mobile_top_menu_wrapper\" class=\"hidden-lg hidden-md\" style=\"display:none;\">
      <div id=\"top_menu_closer\">
        <i class=\"fa fa-close\"></i>
      </div>
      <div class=\"js-top-menu mobile\" id=\"_mobile_top_menu\"></div>
    </div>
    <div id=\"spin-wrapper\"></div>
\t<div id=\"siteloader\">
\t\t";
        // line 200
        if ((($context["loader"] ?? null) == "loader_1")) {
            // line 201
            echo "\t\t<div class=\"loader loader-1\"></div>
\t\t";
        } elseif ((        // line 202
($context["loader"] ?? null) == "loader_2")) {
            // line 203
            echo "\t\t<div class=\"loader loader-2\">
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t</div>
\t\t";
        } elseif ((        // line 214
($context["loader"] ?? null) == "loader_3")) {
            // line 215
            echo "\t\t<div class=\"loader loader-3\">
\t      <div></div>
\t      <div></div>
\t      <div></div>
\t  \t</div>
\t\t";
        } else {
            // line 221
            echo "\t\t<div class=\"loader loader-4 la-dark la-2x\">
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t</div>
\t\t";
        }
        // line 229
        echo "\t</div>

<!-- ======= Quick view JS ========= -->
<script> 
function quickbox(){
 \tif (\$(window).width() > 767) {
\t\t\$('.quickview-button').magnificPopup({
\t\ttype:'iframe',
\t\tdelegate: 'a',
\t\tpreloader: true,
\t\ttLoading: 'Loading image #%curr%...',
\t\t});    
 \t}  
}
jQuery(document).ready(function() {quickbox();});
jQuery(window).resize(function() {quickbox();});
\$( \"input[name=\\'search\\']\" ).keyup(function( event ) {
\t\$('input[name=\\'search\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=product/search/autocomplete&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(result) {
\t\t\t\t\tvar products = result.products;
\t\t\t\t\t\$('.ajaxishi-search ul li').remove();
\t\t\t\t\t  \$.each(products, function(index,product) {
\t\t\t\t\t\tvar html = '<li>';
\t\t\t\t\t\t\thtml += '<div>';
\t\t\t\t\t\t\thtml += '<a href=\"' + product.url + '\" title=\"' + product.name + '\">';
\t\t\t\t\t\t\thtml += '<div class=\"product-image\"><img alt=\"' + product.name + '\" src=\"' + product.image + '\"></div>';
\t\t\t\t\t\t\thtml += '<div class=\"product-desc\">';
\t\t\t\t\t\t\thtml += '<div class=\"product-name\">' + product.name + '</div>';
\t\t\t\t\t\t\tif (product.special) {
\t                            html += '<div class=\"product-price\"><span class=\"special\">' + product.price + '</span><span class=\"price\">' + product.special + '</span></div>';
\t                        } else {
\t                            html += '<div class=\"product-price\"><span class=\"price\">' + product.price + '</span></div>';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\thtml += '</div>';
\t\t\t\t\t\t\thtml += '</a>';
\t\t\t\t\t\t\thtml += '</div>';
\t\t\t\t\t\t\thtml += '</li>';
\t\t\t\t\t\t\t\$('.ajaxishi-search ul').append(html);
\t\t\t\t\t  });
\t\t\t\t\t  \$('.ajaxishi-search').css('display','block');
\t                return false;
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(product) {
\t\t\t\$('input[name=\\'filter_name\\']').val(product.name);
\t\t}
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "freshmart/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 229,  480 => 221,  472 => 215,  470 => 214,  457 => 203,  455 => 202,  452 => 201,  450 => 200,  433 => 186,  429 => 185,  423 => 182,  413 => 175,  403 => 168,  399 => 167,  383 => 154,  374 => 148,  353 => 129,  346 => 125,  342 => 124,  339 => 123,  327 => 121,  325 => 120,  292 => 89,  283 => 87,  277 => 86,  270 => 85,  263 => 83,  257 => 82,  251 => 81,  245 => 80,  238 => 79,  236 => 78,  229 => 74,  225 => 73,  218 => 69,  214 => 68,  208 => 65,  198 => 58,  194 => 56,  186 => 54,  182 => 53,  171 => 51,  167 => 50,  158 => 43,  149 => 41,  145 => 40,  132 => 38,  128 => 37,  125 => 36,  120 => 34,  117 => 33,  115 => 32,  109 => 29,  105 => 28,  101 => 27,  97 => 26,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshmart/template/common/header.twig", "");
    }
}
