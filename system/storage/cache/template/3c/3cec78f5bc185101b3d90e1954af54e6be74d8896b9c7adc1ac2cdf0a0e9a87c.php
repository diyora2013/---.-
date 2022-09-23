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

/* freshmart/template/common/home.twig */
class __TwigTemplate_68af585965ea4ebc9e637ed87276e8398b23269329f505bfae9dc7986bdf1f0e extends \Twig\Template
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
<div id=\"common-home\">    
\t";
        // line 3
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 4
            echo "\t";
            $context["class"] = "col-sm-6";
            // line 5
            echo "\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 6
            echo "\t";
            $context["class"] = "col-sm-9";
            // line 7
            echo "\t";
        } else {
            // line 8
            echo "\t";
            $context["class"] = "col-sm-12";
            // line 9
            echo "\t";
        }
        echo "    
\t<div id=\"content\">   
\t\t<div class=\"container\">        
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 13
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t</div>
\t\t</div> 
\t</div>
\t<div id=\"wrapper\"> 
\t\t<div class=\"container\">        
\t\t\t<div class=\"row\">\t
\t\t\t\t<div id=\"top_left\">\t\t
\t\t\t\t\t";
        // line 21
        echo ($context["column_left"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t<div id=\"top_home\" class=\"col-lg-9 col-md-9 col-sm-12 col-xs-12\">
\t\t\t\t\t";
        // line 24
        echo ($context["content_middle"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t<div id=\"top_right\">
\t\t\t\t\t";
        // line 27
        echo ($context["column_right"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 29
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t\t</div>
\t\t</div> 
\t</div> 
</div>
";
        // line 34
        echo ($context["footer"] ?? null);
        echo "   ";
    }

    public function getTemplateName()
    {
        return "freshmart/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 34,  95 => 29,  90 => 27,  84 => 24,  78 => 21,  67 => 13,  59 => 9,  56 => 8,  53 => 7,  50 => 6,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshmart/template/common/home.twig", "");
    }
}
