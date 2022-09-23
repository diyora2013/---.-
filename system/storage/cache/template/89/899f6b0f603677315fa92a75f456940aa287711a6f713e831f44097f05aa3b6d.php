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

/* freshmart/template/extension/module/ishiservicesblock.twig */
class __TwigTemplate_6014c0597e163b2f849db5caad631bf3b4406333755a26f9e53e8db088f7d9a0 extends \Twig\Template
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
        echo "<section class=\"ishiservicesblock clearfix\">
    ";
        // line 2
        if ((($context["showtitle"] ?? null) == 1)) {
            // line 3
            echo "        <h3 class=\"home-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
    ";
        }
        // line 5
        echo "    <div class=\"row\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishiservices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishiservice"]) {
            // line 7
            echo "            <div class=\"services ";
            echo ($context["class"] ?? null);
            echo "\">
                <a href=\"#\" class=\"service-bg\" style=\"background: ";
            // line 8
            echo ($context["bg_color"] ?? null);
            echo ";\">
                    <div class=\"service-img\" style=\"background-image: url(";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "image", [], "any", false, false, false, 9);
            echo ");\"></div>
                    <div class=\"service-block\">
                        <div class=\"service-title\">";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "title", [], "any", false, false, false, 11);
            echo "</div>
                        <div class=\"service-desc\">";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "description", [], "any", false, false, false, 12);
            echo "</div>
                    </div>
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishiservice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "freshmart/template/extension/module/ishiservicesblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  73 => 12,  69 => 11,  64 => 9,  60 => 8,  55 => 7,  51 => 6,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshmart/template/extension/module/ishiservicesblock.twig", "");
    }
}
