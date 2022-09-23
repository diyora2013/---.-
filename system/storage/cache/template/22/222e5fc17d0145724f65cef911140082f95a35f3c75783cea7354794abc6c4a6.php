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

/* freshmart/template/extension/module/category.twig */
class __TwigTemplate_df8c3561685afe93b27fdd690ad765723aa227ef01414ae54c77e52cf84856d0 extends \Twig\Template
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
        echo "<div class=\"box\">
    <h2 class=\"page-title hidden-sm hidden-xs\">
        ";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "
    </h2>
    <div class=\"block-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#box-container\" data-toggle=\"collapse\">
        <span class=\"page-title\">";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</span>
        <span class=\"navbar-toggler collapse-icons\">
          <i class=\"fa fa-angle-down add\"></i>
          <i class=\"fa fa-angle-up remove\"></i>
        </span>
    </div>
    <div id=\"box-container\" class=\"collapse data-toggler\">
        <ul class=\"category-top-menu\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 15
            echo "            <li>                
                ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 16) == ($context["category_id"] ?? null))) {
                echo "                 
                    <a href=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 17);
                echo "\" class=\"list-group-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 17);
                echo "</a>
                                  
                    ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "                        <span class=\"navbar-toggler collapse-icons\" data-target=\"#childlist\" data-toggle=\"collapse\">
                            <i class=\"fa fa-angle-down add\"></i>
                            <i class=\"fa fa-angle-up remove\"></i>
                        </span> 
                    ";
                }
                // line 25
                echo "                    <div id=\"childlist\" class=\"collapse\">                        
                        <ul class=\"category-sub-menu\">                    
                            ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 28));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 29
                        echo "                                <li>
                                    ";
                        // line 30
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 30) == ($context["child_id"] ?? null))) {
                            // line 31
                            echo "                                        <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 31);
                            echo "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 31);
                            echo "</a>
                                        ";
                        } else {
                            // line 32
                            echo " 
                                        <a href=\"";
                            // line 33
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 33);
                            echo "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 33);
                            echo "</a>
                                    ";
                        }
                        // line 35
                        echo "                                </li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "                            ";
                }
                // line 38
                echo "                        </ul>
                    </div>
                ";
            } else {
                // line 40
                echo " 
                    <a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 41);
                echo "\" class=\"list-group-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41);
                echo "</a>
                ";
            }
            // line 43
            echo "            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "freshmart/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 45,  144 => 43,  137 => 41,  134 => 40,  129 => 38,  126 => 37,  119 => 35,  112 => 33,  109 => 32,  101 => 31,  99 => 30,  96 => 29,  91 => 28,  89 => 27,  85 => 25,  78 => 20,  76 => 19,  69 => 17,  65 => 16,  62 => 15,  58 => 14,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshmart/template/extension/module/category.twig", "");
    }
}
