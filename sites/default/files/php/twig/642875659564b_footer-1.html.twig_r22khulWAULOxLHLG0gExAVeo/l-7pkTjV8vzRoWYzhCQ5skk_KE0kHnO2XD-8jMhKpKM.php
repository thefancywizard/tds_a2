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

/* @xtrax/footer/footer-1.html.twig */
class __TwigTemplate_b9562483c6438b35369ad775308384d6 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "
<footer id=\"site-footer\" class=\"bgdark padding_top\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-3 col-md-6 col-sm-6\">
        ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_1_col_1", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"col-lg-3 col-md-6 col-sm-6\">
        ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_1_col_2", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"col-lg-3 col-md-6 col-sm-6\">
        ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_1_col_3", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"col-lg-3 col-md-6 col-sm-6\">
        ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_1_col_4", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "@xtrax/footer/footer-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  59 => 12,  53 => 9,  47 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@xtrax/footer/footer-1.html.twig", "/home/deepsea1/public_html/thedungeonsociety/themes/xtrax/templates/footer/footer-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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