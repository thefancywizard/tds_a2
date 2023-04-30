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

/* @xtrax/homepage/header/header-1.html.twig */
class __TwigTemplate_fb673c20661abca4c1cec6baed62d8fa extends \Twig\Template
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
  <nav class=\"navbar navbar-expand-lg transparent-bg static-nav\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        echo "\">
        <img src=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo_transparent"] ?? null), 5, $this->source), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-default\">
        <img src=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 6, $this->source), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-scrolled\">
      </a>
      ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "
    </div>
    <!--side menu open button-->
    <a href=\"javascript:void(0)\" class=\"d-inline-block sidemenu_btn\" id=\"sidemenu_toggle\">
      <span></span> <span></span> <span></span>
    </a>
  </nav>
  <!-- side menu -->
  <div class=\"side-menu opacity-0 gradient-bg\">
    <div class=\"overlay\"></div>
    <div class=\"inner-wrapper\">
      <span class=\"btn-close btn-close-no-padding\" id=\"btn_sideNavClose\"><i></i><i></i></span>
      <nav class=\"side-nav w-100\">
        ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "side_menu", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
      </nav>
      <div class=\"side-footer w-100\">
        ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "inside_menu", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
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
        return "@xtrax/homepage/header/header-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  73 => 21,  57 => 8,  52 => 6,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@xtrax/homepage/header/header-1.html.twig", "/home/deepsea1/public_html/thedungeonsociety/themes/xtrax/templates/homepage/header/header-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
        static $functions = array("path" => 4);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
