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

/* freshmart/template/common/menu.twig */
class __TwigTemplate_beb6e82b0eecd6be4ab1159d4357c1c1cd35d3d9be6f59f6a8b0aecbe496d363 extends \Twig\Template
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
        echo "
";
        // line 2
        if (($context["categories"] ?? null)) {
            // line 3
            echo "    <div id=\"_desktop_top_menu\" class=\"menu js-top-menu hidden-xs hidden-sm ";
            echo ($context["ishome"] ?? null);
            echo "\">
      <h2 class=\"home-title hidden-xs hidden-sm\">
        <span>
          <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 300 300\">
          <rect x=\"0\" y=\"70.333\" width=\"42.667\" height=\"35.667\"/>
          <rect x=\"0\" y=\"160.667\" width=\"42.667\" height=\"35.667\"/>
          <rect x=\"0\" y=\"250\" width=\"42.667\" height=\"35.667\"/>
          <rect x=\"85.333\" y=\"70.333\" width=\"230.557\" height=\"35.667\"/>
          <rect x=\"85.333\" y=\"160.667\" width=\"230.557\" height=\"35.667\"/>
          <rect x=\"85.333\" y=\"250\" width=\"230.557\" height=\"35.667\"/></svg>
        </span>";
            // line 13
            echo ($context["text_title"] ?? null);
            echo "
      </h2>
        ";
            // line 16
            echo "          <ul id=\"top-menu\" class=\"top-menu\" data-depth=\"0\">
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 18
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "            ";
                    $context["temprand"] = twig_random($this->env, 10000);
                    // line 20
                    echo "            <li class=\"top_level_category dropdown\">
              <a class=\"dropdown-item\" href=\"";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 21);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21);
                    echo "
                ";
                    // line 22
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 22)) {
                        // line 23
                        echo "                  <i class=\"fa fa-angle-right add hidden-xs hidden-sm\"></i>
                ";
                    }
                    // line 25
                    echo "              </a>
              <span class=\"pull-xs-right hidden-md hidden-lg\">
                  <span data-target=\"#top_sub_menu_";
                    // line 27
                    echo ($context["temprand"] ?? null);
                    echo "\" data-toggle=\"collapse\" class=\"navbar-toggler collapse-icons\">
                    <i class=\"fa fa-angle-down add\"></i>
                    <i class=\"fa fa-angle-up remove\"></i>
                  </span>
              </span>
              <div id=\"top_sub_menu_";
                    // line 32
                    echo ($context["temprand"] ?? null);
                    echo "\" class=\"dropdown-menu popover sub-menu collapse\">
                  ";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 33), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 33)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 33), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 34
                        echo "                  <ul class=\"list-unstyled childs_1 category_dropdownmenu ";
                        if ((twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 34) <= 1)) {
                            echo " ";
                            echo "single-dropdown-menu";
                            echo " ";
                        } else {
                            echo " ";
                            echo "multiple-dropdown-menu";
                            echo " ";
                        }
                        echo "\" data-depth=\"1\">

                    ";
                        // line 36
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            echo "   ";
                            // line 37
                            echo "                    ";
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 37)) {
                                // line 38
                                echo "                    ";
                                $context["temprand"] = twig_random($this->env, 10000);
                                // line 39
                                echo "                      <li class=\"category dropdown sub-category\">
                        <a class=\"dropdown-item dropdown-submenu\" href=\"";
                                // line 40
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 40);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 40);
                                echo "</a>
                        <span class=\"pull-xs-right hidden-md hidden-lg\">
                            <span data-target=\"#top_sub_menu_";
                                // line 42
                                echo ($context["temprand"] ?? null);
                                echo "\" data-toggle=\"collapse\" class=\"navbar-toggler collapse-icons\">
                              <i class=\"fa fa-angle-down add\"></i>
                              <i class=\"fa fa-angle-up remove\"></i>
                            </span>
                        </span>
                        <div id=\"top_sub_menu_";
                                // line 47
                                echo ($context["temprand"] ?? null);
                                echo "\" class=\"dropdown-inner collapse\">
                            ";
                                // line 48
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 48), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 48)) / twig_round(twig_get_attribute($this->env, $this->source, $context["child"], "column", [], "any", false, false, false, 48), 1, "ceil"))));
                                foreach ($context['_seq'] as $context["_key"] => $context["childs_col"]) {
                                    // line 49
                                    echo "                            <ul class=\"list-unstyled childs_2 top-menu\" data-depth=\"2\">
                              ";
                                    // line 50
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($context["childs_col"]);
                                    foreach ($context['_seq'] as $context["_key"] => $context["childs_2"]) {
                                        // line 51
                                        echo "                              <li class=\"category\">
                                <a class=\"dropdown-item\" href=\"";
                                        // line 52
                                        echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "href", [], "any", false, false, false, 52);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "name", [], "any", false, false, false, 52);
                                        echo "</a>
                              </li>
                              ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 55
                                    echo "                            </ul>
                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_col'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 57
                                echo "                        </div>
                      </li>
                    ";
                            } else {
                                // line 60
                                echo "                      <li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 60);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 60);
                                echo "</a></li>
                    ";
                            }
                            // line 61
                            echo "   ";
                            // line 62
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 63
                        echo "                  </ul>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "              </div>
            </li>
            ";
                } else {
                    // line 68
                    echo "            <li class=\"maintitle\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 68);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 68);
                    echo "</a></li>
            ";
                }
                // line 70
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            ";
            if ((($context["blog_enable"] ?? null) == true)) {
                // line 72
                echo "            <li> <a href=\"";
                echo ($context["all_blogs"] ?? null);
                echo "\">
              <span data-hover=\"";
                // line 73
                echo ($context["text_blog"] ?? null);
                echo "\">";
                echo ($context["text_blog"] ?? null);
                echo "</span>
            </a></li>       
            ";
            }
            // line 75
            echo "   
          </ul>
    </div>    
    <div id=\"mobile_top_menu_wrapper\" class=\"hidden-lg hidden-md\" style=\"display:none;\">
      <div id=\"top_menu_closer\">
        <i class=\"fa fa-close\"></i>
      </div>
      <div class=\"js-top-menu mobile\" id=\"_mobile_top_menu\"></div>
    </div>  
    <div id=\"menu-icon\" class=\"menu-icon hidden-md hidden-lg\">
      <div class=\"nav-icon\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
            <symbol id=\"menu\" viewBox=\"0 0 750 750\"><title>menu</title>
                <path d=\"M12.03,84.212h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03
                C5.39,60.152,0,65.541,0,72.182C0,78.823,5.39,84.212,12.03,84.212z\"></path>
                <path d=\"M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03
                    S379.58,180.455,372.939,180.455z\"></path>
                <path d=\"M372.939,300.758H12.03c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h360.909
                c6.641,0,12.03-5.39,12.03-12.03C384.97,306.147,379.58,300.758,372.939,300.758z\"></path>
            </symbol>
        </svg>
        <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#menu\" x=\"22%\" y=\"25%\"></use></svg>
      </div>
  </div>
    <div id=\"_mobile_cart\"></div>
    <div id=\"_mobile_user_info\"></div>
    <div id=\"_mobile_seach_widget\"></div>
";
        }
        // line 102
        echo "  
<script type=\"text/javascript\"> 
\$(\"#_desktop_top_menu\").click(function(){
        \$(\"#top-menu\").slideToggle();
        \$('.wrapper').toggleClass('open');
});
</script>";
    }

    public function getTemplateName()
    {
        return "freshmart/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 102,  251 => 75,  243 => 73,  238 => 72,  235 => 71,  229 => 70,  221 => 68,  216 => 65,  209 => 63,  203 => 62,  201 => 61,  193 => 60,  188 => 57,  181 => 55,  170 => 52,  167 => 51,  163 => 50,  160 => 49,  156 => 48,  152 => 47,  144 => 42,  137 => 40,  134 => 39,  131 => 38,  128 => 37,  123 => 36,  109 => 34,  105 => 33,  101 => 32,  93 => 27,  89 => 25,  85 => 23,  83 => 22,  77 => 21,  74 => 20,  71 => 19,  68 => 18,  64 => 17,  61 => 16,  56 => 13,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshmart/template/common/menu.twig", "");
    }
}
