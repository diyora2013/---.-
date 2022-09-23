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

/* dreamauto/template/extension/module/blogger.twig */
class __TwigTemplate_680240d1c6c5155921fe8e6a76c5fefba4317df7c91a918e0e81fd616dd08eaf extends \Twig\Template
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
        echo "<section class=\"smartblog_block clearfix\">
\t<h3 class=\"home-title\">";
        // line 2
        echo ($context["heading"] ?? null);
        echo "</h3>
\t<div id=\"smartblog-carousel\" class=\"owl-carousel\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            echo "\t\t\t
\t\t\t<div class=\"blog_post item\">
\t\t\t\t<div class=\"news_module_image_holder\">
\t\t\t\t\t";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 7)) {
                echo " 
\t\t\t\t\t<a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 8);
                echo "\">
\t\t\t\t\t\t<img src=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 9);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t<div class=\"blog-hover\"></div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"blogicons icon readmore_link\" title=\"Click to view Read More \" href=\"";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 12);
                echo "\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t";
            }
            // line 14
            echo "\t\t\t\t\t<div class=\"date-comment\">\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"date-time\"> 
\t\t\t\t\t\t\t<i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<span class=\"day_date\">";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 17);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"write-comment\">
\t\t\t\t\t\t\t<i class=\"fa fa-comment\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t\t<a href=\"";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 21);
            echo "\"> ";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "total_comments", [], "any", false, false, false, 21);
            echo " ";
            echo ($context["entry_comment"] ?? null);
            echo "</a> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"blog_content\">
\t\t\t\t\t<h4 class=\"blog_title\"><a href=\"";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 26);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 26);
            echo "</a></h4>
\t\t\t\t\t<div class=\"blog-desc\"> ";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 27);
            echo " </div>
\t\t\t\t\t<div class=\"view-blog\">
\t\t\t\t\t\t<div class=\"read-more\"><a href=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 29);
            echo "\">";
            echo ($context["text_read_more"] ?? null);
            echo "</a></div> <i class=\"fa fa-long-arrow-right\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t</div>
\t<script type=\"text/javascript\">
\t\t\$('.smartblog_block .owl-carousel').owlCarousel({
\t\t\tloop:false,
\t\t\tnav:";
        // line 38
        echo ($context["navigation"] ?? null);
        echo ",
\t\t\tdots:false,
\t\t\trewind:true,
\t\t\tmargin: 30,
\t\t\trtl: \$('html').attr('dir') == 'rtl'? true : false,
\t\t\tnavText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
\t\t\tautoplay:false, 
\t\t\tresponsive:{
\t\t\t\t0:{
                \titems:1
\t\t\t\t},
\t\t\t\t544:{
\t\t\t\t\titems:2
\t\t\t\t},
\t\t\t\t768:{
\t\t\t\t\titems:2
\t\t\t\t},
\t\t\t\t992:{
\t\t\t\t\titems:3
\t\t\t\t},
\t\t\t\t1200:{
\t\t\t\t\titems:4
\t\t\t\t}
\t\t\t}
\t\t});
\t</script>
</section>";
    }

    public function getTemplateName()
    {
        return "dreamauto/template/extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 38,  124 => 34,  111 => 29,  106 => 27,  100 => 26,  88 => 21,  81 => 17,  76 => 14,  71 => 12,  61 => 9,  57 => 8,  53 => 7,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dreamauto/template/extension/module/blogger.twig", "");
    }
}
