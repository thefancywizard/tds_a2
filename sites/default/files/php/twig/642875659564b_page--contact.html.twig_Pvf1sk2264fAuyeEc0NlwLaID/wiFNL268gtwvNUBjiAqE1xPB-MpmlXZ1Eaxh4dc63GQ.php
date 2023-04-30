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

/* themes/xtrax/templates/page/page--contact.html.twig */
class __TwigTemplate_e5a853988f41e40f01773874f6d1e901 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@xtrax/header/header-1.html.twig", "themes/xtrax/templates/page/page--contact.html.twig", 1)->display($context);
        // line 2
        echo "<!--Page Header-->
<section id=\"main-banner-page\" style=\"background-image: url(";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_background_image"] ?? null), 3, $this->source), "html", null, true);
        echo ")\" class=\"position-relative page-header contact-header section-nav-smooth parallax\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 offset-lg-3\">
        <div class=\"page-titles whitecolor text-center padding\">
          
        </div>
      </div>
    </div>
    ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
  </div>
</section>
<!--Page Header ends -->
<!-- Contact US -->
<section id=\"stayconnect1\" class=\"purple-gradient-bg-long position-relative padding noshadow\">
  <div class=\"container noble\">
    ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
    <div class=\"widget py-5\">
      <div class=\"row\">
        <div class=\"col-md-12 text-center wow fadeIn mt-n3\" data-wow-delay=\"300ms\">
          
          <div class=\"col-md-8 offset-md-2 bottom35\">
            <p style=\"color:#fff\">";
        // line 25
        ((($context["contact_description"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["contact_description"] ?? null), "html", null, true))) : (print ("")));
        echo "</p>
          </div>
        </div>
        <div class=\"col-md-12 text-center\">
          <div class=\"contact-meta px-2 text-center text-md-left\">
            ";
        // line 30
        echo ((($context["contact_address_info"] ?? null)) ? ($this->sandbox->ensureToStringAllowed(($context["contact_address_info"] ?? null), 30, $this->source)) : (""));
        echo "
          </div>
        </div>
        <div class=\"col-md-6 col-sm-6\">
          <div class=\"heading-title wow fadeInUp\" data-wow-delay=\"300ms\">
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Contact US ends -->
<!-- map -->
";
        // line 47
        $this->loadTemplate("@xtrax/footer/footer-1.html.twig", "themes/xtrax/templates/page/page--contact.html.twig", 47)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/xtrax/templates/page/page--contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 47,  83 => 30,  75 => 25,  66 => 19,  56 => 12,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/xtrax/templates/page/page--contact.html.twig", "/home/deepsea1/public_html/thedungeonsociety/themes/xtrax/templates/page/page--contact.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1);
        static $filters = array("escape" => 3, "raw" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape', 'raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
