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

/* extension/module/ishioffersblock.twig */
class __TwigTemplate_802cff8783395b76ccd6e47b9275b52e99c8046711bd01af0caeb44856a5bfac extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i>";
        echo ($context["text_view_list"] ?? null);
        echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>   
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 32
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 35
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ishioffer\" class=\"form-horizontal\">
          <input type=\"hidden\" name=\"module_id\" value=\"";
        // line 36
        echo ($context["module_id"] ?? null);
        echo "\" />
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 38
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 40
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 41
        if (($context["error_name"] ?? null)) {
            echo " 
              \t<div class=\"text-danger\">";
            // line 42
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 44
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 47
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 50
        if (($context["status"] ?? null)) {
            echo " 
                <option value=\"1\" selected=\"selected\">";
            // line 51
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 52
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 53
            echo " 
                <option value=\"1\">";
            // line 54
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 55
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 57
        echo "              </select>
            </div>
          </div>
          <table class=\"table table-striped table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 63
        echo ($context["column_title"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 64
        echo ($context["column_date_added"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 65
        echo ($context["column_action"] ?? null);
        echo "</td>
              </tr>
            </thead>
            ";
        // line 68
        if (($context["offer_entries"] ?? null)) {
            echo " 
            <tbody>
              ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["offer_entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                echo " 
              <tr>
                <td class=\"text-left\">";
                // line 72
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["entry"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["title"] ?? null) : null);
                echo "</td>
                <td class=\"text-right\">";
                // line 73
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["entry"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["date_added"] ?? null) : null);
                echo "</td>
                <td class=\"text-right\">
                  <a onclick=\"confirm('";
                // line 75
                echo ($context["text_confirm"] ?? null);
                echo "') ? location.href='";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["entry"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["delete"] ?? null) : null);
                echo "' : false;\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                  <a href=\"";
                // line 76
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["entry"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["edit"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                  </td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo " 
            </tbody>
            ";
        }
        // line 81
        echo " 
            <tfoot>
              ";
        // line 83
        if (($context["add_offer"] ?? null)) {
            echo " 
              <tr>
                <td class=\"text-right\" colspan=\"5\"><button type=\"button\" onclick=\"location = '";
            // line 85
            echo ($context["add_offer"] ?? null);
            echo "';\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_add_blog"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
              </tr>
              ";
        } else {
            // line 87
            echo " 
              <tr>
                <td class=\"text-center\" colspan=\"5\">";
            // line 89
            echo ($context["text_save_module"] ?? null);
            echo "</td>
              </tr>
              ";
        }
        // line 91
        echo " 
            </tfoot>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 99
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ishioffersblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 99,  278 => 91,  272 => 89,  268 => 87,  260 => 85,  255 => 83,  251 => 81,  246 => 79,  234 => 76,  226 => 75,  221 => 73,  217 => 72,  210 => 70,  205 => 68,  199 => 65,  195 => 64,  191 => 63,  183 => 57,  178 => 55,  174 => 54,  171 => 53,  166 => 52,  162 => 51,  158 => 50,  152 => 47,  147 => 44,  142 => 42,  138 => 41,  132 => 40,  127 => 38,  122 => 36,  118 => 35,  112 => 32,  103 => 27,  95 => 23,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ishioffersblock.twig", "");
    }
}
