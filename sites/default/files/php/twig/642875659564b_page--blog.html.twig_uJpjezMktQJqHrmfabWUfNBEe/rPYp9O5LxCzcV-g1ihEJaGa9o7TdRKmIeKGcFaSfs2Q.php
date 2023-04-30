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

/* themes/xtrax/templates/page/page--blog.html.twig */
class __TwigTemplate_be7507b854bc690c7b2ee441b235157a extends \Twig\Template
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
        $this->loadTemplate("@xtrax/header/header-1.html.twig", "themes/xtrax/templates/page/page--blog.html.twig", 1)->display($context);
        // line 2
        echo "<section id=\"main-banner-page\" class=\"position-relative page-header parallax section-nav-smooth\" style=\"background: url(";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["blog_background_image"] ?? null), 2, $this->source), "html", null, true);
        echo ") no-repeat\">
  <div class=\"overlay overlay-dark opacity-7 z-index-1\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 offset-lg-2\">
        <div class=\"page-titles whitecolor text-center padding_top padding_bottom\">
          ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "inside_header_background", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>
    ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
  </div>
</section>
";
        // line 15
        if ((($context["blog_listing_style"] ?? null) == "layout_2")) {
            // line 16
            echo "  <section id=\"ourblog\" class=\"padding purple-gradient-bg\">
    <div class=\"container\">
      <h2 class=\"d-none\">";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Blog"));
            echo "</h2>
      ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "
      <div class=\"row\">
        <div class=\"col-lg-8\" id=\"blog\">
          ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "
        </div>
        <div class=\"col-lg-4\">
          <aside class=\"sidebar padding-bottom\">
            ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "
          </aside>
        </div>
      </div>
    </div>
  </section>
";
        } else {
            // line 33
            echo "  <section id=\"our-blog\" class=\"bglight padding\">
    <div class=\"container\">
<div>
      ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "
      ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "
</div>
<div class=\"col-lg-4\">
          <aside class=\"sidebar padding-bottom\">
            ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "
          </aside>
        </div>
    </div>
  </section>
";
        }
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_content", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
";
        // line 48
        $this->loadTemplate("@xtrax/footer/footer-1.html.twig", "themes/xtrax/templates/page/page--blog.html.twig", 48)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/xtrax/templates/page/page--blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 48,  122 => 47,  113 => 41,  106 => 37,  102 => 36,  97 => 33,  87 => 26,  80 => 22,  74 => 19,  70 => 18,  66 => 16,  64 => 15,  58 => 12,  51 => 8,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/xtrax/templates/page/page--blog.html.twig", "/home/deepsea1/public_html/thedungeonsociety/themes/xtrax/templates/page/page--blog.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1, "if" => 15);
        static $filters = array("escape" => 2, "t" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
