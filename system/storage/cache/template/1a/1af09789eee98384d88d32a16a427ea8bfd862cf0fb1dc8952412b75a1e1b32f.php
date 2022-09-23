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

/* freshmart/template/extension/module/newslettersubscribe.twig */
class __TwigTemplate_3933399ef5745ddfee6c3603110d2dc94b1428850faf0c2fbb0b841163c44b26 extends \Twig\Template
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
        echo "<div class=\"block_newsletter col-lg-4 col-md-4 col-sm-12 col-xs-12\">
\t<div id=\"boxes\" class=\"newletter-container\">
\t\t<div style=\"\" id=\"dialog\" class=\"window\">
\t\t\t<div class=\"box\">
\t\t\t\t<div id=\"newsletter-container\" class=\"box-content\">
\t\t\t\t\t<div class=\"newsletter_text\">
\t\t\t\t\t\t<div class=\"newsletter-content\">
\t\t\t\t\t\t\t<div class=\"newsletter-img\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t<symbol id=\"Layer_1\" viewBox=\"120 140 280 280\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M501.801,139.942H171.312c-5.633,0-10.199,4.566-10.199,10.199v19.235h-97.21c-5.633,0-10.199,4.566-10.199,10.199
\t\t\t\t\t\tc0,5.633,4.566,10.199,10.199,10.199h97.21v132.452h-58.101c-5.633,0-10.199,4.566-10.199,10.199s4.566,10.199,10.199,10.199
\t\t\t\t\t\th58.101v19.235c0,5.633,4.566,10.199,10.199,10.199h330.489c5.633,0,10.199-4.566,10.199-10.199V150.141
\t\t\t\t\t\tC512,144.508,507.434,139.942,501.801,139.942z M476.641,160.34l-140.07,114.985L197.14,160.34H476.641z M491.602,351.661h-310.09
\t\t\t\t\t\tv-177.77l148.556,122.51c1.884,1.553,4.186,2.331,6.489,2.331c2.295,0,4.591-0.772,6.471-2.316L491.602,174.45V351.661z\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M119.673,244.768H10.199C4.566,244.768,0,249.334,0,254.967c0,5.633,4.566,10.199,10.199,10.199h109.474
\t\t\t\t\t\tc5.633,0,10.199-4.566,10.199-10.199C129.873,249.334,125.306,244.768,119.673,244.768z\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M69.355,322.227h-5.451c-5.633,0-10.199,4.566-10.199,10.199c0,5.633,4.566,10.199,10.199,10.199h5.451
\t\t\t\t\t\tc5.633,0,10.199-4.566,10.199-10.199C79.554,326.793,74.988,322.227,69.355,322.227z\"/>\t
\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 40 22\"><use xlink:href=\"#Layer_1\" x=\"0%\" y=\"0%\"></use></svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h2 class=\"title_block\">";
        // line 24
        echo ($context["title"] ?? null);
        echo "</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"newsletter\">
\t\t\t\t\t\t<div id=\"frm_subscribe\" class=\"newsletter_form\">
\t\t\t\t\t\t\t<form name=\"subscribe\" id=\"subscribe\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"text-email\" placeholder=\"";
        // line 30
        echo ($context["entry_email"] ?? null);
        echo "\" value=\"\" name=\"subscribe_email\" id=\"subscribe_email\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"text-email\" placeholder=\"";
        // line 31
        echo ($context["entry_email"] ?? null);
        echo "\" value=\"\" name=\"subscribe_name\" id=\"subscribe_name\" />
\t\t\t\t\t\t\t\t<a class=\"button btn-submit\" onclick=\"email_subscribe()\"><span>";
        // line 32
        echo ($context["entry_button"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div id=\"notification-normal\"></div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t</div>
\t<script type=\"text/javascript\">
\t\tfunction email_subscribe(){
\t\t\t\$.ajax({
\t\t\t\t\ttype: 'post',
\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/subscribe',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tdata:\$(\"#subscribe\").serialize(),
\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\ttry {
\t\t\t\t\t
\t\t\t\t\t\teval(html);
\t\t\t\t\t
\t\t\t\t\t} catch (e) {
\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t}});\t
\t\t}
\t\tfunction email_unsubscribe(){
\t\t\t\$.ajax({
\t\t\t\t\ttype: 'post',
\t\t\t\t\turl: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tdata:\$(\"#subscribe\").serialize(),
\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\teval(html);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t} catch (e) {
\t\t\t\t\t\t\t}
\t\t\t\t\t}}); 
\t\t\t\$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
\t\t}
\t</script>
\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t\$('#subscribe_email').keypress(function(e) {
\t\t\t\tif(e.which == 13) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\temail_subscribe();
\t\t\t\t}
\t\t\t\tvar name= \$(this).val();
\t\t\t\t\$('#subscribe_name').val(name);
\t\t\t});
\t\t\t\$('#subscribe_email').change(function() {
\t\t\tvar name= \$(this).val();
\t\t\t\t\t\$('#subscribe_name').val(name);
\t\t\t});
\t\t
\t\t});
\t</script>
</div>";
    }

    public function getTemplateName()
    {
        return "freshmart/template/extension/module/newslettersubscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 32,  75 => 31,  71 => 30,  62 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshmart/template/extension/module/newslettersubscribe.twig", "");
    }
}
