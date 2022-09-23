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

/* dreamauto/template/extension/module/filter.twig */
class __TwigTemplate_467df6639a999135bae4dfdb31aeeeb36c617d73c4662785765e92e25c7a8e08 extends \Twig\Template
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
        echo "<div class=\"filterbox\">
  <div class=\"page-title hidden-sm hidden-xs\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <div class=\"block-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#filterbox-container\" data-toggle=\"collapse\">
    <span class=\"page-title\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</span>
    <span class=\"navbar-toggler collapse-icons\">
      <i class=\"fa fa-angle-down add\"></i>
      <i class=\"fa fa-angle-up remove\"></i>
    </span>
  </div>
  <div id=\"filterbox-container\" class=\"collapse data-toggler\">
    <div class=\"list-group-filter\"> 
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            echo " 
      <a class=\"list-group-item group-name\">";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 13);
            echo "</a>
      <div class=\"list-group-item\">
        <div id=\"filter-group";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 15);
            echo "\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 16
                echo "          <div class=\"checkbox\">
            <label>";
                // line 17
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 17), ($context["filter_category"] ?? null))) {
                    // line 18
                    echo "              <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 18);
                    echo "\" checked=\"checked\" />
              ";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 19);
                    echo "
              ";
                } else {
                    // line 21
                    echo "              <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 21);
                    echo "\" />
              ";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 22);
                    echo "
              ";
                }
                // line 24
                echo "            </label>
          </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </div>
    <div class=\"panel-footer text-left\">
      <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">";
        // line 32
        echo ($context["button_filter"] ?? null);
        echo "</button>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tfilter = [];

\t\$('input[name^=\\'filter\\']:checked').each(function(element) {
\t\tfilter.push(this.value);
\t});

\tlocation = '";
        // line 44
        echo ($context["action"] ?? null);
        echo "&filter=' + filter.join(',');
});
//--></script> 
";
    }

    public function getTemplateName()
    {
        return "dreamauto/template/extension/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 44,  118 => 32,  114 => 30,  106 => 27,  98 => 24,  93 => 22,  88 => 21,  83 => 19,  78 => 18,  76 => 17,  73 => 16,  67 => 15,  62 => 13,  56 => 12,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamauto/template/extension/module/filter.twig", "");
    }
}
