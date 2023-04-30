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

/* themes/xtrax/templates/page/page--user--login.html.twig */
class __TwigTemplate_fa1b11cb918f075218b0d7fa39aee11d extends \Twig\Template
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
        $this->loadTemplate("@xtrax/header/header-1.html.twig", "themes/xtrax/templates/page/page--user--login.html.twig", 1)->display($context);
        // line 2
        echo "<section id=\"main-banner-page\" class=\"position-relative page-header about-header parallax section-nav-smooth\" style=\"background-image: url(";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 2, $this->source) . "/images/bg-about-header.jpg"), "html", null, true);
        echo "); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -153.9px;\">
  <div class=\"overlay overlay-dark opacity-6\"></div>
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
<section id=\"sign-in\" class=\"bglight position-relative padding\">
  <div class=\"container\">
    ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
    <div class=\"row\">
      <div class=\"col-lg-6 pr-lg-0 col-md-12 d-none d-lg-flex\">
        <div class=\" image login-image h-100\">
          <img src=\"";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 21, $this->source) . "/images/login-section.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"w-100 h-100\">
        </div>
      </div>
      <div class=\"col-lg-6 pl-lg-0 col-md-12 whitebox\">
        <div class=\"widget logincontainer\">
          <h3 class=\"darkcolor bottom30 text-center text-lg-left\">";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Log In"));
        echo " </h3>
          ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>
</section>
";
        // line 33
        $this->loadTemplate("@xtrax/footer/footer-1.html.twig", "themes/xtrax/templates/page/page--user--login.html.twig", 33)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/xtrax/templates/page/page--user--login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  85 => 27,  81 => 26,  73 => 21,  66 => 17,  58 => 12,  51 => 8,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/xtrax/templates/page/page--user--login.html.twig", "/home/deepsea1/public_html/thedungeonsociety/themes/xtrax/templates/page/page--user--login.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1);
        static $filters = array("escape" => 2, "t" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape', 't'],
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
