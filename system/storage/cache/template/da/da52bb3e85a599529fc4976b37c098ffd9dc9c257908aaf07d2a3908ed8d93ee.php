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

/* dreamauto/template/extension/module/ishiheaderlinkblock.twig */
class __TwigTemplate_dd9a02d2e048c8a8448f047f0268f68e3a90398ac4ddf23d9937390bafed684c extends \Twig\Template
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
        echo "<div id=\"_desktop_link_menu\">
  <div id=\"header_ishiheaderlinks\" class=\"header-block\">
    <ul class=\"bullet link_container\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extra_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extra_page"]) {
            // line 5
            echo "      \t<li><a class=\"extra-link\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extra_page"], "link", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["extra_page"], "title", [], "any", false, false, false, 5);
            echo "</a></li>
\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
  </div>
</div>
<div id=\"view_text\">View More</div>
<div id=\"menu_text\">Menu</div>";
    }

    public function getTemplateName()
    {
        return "dreamauto/template/extension/module/ishiheaderlinkblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamauto/template/extension/module/ishiheaderlinkblock.twig", "");
    }
}
