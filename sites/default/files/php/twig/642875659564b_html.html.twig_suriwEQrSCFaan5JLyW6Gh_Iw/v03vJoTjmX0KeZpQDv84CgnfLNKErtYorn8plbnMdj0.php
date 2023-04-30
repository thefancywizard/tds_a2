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

/* themes/xtrax/templates/html.html.twig */
class __TwigTemplate_381689cebad8089e3eefe9fa642ef1e2 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 2, $this->source), "html", null, true);
        echo ">
<head>
  <title>";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 4, $this->source), " | "));
        echo "</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <head-placeholder token=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 6, $this->source));
        echo "\">
  <css-placeholder token=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 7, $this->source));
        echo "\">
  <js-placeholder token=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 8, $this->source));
        echo "\">
  ";
        // line 9
        if (($context["general_setting_tracking_code"] ?? null)) {
            // line 10
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(($context["general_setting_tracking_code"] ?? null), 10, $this->source)));
            echo "
  ";
        }
        // line 12
        echo "  ";
        if (($context["custom_css"] ?? null)) {
            // line 13
            echo "    <style type=\"text/css\" media=\"all\">
      ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(($context["custom_css"] ?? null), 14, $this->source)));
            echo "
    </style>
  ";
        }
        // line 17
        echo "</head>
";
        // line 18
        if ((($context["field_home_style"] ?? null) == "gray")) {
            // line 19
            echo "<body";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "gray-body"], "method", false, false, true, 19), 19, $this->source), "html", null, true);
            echo ">
";
        } elseif ((        // line 20
($context["field_home_style"] ?? null) == "grey")) {
            // line 21
            echo "<body";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "gray"], "method", false, false, true, 21), 21, $this->source), "html", null, true);
            echo ">
";
        } else {
            // line 24
            $context["body_classes"] = [0 => (( !            // line 25
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 25, $this->source)))))];
            // line 28
            echo "<body";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 28), 28, $this->source), "html", null, true);
            echo ">
";
        }
        // line 30
        echo "<!--PreLoader-->
<div class=\"loader\">
  <div class=\"loader-inner\">
    <div class=\"cssload-loader\"></div>
  </div>
</div>
<!--PreLoader Ends-->
<a href=\"#main-content\" class=\"visually-hidden focusable\">
  ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
</a>
";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 40, $this->source), "html", null, true);
        echo "
";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 41, $this->source), "html", null, true);
        echo "
";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 42, $this->source), "html", null, true);
        echo "
<js-bottom-placeholder token=\"";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 43, $this->source));
        echo "\">
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/xtrax/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 43,  134 => 42,  130 => 41,  126 => 40,  121 => 38,  111 => 30,  105 => 28,  103 => 25,  102 => 24,  96 => 21,  94 => 20,  89 => 19,  87 => 18,  84 => 17,  78 => 14,  75 => 13,  72 => 12,  66 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  47 => 4,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/xtrax/templates/html.html.twig", "/home/deepsea1/public_html/thedungeonsociety/themes/xtrax/templates/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9, "set" => 24);
        static $filters = array("escape" => 2, "safe_join" => 4, "raw" => 6, "t" => 10, "clean_class" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'safe_join', 'raw', 't', 'clean_class'],
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
