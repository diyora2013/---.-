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

/* extension/module/ishibannerblock.twig */
class __TwigTemplate_edd71ba8fc5db14b38e8c9bc8e63e1f4a8b6eb968f03f62c4d6c6fe739f7725d extends \Twig\Template
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
\t\t\t<div class=\"tab-pane\" id=\"tab-design\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-banner\" data-toggle=\"tab\">";
        // line 31
        echo ($context["entry_banner"] ?? null);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 36
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t  <input type=\"text\" name=\"name\" value=\"";
        // line 38
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t  ";
        // line 39
        if (($context["error_name"] ?? null)) {
            // line 40
            echo "\t\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t  ";
        }
        // line 42
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 45
        echo ($context["entry_width"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t  <input type=\"text\" name=\"width\" value=\"";
        // line 47
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
\t\t\t\t\t\t  ";
        // line 48
        if (($context["error_width"] ?? null)) {
            // line 49
            echo "\t\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
\t\t\t\t\t\t  ";
        }
        // line 51
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 54
        echo ($context["entry_height"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t  <input type=\"text\" name=\"height\" value=\"";
        // line 56
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
\t\t\t\t\t\t  ";
        // line 57
        if (($context["error_height"] ?? null)) {
            // line 58
            echo "\t\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
\t\t\t\t\t\t  ";
        }
        // line 60
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-column\">";
        // line 63
        echo ($context["entry_column"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"column\" id=\"input-column\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 66
        if ((($context["column"] ?? null) == 1)) {
            echo " selected=selected ";
        }
        echo ">1</option>
\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 67
        if ((($context["column"] ?? null) == 2)) {
            echo " selected=selected ";
        }
        echo ">2</option>
\t\t\t\t\t\t\t\t<option value=\"3\" ";
        // line 68
        if ((($context["column"] ?? null) == 3)) {
            echo " selected=selected ";
        }
        echo ">3</option>
\t\t\t\t\t\t\t\t<option value=\"4\" ";
        // line 69
        if ((($context["column"] ?? null) == 4)) {
            echo " selected=selected ";
        }
        echo ">4</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-style\">";
        // line 74
        echo ($context["entry_hoverstyle"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<select name=\"style\" id=\"input-style\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinnormal\" ";
        // line 77
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinnormal")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinnormal"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinflip\" ";
        // line 78
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinflip")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinflip"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinrotate\" ";
        // line 79
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinrotate")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinrotate"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinrotate3D\" ";
        // line 80
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinrotate3D")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinrotate3d"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeintop\" ";
        // line 81
        if ((($context["style"] ?? null) == "ishi-customhover-fadeintop")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeintop"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinbottom\" ";
        // line 82
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinbottom")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinbottom"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeintopbottom\" ";
        // line 83
        if ((($context["style"] ?? null) == "ishi-customhover-fadeintopbottom")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeintopbottom"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-customhover-doublefadeincenter\" ";
        // line 84
        if ((($context["style"] ?? null) == "ishi-customhover-doublefadeincenter")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_doublefadeincenter"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeoutcenter\" ";
        // line 85
        if ((($context["style"] ?? null) == "ishi-customhover-fadeoutcenter")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeoutcenter"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeoutcorner\" ";
        // line 86
        if ((($context["style"] ?? null) == "ishi-customhover-fadeoutcorner")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeoutcorner"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinoutcorner\" ";
        // line 87
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinoutcorner")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinoutcorner"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinsquare\" ";
        // line 88
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinsquare")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinsquare"] ?? null);
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-scale\">";
        // line 93
        echo ($context["entry_scale"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t";
        // line 96
        if (($context["scale"] ?? null)) {
            // line 97
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"scale\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-scale\" />
\t\t\t\t\t\t\t";
        } else {
            // line 99
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"scale\" value=\"1\" class=\"primary\" id=\"input-scale\" />
\t\t\t\t\t\t\t";
        }
        // line 101
        echo "\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 106
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t  <select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 109
        if (($context["status"] ?? null)) {
            // line 110
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 111
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 113
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 114
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 116
        echo "\t\t\t\t\t\t  </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-banner\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"bannerstab\">
\t\t\t\t\t\t\t\t\t";
        // line 124
        $context["banner_row"] = 0;
        // line 125
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_banner"]) {
            // line 126
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "').remove(); \$('#bannerstab a:first').tab('show');\"></i>";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "default_name", [], "any", false, false, false, 126);
            echo " </a></li>
\t\t\t\t\t\t\t\t\t";
            // line 127
            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
            // line 128
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "\t\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-block\" onclick=\"addbannertab();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["entry_addbanner"] ?? null);
        echo " </button></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t <div class=\"tab-content\" id=\"ishi_bannertabs\">";
        // line 133
        $context["banner_row"] = 0;
        // line 134
        echo "\t\t\t\t\t\t\t\t ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_banner"]) {
            // line 135
            echo "\t\t\t\t\t\t\t\t <div class=\"tab-pane\" id=\"tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-";
            // line 137
            echo ($context["banner_row"] ?? null);
            echo "\">";
            echo ($context["entry_image"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-";
            // line 139
            echo ($context["banner_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "thumb", [], "any", false, false, false, 139);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "placeholder", [], "any", false, false, false, 139);
            echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ishibanner[";
            // line 140
            echo ($context["banner_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "image", [], "any", false, false, false, 140);
            echo "\" id=\"input-image-";
            echo ($context["banner_row"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-link-";
            // line 144
            echo ($context["banner_row"] ?? null);
            echo "\">";
            echo ($context["entry_link"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"ishibanner[";
            // line 146
            echo ($context["banner_row"] ?? null);
            echo "][link]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "link", [], "any", false, false, false, 146)) ? (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "link", [], "any", false, false, false, 146)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_link"] ?? null);
            echo "\" class=\"form-control\" id=\"input-link-";
            echo ($context["banner_row"] ?? null);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order-";
            // line 150
            echo ($context["banner_row"] ?? null);
            echo "\">";
            echo ($context["entry_sortorder"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"ishibanner[";
            // line 152
            echo ($context["banner_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "sort_order", [], "any", false, false, false, 152)) ? (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "sort_order", [], "any", false, false, false, 152)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_sortorder"] ?? null);
            echo "\" class=\"form-control\" id=\"input-sort-order-";
            echo ($context["banner_row"] ?? null);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t ";
            // line 156
            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
            // line 157
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
        </form>
      </div>
    </div>
  </div>
</div>
<style>
/* The switch - the box around the slider */
.showtext{
\tdisplay:none;
}
.show{
\tdisplay:block;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: \"\";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input.default:checked + .slider {
  background-color: #444;
}
input.primary:checked + .slider {
  background-color: #2196F3;
}
input.success:checked + .slider {
  background-color: #8bc34a;
}
input.info:checked + .slider {
  background-color: #3de0f5;
}
input.warning:checked + .slider {
  background-color: #FFC107;
}
input.danger:checked + .slider {
  background-color: #f44336;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

<script type=\"text/javascript\">
function boxDisable(e, t) {
var id = e + 'show';

    if (t.is(':checked')) {
\t\t\$('.'+id).attr(\"style\", \"display: block !important\");
    } else {
      \$('.'+id).attr(\"style\", \"display: none !important\");
    }
}
var banner_row = ";
        // line 261
        echo ($context["banner_row"] ?? null);
        echo ";
function addbannertab() {
\t\tvar newtab = 'tab-singlebanner'+ banner_row;

\t\thtml  = '<div class=\"tab-pane\" id=\"tab-singlebanner'+ banner_row +'\">';
\t\t\t\t\t\t\t\t
\t\thtml  += '<div class=\"form-group\"> <label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 267
        echo ($context["entry_image"] ?? null);
        echo "</label> <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image-'+ banner_row +'\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\"/></a><input type=\"hidden\" name=\"ishibanner['+ banner_row +'][image]\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image-'+ banner_row +'\" /></div></div>';
\t\t
\t\thtml  += '<div class=\"form-group\">';
\t\thtml  += '<label class=\"col-sm-2 control-label\" for=\"input-contactno'+ banner_row +'\">";
        // line 270
        echo ($context["entry_link"] ?? null);
        echo "</label>';
\t\thtml  += '<div class=\"col-sm-10\">';
\t\thtml  += '<input type=\"text\" name=\"ishibanner['+ banner_row +'][link]\" value=\"\" placeholder=\"";
        // line 272
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control\" id=\"input-contactno'+ banner_row +'\" />';
\t\thtml  += '<span>";
        // line 273
        echo ($context["help_contact"] ?? null);
        echo "</span>';
\t\thtml  += '</div>';
\t\thtml  += '</div>';
\t\t
\t\thtml  += '<div class=\"form-group\">';
\t\thtml  += '<label class=\"col-sm-2 control-label\" for=\"input-sort-order-'+ banner_row +'\">";
        // line 278
        echo ($context["entry_sortorder"] ?? null);
        echo "</label>';
\t\thtml  += '<div class=\"col-sm-10\">';
\t\thtml  += '<input type=\"text\" name=\"ishibanner['+ banner_row +'][sort_order]\" value=\"1\" placeholder=\"";
        // line 280
        echo ($context["entry_sortorder"] ?? null);
        echo "\" class=\"form-control\" id=\"input-sort-order-'+ banner_row +'\" />';
\t\thtml  += '</div>';
\t\thtml  += '</div>';
\t\t
\t\t\$('#tab-banner #ishi_bannertabs').append(html);
\t\t
\t\t\$('#bannerstab > li:last-child').before('<li><a href=\"#tab-singlebanner' + banner_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#bannerstab a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-singlebanner' + banner_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-singlebanner' + banner_row + '\\').remove();\"></i> ";
        // line 286
        echo ($context["entry_banner"] ?? null);
        echo " </li>');
\t\t 
\t\t\$('#bannerstab a[href=\\'#tab-singlebanner' + banner_row + '\\']').tab('show');

\t\tbanner_row++;
\t}
\t\$('#bannerstab a:first').tab('show');
</script>
";
        // line 294
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ishibannerblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  682 => 294,  671 => 286,  662 => 280,  657 => 278,  649 => 273,  645 => 272,  640 => 270,  628 => 267,  619 => 261,  514 => 158,  508 => 157,  506 => 156,  493 => 152,  486 => 150,  473 => 146,  466 => 144,  455 => 140,  447 => 139,  440 => 137,  434 => 135,  429 => 134,  427 => 133,  419 => 129,  413 => 128,  411 => 127,  400 => 126,  395 => 125,  393 => 124,  383 => 116,  378 => 114,  373 => 113,  368 => 111,  363 => 110,  361 => 109,  355 => 106,  348 => 101,  344 => 99,  340 => 97,  338 => 96,  332 => 93,  320 => 88,  312 => 87,  304 => 86,  296 => 85,  288 => 84,  280 => 83,  272 => 82,  264 => 81,  256 => 80,  248 => 79,  240 => 78,  232 => 77,  226 => 74,  216 => 69,  210 => 68,  204 => 67,  198 => 66,  192 => 63,  187 => 60,  181 => 58,  179 => 57,  173 => 56,  168 => 54,  163 => 51,  157 => 49,  155 => 48,  149 => 47,  144 => 45,  139 => 42,  133 => 40,  131 => 39,  125 => 38,  120 => 36,  112 => 31,  108 => 30,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ishibannerblock.twig", "");
    }
}
