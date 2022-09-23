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
class __TwigTemplate_565bfc1f21b93180faf2af2221733785461393cc8defba0ddca5b96e2fd8e078 extends \Twig\Template
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
  <!-- <div class=\"searchboxform\">
    <select name=\"category_id\" class=\"ishicategory-select hidden-sm hidden-xs\">
        <option value=\"0\">";
        // line 4
        echo ($context["text_category"] ?? null);
        echo "</option>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 6
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 6) == ($context["category_id"] ?? null))) {
                // line 7
                echo "        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 7);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 7);
                echo "</option>
        ";
            } else {
                // line 9
                echo "        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 9);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 9);
                echo "</option>
        ";
            }
            // line 11
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 12
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 12) == ($context["category_id"] ?? null))) {
                    // line 13
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 13);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 13);
                    echo "</option>
        ";
                } else {
                    // line 15
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 15);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 15);
                    echo "</option>
        ";
                }
                // line 17
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 18
                    echo "        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 18) == ($context["category_id"] ?? null))) {
                        // line 19
                        echo "        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 19);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 19);
                        echo "</option>
        ";
                    } else {
                        // line 21
                        echo "        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 21);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 21);
                        echo "</option>
        ";
                    }
                    // line 23
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </select>
  </div> -->
  <input id=\"ajax-search-text\" type=\"text\" name=\"search\" value=\"";
        // line 28
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control input-lg\" />
  <div class=\"ajaxishi-search\" style=\"display: none;\"><ul></ul></div>
  <span class=\"input-group-btn\">
    <button id=\"ajax-search-btn\" type=\"button\" class=\"btn btn-default btn-lg\">";
        // line 31
        echo ($context["text_btn"] ?? null);
        echo "</button>
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
        return array (  147 => 31,  139 => 28,  135 => 26,  129 => 25,  123 => 24,  117 => 23,  109 => 21,  101 => 19,  98 => 18,  93 => 17,  85 => 15,  77 => 13,  74 => 12,  69 => 11,  61 => 9,  53 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshmart/template/common/search.twig", "");
    }
}
