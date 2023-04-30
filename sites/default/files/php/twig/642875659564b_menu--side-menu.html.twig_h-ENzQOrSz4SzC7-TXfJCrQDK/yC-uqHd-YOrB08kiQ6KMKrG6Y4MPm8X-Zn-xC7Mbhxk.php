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

/* themes/xtrax/templates/menu/menu--side-menu.html.twig */
class __TwigTemplate_8aae8821d7de585a5313d0e235147f5f extends \Twig\Template
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
        echo "
";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 30, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 32
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 33
            echo "  <ul class=\"navbar-nav\">
    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["index"] => $context["item"]) {
                // line 35
                echo "      ";
                $context["classes"] = [0 => "nav-item"];
                // line 39
                echo "      <li";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
                echo ">
        ";
                // line 40
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 40) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 40))) {
                    // line 41
                    echo "          <a class=\"nav-link collapsePagesSideMenu ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 41)) ? ("active") : ("")));
                    echo "\" data-toggle=\"collapse\" href=\"#sideNavPages";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["index"], 41, $this->source), "html", null, true);
                    echo "\">
            ";
                    // line 42
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo " <i class=\"fas fa-chevron-down\"></i>
          </a>
          <div id=\"sideNavPages";
                    // line 44
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["index"], 44, $this->source), "html", null, true);
                    echo "\" class=\"collapse sideNavPages\">
            <ul class=\"navbar-nav mt-2\">
              ";
                    // line 46
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 46));
                    foreach ($context['_seq'] as $context["index1"] => $context["item1"]) {
                        // line 47
                        echo "                <li class=\"nav-item\">
                  ";
                        // line 48
                        if ((twig_get_attribute($this->env, $this->source, $context["item1"], "below", [], "any", false, false, true, 48) && twig_get_attribute($this->env, $this->source, $context["item1"], "is_expanded", [], "any", false, false, true, 48))) {
                            // line 49
                            echo "                    <a class=\"nav-link collapsePagesSideMenu ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item1"], "in_active_trail", [], "any", false, false, true, 49)) ? ("active") : ("")));
                            echo "\" data-toggle=\"collapse\" href=\"#inner-";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["index"], 49, $this->source), "html", null, true);
                            echo "-";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["index1"], 49, $this->source), "html", null, true);
                            echo "\">
                      ";
                            // line 50
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item1"], "title", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                            echo " <i class=\"fas fa-chevron-down\"></i>
                    </a>
                    <div id=\"inner-";
                            // line 52
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["index"], 52, $this->source), "html", null, true);
                            echo "-";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["index1"], 52, $this->source), "html", null, true);
                            echo "\" class=\"collapse sideNavPages sideNavPagesInner\">
                      <ul class=\"navbar-nav mt-2\">
                        ";
                            // line 54
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item1"], "below", [], "any", false, false, true, 54));
                            foreach ($context['_seq'] as $context["index2"] => $context["item2"]) {
                                // line 55
                                echo "                          <li class=\"nav-item\">
                            <a class=\"nav-link ";
                                // line 56
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item2"], "in_active_trail", [], "any", false, false, true, 56)) ? ("active") : ("")));
                                echo "\" href=\"";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item2"], "url", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                                echo "\">";
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item2"], "title", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                                echo "</a>
                          </li>
                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['index2'], $context['item2'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 59
                            echo "                      </ul>
                    </div>
                  ";
                        } else {
                            // line 62
                            echo "                    <a class=\"nav-link ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item1"], "in_active_trail", [], "any", false, false, true, 62)) ? ("active") : ("")));
                            echo "\" href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item1"], "url", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                            echo "\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item1"], "title", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                            echo "</a>
                  ";
                        }
                        // line 64
                        echo "                </li>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['index1'], $context['item1'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 66
                    echo "            </ul>
          </div>
        ";
                } else {
                    // line 69
                    echo "          <a class=\"nav-link ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 69)) ? ("active") : ("")));
                    echo "\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                    echo "\"> ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                    echo " </a>
        ";
                }
                // line 71
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "  </ul>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/xtrax/templates/menu/menu--side-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 73,  190 => 71,  180 => 69,  175 => 66,  168 => 64,  158 => 62,  153 => 59,  140 => 56,  137 => 55,  133 => 54,  126 => 52,  121 => 50,  112 => 49,  110 => 48,  107 => 47,  103 => 46,  98 => 44,  93 => 42,  86 => 41,  84 => 40,  79 => 39,  76 => 35,  72 => 34,  69 => 33,  54 => 32,  47 => 30,  44 => 29,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/xtrax/templates/menu/menu--side-menu.html.twig", "/home/deepsea1/public_html/thedungeonsociety/themes/xtrax/templates/menu/menu--side-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 32, "for" => 34, "set" => 35, "if" => 40);
        static $filters = array("escape" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'for', 'set', 'if'],
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
