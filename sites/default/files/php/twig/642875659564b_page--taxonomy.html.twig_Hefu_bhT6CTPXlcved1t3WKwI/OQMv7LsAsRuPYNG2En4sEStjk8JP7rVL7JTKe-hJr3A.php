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

/* themes/xtrax/templates/page/page--taxonomy.html.twig */
class __TwigTemplate_d12a2bc7af3cd80aa6c0f3981219a743 extends \Twig\Template
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
        $this->loadTemplate("@xtrax/header/header-1.html.twig", "themes/xtrax/templates/page/page--taxonomy.html.twig", 1)->display($context);
        // line 2
        if (((($context["v_name"] ?? null) == "tags") || (($context["v_name"] ?? null) == "blog_categories"))) {
            // line 3
            echo "<section id=\"main-banner-page\" class=\"position-relative page-header parallax section-nav-smooth\" style=\"background: url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["blog_background_image"] ?? null), 3, $this->source), "html", null, true);
            echo ") no-repeat\">
  <div class=\"overlay overlay-dark opacity-7 z-index-1\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 offset-lg-2\">
        <div class=\"page-titles whitecolor text-center padding_top padding_bottom\">
          <h2 class=\"font-xlight\">";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_title"] ?? null), 9, $this->source), "html", null, true);
            echo "</h2>
        </div>
      </div>
    </div>
    ";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "
  </div>
</section>
<section id=\"ourblog\" class=\"padding\">
  <div class=\"container\">
    ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
    <div class=\"row\">
      <div class=\"col-lg-8\" id=\"blog\">
        ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "
      </div>
      <div class=\"col-lg-4\">
        <aside class=\"sidebar padding-bottom\">
          ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    </div>
  </div>
</section>
";
        } else {
            // line 32
            echo "  <section id=\"main-banner-page\" class=\"position-relative page-header about-header parallax section-nav-smooth\" style=\"background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -153.9px;\">
    <div class=\"overlay overlay-dark opacity-7\"></div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 offset-lg-3\">
          <div class=\"page-titles whitecolor text-center padding_top padding_bottom\">
            <h2 class=\"font-xlight\">";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_title"] ?? null), 38, $this->source), "html", null, true);
            echo "</h2>
          </div>
        </div>
      </div>
      ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "
    </div>
  </section>
  <section class=\"padding_top padding_bottom\">
    <div class=\"container\">
      ";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "
      ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "
    </div>
  </section>
";
        }
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_content", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
";
        // line 53
        $this->loadTemplate("@xtrax/footer/footer-1.html.twig", "themes/xtrax/templates/page/page--taxonomy.html.twig", 53)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/xtrax/templates/page/page--taxonomy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 53,  125 => 52,  118 => 48,  114 => 47,  106 => 42,  99 => 38,  91 => 32,  81 => 25,  74 => 21,  68 => 18,  60 => 13,  53 => 9,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/xtrax/templates/page/page--taxonomy.html.twig", "/home/deepsea1/public_html/thedungeonsociety/themes/xtrax/templates/page/page--taxonomy.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1, "if" => 2);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
