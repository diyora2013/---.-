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

/* dreamauto/template/extension/module/ishioffersblock.twig */
class __TwigTemplate_502aac64646057606ff97fb93a55d5161140689f065a9dcfe7db1eecb609574b extends \Twig\Template
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
        echo "<div id=\"ishioffersblock\">
\t<div class=\"offer-title\"> 
\t\t<span>%</span> ";
        // line 3
        echo ($context["text_offer"] ?? null);
        echo "
\t</div>\t\t
\t<div id=\"typed-strings\">
\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            echo " 
\t\t\t<p>";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["offer"], "title", [], "any", false, false, false, 7);
            echo "</p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</div>
 \t<span id=\"typed\"></span>
\t<script type=\"text/javascript\">
\t\tvar typed = new Typed('#typed', {
\t      stringsElement: '#typed-strings',
\t      typeSpeed: 90,
\t      backSpeed: 90,
\t      startDelay: 1000,
\t      showCursor: false,
\t      loop: true,
\t    });
\t</script>
</div>";
    }

    public function getTemplateName()
    {
        return "dreamauto/template/extension/module/ishioffersblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  53 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamauto/template/extension/module/ishioffersblock.twig", "");
    }
}
