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

/* themes/xtrax/templates/page/page--cart.html.twig */
class __TwigTemplate_60f47235e8f648ee646b82b1bf5bb0e5 extends \Twig\Template
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
        $this->loadTemplate("@xtrax/header/header-1.html.twig", "themes/xtrax/templates/page/page--cart.html.twig", 1)->display($context);
        // line 2
        echo "<section id=\"main-banner-page\" class=\"position-relative page-header about-header parallax section-nav-smooth\" style=\"background-image: url(";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 2, $this->source) . "/images/bg-cart-header.jpg"), "html", null, true);
        echo "); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -153.9px;\">
  <div class=\"overlay overlay-dark opacity-7\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 offset-lg-3\">
        <div class=\"page-titles whitecolor text-center padding_top padding_bottom\">
          <h2 class=\"font-xlight\">";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_title"] ?? null), 8, $this->source), "html", null, true);
        echo "</h2>
        </div>
      </div>
    </div>
    ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
  </div>
</section>
<section class=\"padding_top padding_bottom page-cart-rv\">
  <div class=\"container\">
    ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
    ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
  </div>
</section>
";
        // line 21
        $this->loadTemplate("@xtrax/footer/footer-1.html.twig", "themes/xtrax/templates/page/page--cart.html.twig", 21)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/xtrax/templates/page/page--cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  70 => 18,  66 => 17,  58 => 12,  51 => 8,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/xtrax/templates/page/page--cart.html.twig", "/home/deepsea1/public_html/thedungeonsociety/themes/xtrax/templates/page/page--cart.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1);
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
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
