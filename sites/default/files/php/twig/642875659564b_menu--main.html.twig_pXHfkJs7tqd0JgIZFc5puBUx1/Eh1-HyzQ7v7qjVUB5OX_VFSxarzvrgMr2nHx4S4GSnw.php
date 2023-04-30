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

/* themes/xtrax/templates/menu/menu--main.html.twig */
class __TwigTemplate_667e3cc291c7845308c7808ca3cfc8a6 extends \Twig\Template
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
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["field_home_style"] ?? null)], 29, $context, $this->getSourceContext()));
        echo "
";
        // line 30
        $context["field_home_style"] = ($context["field_home_style"] ?? null);
    }

    // line 31
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__field_home_style__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "field_home_style" => $__field_home_style__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            echo "  ";
            if (((($context["field_home_style"] ?? null) == "center-logo") || (($context["field_home_style"] ?? null) == "innovative-classic"))) {
                // line 33
                echo "
    ";
                // line 34
                $context["count_item"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 34, $this->source));
                // line 35
                echo "    ";
                if ((($context["count_item"] ?? null) > 1)) {
                    // line 36
                    echo "      ";
                    $context["col1"] = twig_round((($context["count_item"] ?? null) / 2), 0, "common");
                    // line 37
                    echo "      <ul class=\"navbar-nav mr-auto\">
        ";
                    // line 38
                    $context["j"] = 0;
                    // line 39
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 40
                        echo "          ";
                        if ((($context["j"] ?? null) < ($context["col1"] ?? null))) {
                            // line 41
                            echo "            ";
                            $context["classes"] = [0 => "nav-item", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                             // line 43
$context["item"], "attributes", [], "any", false, false, true, 43), "hasClass", [0 => "mega-menu"], "method", false, false, true, 43)) ? ("dropdown") : ("")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                             // line 44
$context["item"], "attributes", [], "any", false, false, true, 44), "hasClass", [0 => "mega-menu"], "method", false, false, true, 44)) ? ("static") : (""))];
                            // line 47
                            echo "            ";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 47), "hasClass", [0 => "mega-menu"], "method", false, false, true, 47)) {
                                // line 48
                                echo "              <li";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
                                echo ">
                <a class=\"nav-link dropdown-toggle ";
                                // line 49
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 49)) ? ("active") : ("")));
                                echo "\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                                echo " </a>
                ";
                                // line 50
                                if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 50) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 50))) {
                                    // line 51
                                    echo "                  <ul class=\"dropdown-menu megamenu\">
                    <li>
                      <div class=\"container\">
                        <div class=\"row\">
                          ";
                                    // line 55
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 55));
                                    foreach ($context['_seq'] as $context["_key"] => $context["item1"]) {
                                        // line 56
                                        echo "                            <div class=\"col-lg-3 col-md-6 col-sm-12\">
                              <h5 class=\"dropdown-title bottom10\"> ";
                                        // line 57
                                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item1"], "title", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                                        echo " </h5>
                              ";
                                        // line 58
                                        if ((twig_get_attribute($this->env, $this->source, $context["item1"], "below", [], "any", false, false, true, 58) && twig_get_attribute($this->env, $this->source, $context["item1"], "is_expanded", [], "any", false, false, true, 58))) {
                                            // line 59
                                            echo "                                ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item1"], "below", [], "any", false, false, true, 59));
                                            foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
                                                // line 60
                                                echo "                                  <a class=\"dropdown-item\" href=\"";
                                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item2"], "url", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                                                echo "\">";
                                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item2"], "title", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                                                echo "</a>
                                ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 62
                                            echo "                              ";
                                        }
                                        // line 63
                                        echo "                            </div>
                          ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 65
                                    echo "                        </div>
                      </div>
                    </li>
                  </ul>
                ";
                                }
                                // line 70
                                echo "              </li>
            ";
                            } else {
                                // line 72
                                echo "              <li class=\"nav-item dropdown position-relative\">
                ";
                                // line 73
                                if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 73) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 73))) {
                                    // line 74
                                    echo "                  <a class=\"nav-link dropdown-toggle ";
                                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 74)) ? ("active") : ("")));
                                    echo "\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
                                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                                    echo " </a>
                  <div class=\"dropdown-menu\">
                    ";
                                    // line 76
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 76));
                                    foreach ($context['_seq'] as $context["_key"] => $context["item1"]) {
                                        // line 77
                                        echo "                      <a class=\"dropdown-item\" href=\"";
                                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item1"], "url", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                                        echo "\">";
                                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item1"], "title", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                                        echo "</a>
                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 79
                                    echo "                  </div>
                ";
                                } else {
                                    // line 81
                                    echo "                  <a class=\"nav-link ";
                                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 81)) ? ("active") : ("")));
                                    echo "\" href=\"";
                                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                                    echo "\"> ";
                                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                                    echo " </a>
                ";
                                }
                                // line 83
                                echo "              </li>
            ";
                            }
                            // line 85
                            echo "          ";
                        }
                        // line 86
                        echo "          ";
                        $context["j"] = (($context["j"] ?? null) + 1);
                        // line 87
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "      </ul>
      ";
                    // line 89
                    $context["col2"] = ($context["count_item"] ?? null);
                    // line 90
                    echo "      <ul class=\"navbar-nav ml-auto\">
        ";
                    // line 91
                    $context["i"] = 0;
                    // line 92
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 93
                        echo "          ";
                        if ((((($context["i"] ?? null) > ($context["col1"] ?? null)) || (($context["i"] ?? null) == ($context["col1"] ?? null))) && (($context["i"] ?? null) < ($context["col2"] ?? null)))) {
                            // line 94
                            echo "            ";
                            $context["classes"] = [0 => "nav-item", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                             // line 96
$context["item"], "attributes", [], "any", false, false, true, 96), "hasClass", [0 => "mega-menu"], "method", false, false, true, 96)) ? ("dropdown") : ("")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                             // line 97
$context["item"], "attributes", [], "any", false, false, true, 97), "hasClass", [0 => "mega-menu"], "method", false, false, true, 97)) ? ("static") : (""))];
                            // line 100
                            echo "            ";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 100), "hasClass", [0 => "mega-menu"], "method", false, false, true, 100)) {
                                // line 101
                                echo "              <li";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 101), 101, $this->source), "html", null, true);
                                echo ">
                <a class=\"nav-link dropdown-toggle ";
                                // line 102
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 102)) ? ("active") : ("")));
                                echo "\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                                echo " </a>
                ";
                                // line 103
                                if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 103) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 103))) {
                                    // line 104
                                    echo "                  <ul class=\"dropdown-menu megamenu\">
                    <li>
                      <div class=\"container\">
                        <div class=\"row\">
                          ";
                                    // line 108
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 108));
                                    foreach ($context['_seq'] as $context["_key"] => $context["item1"]) {
                                        // line 109
                                        echo "                            <div class=\"col-lg-3 col-md-6 col-sm-12\">
                              <h5 class=\"dropdown-title bottom10\"> ";
                                        // line 110
                                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item1"], "title", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                                        echo " </h5>
                              ";
                                        // line 111
                                        if ((twig_get_attribute($this->env, $this->source, $context["item1"], "below", [], "any", false, false, true, 111) && twig_get_attribute($this->env, $this->source, $context["item1"], "is_expanded", [], "any", false, false, true, 111))) {
                                            // line 112
                                            echo "                                ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item1"], "below", [], "any", false, false, true, 112));
                                            foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
                                                // line 113
                                                echo "                                  <a class=\"dropdown-item\" href=\"";
                                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item2"], "url", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                                                echo "\">";
                                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item2"], "title", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
                                                echo "</a>
                                ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 115
                                            echo "                              ";
                                        }
                                        // line 116
                                        echo "                            </div>
                          ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 118
                                    echo "                        </div>
                      </div>
                    </li>
                  </ul>
                ";
                                }
                                // line 123
                                echo "              </li>
            ";
                            } else {
                                // line 125
                                echo "              <li class=\"nav-item dropdown position-relative\">
                ";
                                // line 126
                                if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 126) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 126))) {
                                    // line 127
                                    echo "                  <a class=\"nav-link dropdown-toggle ";
                                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 127)) ? ("active") : ("")));
                                    echo "\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
                                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                                    echo " </a>
                  <div class=\"dropdown-menu\">
                    ";
                                    // line 129
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 129));
                                    foreach ($context['_seq'] as $context["_key"] => $context["item1"]) {
                                        // line 130
                                        echo "                      <a class=\"dropdown-item\" href=\"";
                                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item1"], "url", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                                        echo "\">";
                                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item1"], "title", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                                        echo "</a>
                    ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item1'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 132
                                    echo "                  </div>
                ";
                                } else {
                                    // line 134
                                    echo "                  <a class=\"nav-link ";
                                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 134)) ? ("active") : ("")));
                                    echo "\" href=\"";
                                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
                                    echo "\"> ";
                                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
                                    echo " </a>
                ";
                                }
                                // line 136
                                echo "              </li>
            ";
                            }
                            // line 138
                            echo "          ";
                        }
                        // line 139
                        echo "          ";
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 140
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo "      </ul>
    ";
                }
                // line 143
                echo "  ";
            } elseif ((($context["field_home_style"] ?? null) == "gray")) {
                // line 144
                echo "    <ul class=\"navbar-nav ml-auto\">
      ";
                // line 145
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 146
                    echo "        ";
                    $context["classes"] = [0 => "nav-item", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 148
$context["item"], "attributes", [], "any", false, false, true, 148), "hasClass", [0 => "mega-menu"], "method", false, false, true, 148)) ? ("dropdown") : ("")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 149
$context["item"], "attributes", [], "any", false, false, true, 149), "hasClass", [0 => "mega-menu"], "method", false, false, true, 149)) ? ("static") : (""))];
                    // line 152
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 152), "hasClass", [0 => "mega-menu"], "method", false, false, true, 152)) {
                        // line 153
                        echo "          <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 153), 153, $this->source), "html", null, true);
                        echo ">
            <a class=\"nav-link dropdown-toggle ";
                        // line 154
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 154)) ? ("active") : ("")));
                        echo "\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
                        echo " </a>
            ";
                        // line 155
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 155) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 155))) {
                            // line 156
                            echo "              <ul class=\"dropdown-menu megamenu\">
                <li>
                  <div class=\"container\">
                    <div class=\"row\">
                      ";
                            // line 160
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 160));
                            foreach ($context['_seq'] as $context["_key"] => $context["item1"]) {
                                // line 161
                                echo "                        <div class=\"col-lg-3 col-md-6 col-sm-12\">
                          <h5 class=\"dropdown-title bottom10\"> ";
                                // line 162
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item1"], "title", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
                                echo " </h5>
                          ";
                                // line 163
                                if ((twig_get_attribute($this->env, $this->source, $context["item1"], "below", [], "any", false, false, true, 163) && twig_get_attribute($this->env, $this->source, $context["item1"], "is_expanded", [], "any", false, false, true, 163))) {
                                    // line 164
                                    echo "                            ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item1"], "below", [], "any", false, false, true, 164));
                                    foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
                                        // line 165
                                        echo "                              <a class=\"dropdown-item\" href=\"";
                                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item2"], "url", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
                                        echo "\">";
                                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item2"], "title", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
                                        echo "</a>
                            ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 167
                                    echo "                          ";
                                }
                                // line 168
                                echo "                        </div>
                      ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 170
                            echo "                    </div>
                  </div>
                </li>
              </ul>
            ";
                        }
                        // line 175
                        echo "          </li>
        ";
                    } else {
                        // line 177
                        echo "          <li class=\"nav-item dropdown position-relative\">
            ";
                        // line 178
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 178) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 178))) {
                            // line 179
                            echo "              <a class=\"nav-link dropdown-toggle ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 179)) ? ("active") : ("")));
                            echo "\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
                            echo " </a>
              <div class=\"dropdown-menu\">
                ";
                            // line 181
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 181));
                            foreach ($context['_seq'] as $context["_key"] => $context["item1"]) {
                                // line 182
                                echo "                  <a class=\"dropdown-item\" href=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item1"], "url", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
                                echo "\">";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item1"], "title", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
                                echo "</a>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 184
                            echo "              </div>
            ";
                        } else {
                            // line 186
                            echo "              <a class=\"nav-link ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 186)) ? ("active") : ("")));
                            echo "\" href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
                            echo "\"> ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
                            echo " </a>
            ";
                        }
                        // line 188
                        echo "          </li>
        ";
                    }
                    // line 190
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "    </ul>
  ";
            } else {
                // line 193
                echo "  <ul class=\"navbar-nav ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((((($context["field_home_style"] ?? null) == "innovative") || (($context["field_home_style"] ?? null) == "light")) || (($context["field_home_style"] ?? null) == "particles"))) ? ("ml-auto") : ("ml-auto")));
                echo "\">
    ";
                // line 194
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 195
                    echo "      ";
                    $context["classes"] = [0 => "nav-item", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 197
$context["item"], "attributes", [], "any", false, false, true, 197), "hasClass", [0 => "mega-menu"], "method", false, false, true, 197)) ? ("dropdown") : ("")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 198
$context["item"], "attributes", [], "any", false, false, true, 198), "hasClass", [0 => "mega-menu"], "method", false, false, true, 198)) ? ("static") : (""))];
                    // line 201
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 201), "hasClass", [0 => "mega-menu"], "method", false, false, true, 201)) {
                        // line 202
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 202), 202, $this->source), "html", null, true);
                        echo ">
          <a class=\"nav-link dropdown-toggle ";
                        // line 203
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 203)) ? ("active") : ("")));
                        echo "\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
                        echo " </a>
          ";
                        // line 204
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 204) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 204))) {
                            // line 205
                            echo "            <ul class=\"dropdown-menu megamenu\">
              <li>
                <div class=\"container\">
                  <div class=\"row\">
                    ";
                            // line 209
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 209));
                            foreach ($context['_seq'] as $context["_key"] => $context["item1"]) {
                                // line 210
                                echo "                      <div class=\"col-lg-3 col-md-6 col-sm-12\">
                        <h5 class=\"dropdown-title bottom10\"> ";
                                // line 211
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item1"], "title", [], "any", false, false, true, 211), 211, $this->source), "html", null, true);
                                echo " </h5>
                        ";
                                // line 212
                                if ((twig_get_attribute($this->env, $this->source, $context["item1"], "below", [], "any", false, false, true, 212) && twig_get_attribute($this->env, $this->source, $context["item1"], "is_expanded", [], "any", false, false, true, 212))) {
                                    // line 213
                                    echo "                          ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item1"], "below", [], "any", false, false, true, 213));
                                    foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
                                        // line 214
                                        echo "                            <a class=\"dropdown-item\" href=\"";
                                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item2"], "url", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
                                        echo "\">";
                                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item2"], "title", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
                                        echo "</a>
                          ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 216
                                    echo "                        ";
                                }
                                // line 217
                                echo "                      </div>
                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 219
                            echo "                  </div>
                </div>
              </li>
            </ul>
          ";
                        }
                        // line 224
                        echo "        </li>
      ";
                    } else {
                        // line 226
                        echo "        <li class=\"nav-item dropdown position-relative\">
          ";
                        // line 227
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 227) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 227))) {
                            // line 228
                            echo "            <a class=\"nav-link dropdown-toggle ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 228)) ? ("active") : ("")));
                            echo "\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 228), 228, $this->source), "html", null, true);
                            echo " </a>
            <div class=\"dropdown-menu\">
              ";
                            // line 230
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 230));
                            foreach ($context['_seq'] as $context["_key"] => $context["item1"]) {
                                // line 231
                                echo "                <a class=\"dropdown-item\" href=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item1"], "url", [], "any", false, false, true, 231), 231, $this->source), "html", null, true);
                                echo "\">";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item1"], "title", [], "any", false, false, true, 231), 231, $this->source), "html", null, true);
                                echo "</a>
              ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 233
                            echo "            </div>
          ";
                        } else {
                            // line 235
                            echo "            <a class=\"nav-link ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 235)) ? ("active") : ("")));
                            echo "\" href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 235), 235, $this->source), "html", null, true);
                            echo "\"> ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 235), 235, $this->source), "html", null, true);
                            echo " </a>
          ";
                        }
                        // line 237
                        echo "        </li>
      ";
                    }
                    // line 239
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 240
                echo "  </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/xtrax/templates/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  668 => 240,  662 => 239,  658 => 237,  648 => 235,  644 => 233,  633 => 231,  629 => 230,  621 => 228,  619 => 227,  616 => 226,  612 => 224,  605 => 219,  598 => 217,  595 => 216,  584 => 214,  579 => 213,  577 => 212,  573 => 211,  570 => 210,  566 => 209,  560 => 205,  558 => 204,  552 => 203,  547 => 202,  544 => 201,  542 => 198,  541 => 197,  539 => 195,  535 => 194,  530 => 193,  526 => 191,  520 => 190,  516 => 188,  506 => 186,  502 => 184,  491 => 182,  487 => 181,  479 => 179,  477 => 178,  474 => 177,  470 => 175,  463 => 170,  456 => 168,  453 => 167,  442 => 165,  437 => 164,  435 => 163,  431 => 162,  428 => 161,  424 => 160,  418 => 156,  416 => 155,  410 => 154,  405 => 153,  402 => 152,  400 => 149,  399 => 148,  397 => 146,  393 => 145,  390 => 144,  387 => 143,  383 => 141,  377 => 140,  374 => 139,  371 => 138,  367 => 136,  357 => 134,  353 => 132,  342 => 130,  338 => 129,  330 => 127,  328 => 126,  325 => 125,  321 => 123,  314 => 118,  307 => 116,  304 => 115,  293 => 113,  288 => 112,  286 => 111,  282 => 110,  279 => 109,  275 => 108,  269 => 104,  267 => 103,  261 => 102,  256 => 101,  253 => 100,  251 => 97,  250 => 96,  248 => 94,  245 => 93,  240 => 92,  238 => 91,  235 => 90,  233 => 89,  230 => 88,  224 => 87,  221 => 86,  218 => 85,  214 => 83,  204 => 81,  200 => 79,  189 => 77,  185 => 76,  177 => 74,  175 => 73,  172 => 72,  168 => 70,  161 => 65,  154 => 63,  151 => 62,  140 => 60,  135 => 59,  133 => 58,  129 => 57,  126 => 56,  122 => 55,  116 => 51,  114 => 50,  108 => 49,  103 => 48,  100 => 47,  98 => 44,  97 => 43,  95 => 41,  92 => 40,  87 => 39,  85 => 38,  82 => 37,  79 => 36,  76 => 35,  74 => 34,  71 => 33,  68 => 32,  52 => 31,  48 => 30,  44 => 29,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/xtrax/templates/menu/menu--main.html.twig", "/home/deepsea1/public_html/thedungeonsociety/themes/xtrax/templates/menu/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "set" => 30, "macro" => 31, "if" => 32, "for" => 39);
        static $filters = array("length" => 34, "round" => 36, "escape" => 48);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'if', 'for'],
                ['length', 'round', 'escape'],
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
