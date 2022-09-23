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

/* dreamauto/template/extension/module/ishistoryblock.twig */
class __TwigTemplate_5d929b4f959567dc6baeb828752d2f411216b9cbe1ad39a59adeca09b829bb61 extends \Twig\Template
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
        echo "<section class=\"ishistoryblock\">
\t<div class=\"story-image\">
\t\t<div class=\"img-container\">
\t\t\t<a href=\"#\">
\t\t\t\t<img src=\"";
        // line 5
        echo ($context["bgimage"] ?? null);
        echo "\" alt=\"story-img\" />
\t\t\t</a>
\t\t</div>
\t</div>
\t<div class=\"text-wrapper\">
\t\t";
        // line 10
        echo ($context["html"] ?? null);
        echo "
\t</div>
</section>

";
    }

    public function getTemplateName()
    {
        return "dreamauto/template/extension/module/ishistoryblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamauto/template/extension/module/ishistoryblock.twig", "");
    }
}
