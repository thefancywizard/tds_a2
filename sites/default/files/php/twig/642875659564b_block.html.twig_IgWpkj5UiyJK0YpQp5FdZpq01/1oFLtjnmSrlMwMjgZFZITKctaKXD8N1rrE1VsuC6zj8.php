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

/* themes/xtrax/templates/block/block.html.twig */
class __TwigTemplate_e6108c88d3052329b53a8e798a6cbc80 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        if ((($context["region"] ?? null) == "content")) {
            // line 29
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 29, $this->source), "html", null, true);
            echo "
";
        } elseif ((        // line 30
($context["region"] ?? null) == "sidebar")) {
            // line 31
            echo "  ";
            $context["classes"] = [0 => "shadow ", 1 => "widget", 2 => "heading_space", 3 => "wow", 4 => "fadeIn", 5 => "text-center", 6 => "text-md-left"];
            // line 40
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            echo " data-wow-delay=\"300ms\">
    ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 41, $this->source), "html", null, true);
            echo "
    ";
            // line 42
            if (($context["label"] ?? null)) {
                // line 43
                echo "      <h4 class=\"text-capitalize darkcolor bottom20\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 43, $this->source), "html", null, true);
                echo "</h4>
    ";
            }
            // line 45
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 45, $this->source), "html", null, true);
            echo "
    ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 46, $this->source), "html", null, true);
            echo "
  </div>
";
        } elseif (((((        // line 48
($context["region"] ?? null) == "footer_1_col_1") || (($context["region"] ?? null) == "footer_1_col_2")) || (($context["region"] ?? null) == "footer_1_col_3")) || (($context["region"] ?? null) == "footer_1_col_4"))) {
            // line 49
            echo "  ";
            $context["classes"] = [0 => "footer_panel ", 1 => "padding_bottom_half", 2 => "bottom20"];
            // line 54
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
            echo ">
    ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 55, $this->source), "html", null, true);
            echo "
    ";
            // line 56
            if (($context["label"] ?? null)) {
                // line 57
                echo "      <h3 class=\"whitecolor bottom25\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 57, $this->source), "html", null, true);
                echo "</h3>
    ";
            }
            // line 59
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 59, $this->source), "html", null, true);
            echo "
    ";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 60, $this->source), "html", null, true);
            echo "
  </div>
";
        } elseif ((        // line 62
($context["region"] ?? null) == "footer_top")) {
            // line 63
            echo "  ";
            $context["classes"] = [0 => "bglight", 1 => "position-relative"];
            // line 67
            echo "  <section";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 67), 67, $this->source), "html", null, true);
            echo ">
    ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 68, $this->source), "html", null, true);
            echo "
    ";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 69, $this->source), "html", null, true);
            echo "
    <div class=\"container\">
      <div class=\"contactus-wrapp shadow-equal\">
        <div class=\"row\">
          ";
            // line 73
            if (($context["label"] ?? null)) {
                // line 74
                echo "            <div class=\"col-md-12 col-sm-12\">
              <div class=\"heading-title wow fadeInUp text-center text-md-left\" data-wow-delay=\"300ms\">
                <h3 class=\"darkcolor bottom20\">";
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 76, $this->source), "html", null, true);
                echo "</h3>
              </div>
            </div>
          ";
            }
            // line 80
            echo "          <div class=\"col-md-12 col-sm-12\">
            ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 81, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  </section>
";
        } elseif ((        // line 87
($context["region"] ?? null) == "section_content")) {
            // line 88
            echo "  ";
            $context["classes"] = [0 => "_section_content_class"];
            // line 91
            echo "  ";
            if ((((($__internal_compile_0 = ($context["elements"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#plugin_id"] ?? null) : null) == "views_block:_xtrax_section_content-section_testimonial_3") || ((($__internal_compile_1 = ($context["elements"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#plugin_id"] ?? null) : null) == "views_block:_xtrax_section_content-section_testimonial_4"))) {
                // line 92
                echo "    <section";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 92), 92, $this->source), "html", null, true);
                echo ">
      ";
                // line 93
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 93, $this->source), "html", null, true);
                echo "
      ";
                // line 94
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 94, $this->source), "html", null, true);
                echo "
      ";
                // line 95
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 95, $this->source), "html", null, true);
                echo "
    </section>
  ";
            } else {
                // line 98
                echo "    <section";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 98), 98, $this->source), "html", null, true);
                echo ">
      ";
                // line 99
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 99, $this->source), "html", null, true);
                echo "
      ";
                // line 100
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 100, $this->source), "html", null, true);
                echo "
      <div class=\"container\">
        ";
                // line 102
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 102, $this->source), "html", null, true);
                echo "
      </div>
    </section>
  ";
            }
        } elseif ((        // line 106
($context["region"] ?? null) == "slider")) {
            // line 107
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 107, $this->source), "html", null, true);
            echo ">
    ";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 108, $this->source), "html", null, true);
            echo "
    ";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 109, $this->source), "html", null, true);
            echo "
    ";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 110, $this->source), "html", null, true);
            echo "
  </div>
";
        } else {
            // line 113
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 113, $this->source), "html", null, true);
            echo ">
    ";
            // line 114
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 114, $this->source), "html", null, true);
            echo "
    ";
            // line 115
            if (($context["label"] ?? null)) {
                // line 116
                echo "      <h2";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 116, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 116, $this->source), "html", null, true);
                echo "</h2>
    ";
            }
            // line 118
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 118, $this->source), "html", null, true);
            echo "
    ";
            // line 119
            $this->displayBlock('content', $context, $blocks);
            // line 122
            echo "  </div>
";
        }
    }

    // line 119
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 120, $this->source), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/xtrax/templates/block/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 120,  258 => 119,  252 => 122,  250 => 119,  245 => 118,  237 => 116,  235 => 115,  231 => 114,  226 => 113,  220 => 110,  216 => 109,  212 => 108,  207 => 107,  205 => 106,  198 => 102,  193 => 100,  189 => 99,  184 => 98,  178 => 95,  174 => 94,  170 => 93,  165 => 92,  162 => 91,  159 => 88,  157 => 87,  148 => 81,  145 => 80,  138 => 76,  134 => 74,  132 => 73,  125 => 69,  121 => 68,  116 => 67,  113 => 63,  111 => 62,  106 => 60,  101 => 59,  95 => 57,  93 => 56,  89 => 55,  84 => 54,  81 => 49,  79 => 48,  74 => 46,  69 => 45,  63 => 43,  61 => 42,  57 => 41,  52 => 40,  49 => 31,  47 => 30,  42 => 29,  40 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/xtrax/templates/block/block.html.twig", "/home/deepsea1/public_html/thedungeonsociety/themes/xtrax/templates/block/block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 28, "set" => 31, "block" => 119);
        static $filters = array("escape" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
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
