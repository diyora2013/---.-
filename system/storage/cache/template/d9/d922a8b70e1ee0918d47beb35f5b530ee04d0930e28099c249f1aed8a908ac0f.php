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

/* freshmart/template/common/search.twig */
class __TwigTemplate_159f6d3c206280fd3ab67f44ef2571ed52ba1841ea7e5ea1764f50a7971945a7 extends \Twig\Template
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
        echo "<div id=\"search\" class=\"input-group\">
  <input id=\"ajax-search-text\" type=\"text\" name=\"search\" value=\"";
        // line 2
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control input-lg\" />
  <div class=\"ajaxishi-search\" style=\"display: none;\"><ul></ul></div>
  <span class=\"input-group-btn\">
    <button id=\"ajax-search-btn\" type=\"button\" class=\"btn btn-default btn-lg\">";
        // line 5
        echo ($context["text_btn"] ?? null);
        echo "<i class=\"fa fa-search\"></i></button>
  </span>
</div>

<script>
    (function() {
        document.getElementById('ajax-search-text').addEventListener('keypress', function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                document.getElementById('ajax-search-btn').click();
            }
        });
    }());
</script>";
    }

    public function getTemplateName()
    {
        return "freshmart/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshmart/template/common/search.twig", "");
    }
}
