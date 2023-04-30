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

/* themes/xtrax/templates/page/page--node--blog-post.html.twig */
class __TwigTemplate_b07c6e729411f7a334f789c262934bcc extends \Twig\Template
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
        $this->loadTemplate("@xtrax/header/header-1.html.twig", "themes/xtrax/templates/page/page--node--blog-post.html.twig", 1)->display($context);
        // line 2
        echo "<section id=\"main-banner-page\" class=\"position-relative page-header parallax section-nav-smooth\" style=\"background: url(";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["blog_background_image"] ?? null), 2, $this->source), "html", null, true);
        echo ") no-repeat\">
  <div class=\"overlay overlay-dark opacity-6 z-index-1\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 offset-lg-2\">
        <div class=\"page-titles whitecolor text-center padding_top padding_bottom\">
          
        </div>
      </div>
    </div>
    ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
  </div>
</section>

<section id=\"ourblog\" class=\"purple-gradient-bg padding\">
  <div class=\"container\">
    ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
    <div class=\"row\">
      <div class=\"col-lg-8 col-md-7\">
        ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"col-lg-4 col-md-5\">
        <aside class=\"sidebar whitebox mt-5 mt-md-0\">
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
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_content", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "
";
        // line 33
        $this->loadTemplate("@xtrax/footer/footer-1.html.twig", "themes/xtrax/templates/page/page--node--blog-post.html.twig", 33)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/xtrax/templates/page/page--node--blog-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  87 => 32,  77 => 25,  70 => 21,  64 => 18,  55 => 12,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/xtrax/templates/page/page--node--blog-post.html.twig", "/home/deepsea1/public_html/thedungeonsociety/themes/xtrax/templates/page/page--node--blog-post.html.twig");
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
