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

/* dreamauto/template/extension/module/ishicategoryblock.twig */
class __TwigTemplate_327a4d38ea421f413561a7046f5f86feb5fc71e45bddb61f284d0a9df3bb465c extends \Twig\Template
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
        echo "\" class=\"ishicategoryblock\">
    <div class=\"block-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#category-container\" data-toggle=\"collapse\">
        <span class=\"page-title\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</span>
        <span class=\"navbar-toggler collapse-icons\">
        <i class=\"fa fa-angle-down add\"></i>
        <i class=\"fa fa-angle-up remove\"></i>
        </span>
    </div>
    <div id=\"category-container\" class=\"collapse data-toggler\">
        <div class=\"panel-group\" id=\"accordion\">
        ";
        // line 11
        $context["item"] = 1;
        // line 12
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            echo " 
            <div class=\"panel panel-default\">
            <div class=\"panel-heading\"> 
                <a class=\"text-container ";
            // line 15
            if ((($context["item"] ?? null) == 1)) {
                echo "active";
            }
            echo "\" data-toggle=\"collapse\" data-target=\"#collapseOne_";
            echo ($context["item"] ?? null);
            echo "\" data-parent=\"#accordion\">
                <h2>";
            // line 16
            if ((($context["item"] ?? null) < 9)) {
                echo " 0";
                echo ($context["item"] ?? null);
                echo " ";
            } else {
                echo " ";
                echo ($context["item"] ?? null);
                echo " ";
            }
            echo "</h2>      
                <p class=\"text-container\">";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 17);
            echo "</p>
                </a>
            </div>               
            <div id=\"collapseOne_";
            // line 20
            echo ($context["item"] ?? null);
            echo "\" class=\"image-container panel-collapse collapse ";
            if ((($context["item"] ?? null) == 1)) {
                echo "in";
            }
            echo "\">
                <div class=\"panel-body\">
                    <a href=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 22);
            echo "\">
                        <img src=\"";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 23);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 23);
            echo "\" class=\"img-responsive\" />
                    </a>
                </div> 
            </div> 
            </div>
            ";
            // line 28
            $context["item"] = (($context["item"] ?? null) + 1);
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "dreamauto/template/extension/module/ishicategoryblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 29,  114 => 28,  104 => 23,  100 => 22,  91 => 20,  85 => 17,  73 => 16,  65 => 15,  56 => 12,  54 => 11,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamauto/template/extension/module/ishicategoryblock.twig", "");
    }
}
