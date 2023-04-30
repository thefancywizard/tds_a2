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

/* @xtrax/header/header-1.html.twig */
class __TwigTemplate_36472b4d4b27de5dab8021b41732168f extends \Twig\Template
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
        echo "<header class=\"site-header\" id=\"header\">
  <nav class=\"navbar navbar-expand-lg padding-nav static-nav\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\">
        <img src=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 5, $this->source), "html", null, true);
        echo "\" alt=\"logo\">
      </a>
      ";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "
      ";
        // line 8
        if (($context["social_networks"] ?? null)) {
            // line 9
            echo "      <ul class=\"social-icons social-icons-simple d-lg-inline-block d-none animated fadeInUp\" data-wow-delay=\"300ms\">
        ";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["social_networks"] ?? null), 10, $this->source));
            echo "
      </ul>
      ";
        }
        // line 13
        echo "    </div>
    <!--side menu open button-->
    <a href=\"javascript:void(0)\" class=\"d-inline-block sidemenu_btn\" id=\"sidemenu_toggle\">
      <span class=\"gradient-bg\"></span>
      <span class=\"gradient-bg\"></span>
      <span class=\"gradient-bg\"></span>
    </a>
  </nav>

  <!-- side menu -->
  <div class=\"side-menu opacity-0 gradient-bg\">
    <div class=\"overlay\"></div>
    <div class=\"inner-wrapper\">
      <span class=\"btn-close btn-close-no-padding\" id=\"btn_sideNavClose\"><i></i><i></i></span>
      <nav class=\"side-nav w-100\">
        ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "side_menu", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
      </nav>
      <div class=\"side-footer w-100\">
        ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "inside_menu", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </div>
  <div id=\"close_side_menu\" class=\"tooltip\"></div>
  <!-- End side menu -->
</header>
";
    }

    public function getTemplateName()
    {
        return "@xtrax/header/header-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 31,  85 => 28,  68 => 13,  62 => 10,  59 => 9,  57 => 8,  53 => 7,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@xtrax/header/header-1.html.twig", "/home/deepsea1/public_html/thedungeonsociety/themes/xtrax/templates/header/header-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8);
        static $filters = array("escape" => 5, "raw" => 10);
        static $functions = array("path" => 4);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
                ['path']
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
