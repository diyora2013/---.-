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

/* freshmart/template/information/contact.twig */
class __TwigTemplate_94e9f75ea5a1b530050145fe8ba7367b547684b154c7b46a3facf4cc3c3d15e9 extends \Twig\Template
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
        echo "
<div id=\"information-contact\" class=\"container\">
  <div class=\"wrapper_container row\">";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 6
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"breadcrumb-container\">
        <h1 class=\"page-title\">";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <ul class=\"breadcrumb\">
          ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </ul>
      </div>
      <h3>";
        // line 20
        echo ($context["text_location"] ?? null);
        echo "</h3>
      <div class=\"panel panel-default contact-location\">
        <div class=\"panel-body\">
          <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"col-sm-12 store-address\"><div class=\"location-title\"><i class=\"fa fa-home\"></i>";
        // line 25
        echo ($context["store"] ?? null);
        echo "</div>
                <address class=\"location-detail\">
                ";
        // line 27
        echo ($context["address"] ?? null);
        echo "
                </address>
              </div>
              <div class=\"col-sm-12 store-contact\">
                <div class=\"location-title\"><i class=\"fa fa-phone\"></i>";
        // line 31
        echo ($context["text_telephone"] ?? null);
        echo "</div>
                <address class=\"location-detail\">";
        // line 32
        echo ($context["telephone"] ?? null);
        echo "</address>
              </div>
              <div class=\"col-sm-12 store-fax\">
                ";
        // line 35
        if (($context["fax"] ?? null)) {
            // line 36
            echo "                <div class=\"location-title\"><i class=\"fa fa-fax\"></i>";
            echo ($context["text_fax"] ?? null);
            echo "</div>
                <address class=\"location-detail\">";
            // line 37
            echo ($context["fax"] ?? null);
            echo "</address>
                ";
        }
        // line 39
        echo "              </div>
              <div class=\"col-sm-12 store-status\">
                ";
        // line 41
        if (($context["open"] ?? null)) {
            // line 42
            echo "                <div class=\"location-title\"><i class=\"fa fa-envelope-open-o\"></i>";
            echo ($context["text_open"] ?? null);
            echo "</div>
                <address class=\"location-detail\">";
            // line 43
            echo ($context["open"] ?? null);
            echo "</address>
                ";
        }
        // line 45
        echo "              </div>
              <div class=\"col-sm-12 store-comment\">
                ";
        // line 47
        if (($context["comment"] ?? null)) {
            // line 48
            echo "                <div class=\"location-title\"><i class=\"fa fa-comment-o\"></i>";
            echo ($context["text_comment"] ?? null);
            echo "</div>
                <address class=\"location-detail\">";
            // line 49
            echo ($context["comment"] ?? null);
            echo "</address>
                ";
        }
        // line 51
        echo "              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"map\">
                ";
        // line 55
        if (($context["geocode"] ?? null)) {
            // line 56
            echo "                <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
                ";
        }
        // line 58
        echo "              </div>
            </div>
          </div>
        </div>
      </div>
      ";
        // line 63
        if (($context["locations"] ?? null)) {
            // line 64
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 67
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 69);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 69);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 71);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 74
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 74)) {
                    // line 75
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 75);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 75);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 75);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 77
                echo "                <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 77);
                echo "</strong><br />
                  <address>
                  ";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 79);
                echo "
                  </address>
                  ";
                // line 81
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 82));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 84
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 85
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br>
                  ";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 86);
                echo "<br />
                  <br />
                  ";
                // line 88
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br>
                  ";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 90);
                    echo "
                  ";
                }
                // line 92
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 94
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 94)) {
                    // line 95
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br />
                  ";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 96);
                    echo "<br />
                  <br />
                  ";
                }
                // line 99
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 99)) {
                    // line 100
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br />
                  ";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 101);
                    echo "
                  ";
                }
                // line 103
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "      </div>
      ";
        }
        // line 111
        echo "      <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 113
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 115
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 117
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 118
        if (($context["error_name"] ?? null)) {
            // line 119
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 121
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 124
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 126
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 127
        if (($context["error_email"] ?? null)) {
            // line 128
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 130
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 133
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 135
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 136
        if (($context["error_enquiry"] ?? null)) {
            // line 137
            echo "              <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 139
        echo "            </div>
          </div>
          ";
        // line 141
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 145
        echo ($context["button_submit"] ?? null);
        echo "\" />
          </div>
        </div>
      </form>
      ";
        // line 149
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 150
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 152
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "freshmart/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 152,  425 => 150,  420 => 149,  413 => 145,  406 => 141,  402 => 139,  396 => 137,  394 => 136,  390 => 135,  385 => 133,  380 => 130,  374 => 128,  372 => 127,  368 => 126,  363 => 124,  358 => 121,  352 => 119,  350 => 118,  346 => 117,  341 => 115,  336 => 113,  330 => 111,  326 => 109,  315 => 103,  310 => 101,  305 => 100,  302 => 99,  296 => 96,  291 => 95,  289 => 94,  285 => 92,  280 => 90,  275 => 89,  273 => 88,  268 => 86,  264 => 85,  261 => 84,  251 => 82,  249 => 81,  244 => 79,  238 => 77,  228 => 75,  226 => 74,  220 => 71,  213 => 69,  209 => 67,  205 => 66,  199 => 64,  197 => 63,  190 => 58,  180 => 56,  178 => 55,  172 => 51,  167 => 49,  162 => 48,  160 => 47,  156 => 45,  151 => 43,  146 => 42,  144 => 41,  140 => 39,  135 => 37,  130 => 36,  128 => 35,  122 => 32,  118 => 31,  111 => 27,  106 => 25,  98 => 20,  94 => 18,  83 => 16,  79 => 15,  74 => 13,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshmart/template/information/contact.twig", "");
    }
}
