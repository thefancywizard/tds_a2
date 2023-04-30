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

/* themes/xtrax/templates/page/page--node--page.html.twig */
class __TwigTemplate_8b87106fc6dba7bf330905bfbf3b4b66 extends \Twig\Template
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
        $this->loadTemplate("@xtrax/header/header-1.html.twig", "themes/xtrax/templates/page/page--node--page.html.twig", 1)->display($context);
        // line 2
        $context["content_background_class"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_content_background", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2);
        // line 3
        echo "<section id=\"main-banner-page\" class=\"position-relative page-header about-header parallax section-nav-smooth\" style=\" background-image: url(";
        ((($context["field_bg"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["field_bg"] ?? null), "html", null, true))) : (print ("")));
        echo "); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -153.9px;\">
  <div class=\"overlay overlay-dark opacity-6 z-index-1\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 offset-lg-3\">
        <div class=\"page-titles whitecolor text-center padding_top padding_bottom\">
          ";
        // line 9
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_inside_background", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9)) ? ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_inside_background", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source)) : (""));
        echo "
        </div>
      </div>
    </div>
    ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
  </div>
</section>
<section class=\"";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_padding", [], "any", false, false, true, 16));
        foreach ($context['_seq'] as $context["i"] => $context["item"]) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 16), 16, $this->source)), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ";
        ((($context["content_background_class"] ?? null)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_background_class"] ?? null), "html", null, true))) : (print ("")));
        echo "\">
  <div class=\"container\">
    ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
    ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
  </div>
</section>
";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section_content", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
";
        // line 23
        $this->loadTemplate("@xtrax/footer/footer-1.html.twig", "themes/xtrax/templates/page/page--node--page.html.twig", 23)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/xtrax/templates/page/page--node--page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  90 => 22,  84 => 19,  80 => 18,  66 => 16,  60 => 13,  53 => 9,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/xtrax/templates/page/page--node--page.html.twig", "/home/deepsea1/public_html/thedungeonsociety/themes/xtrax/templates/page/page--node--page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1, "set" => 2, "for" => 16);
        static $filters = array("escape" => 3, "raw" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'set', 'for'],
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
