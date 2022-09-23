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

/* dreamauto/template/extension/module/ishipaymentblock.twig */
class __TwigTemplate_59a779e14e02aa89afdd7b3f05b37d4549054b61ee6f49141f572a46c75600c6 extends \Twig\Template
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
        echo "  <div id=\"";
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"ishipaymentblock\">
\t  <div id=\"paymentblock\">
\t  \t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_sliderimages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_sliderimage"]) {
            // line 4
            echo "\t\t\t    <div class=\"item\">
\t\t\t        <a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "link", [], "any", false, false, false, 5);
            echo "\">
\t\t\t        <img src=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "image", [], "any", false, false, false, 6);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_sliderimage"], "title", [], "any", false, false, false, 6);
            echo "\" class=\"img-responsive\" />
\t\t\t        </a>
\t\t\t    </div>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_sliderimage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "dreamauto/template/extension/module/ishipaymentblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  54 => 6,  50 => 5,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamauto/template/extension/module/ishipaymentblock.twig", "");
    }
}
