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

/* themes/xtrax/templates/node/node--blog-post.html.twig */
class __TwigTemplate_59de4697283a992d0346be82a4ef0019 extends \Twig\Template
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
        if (($context["page"] ?? null)) {
            // line 2
            echo "  <div class=\"news_item shadow\">
    <div class=\"image\">
      ";
            // line 4
            $context["image_uri"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 4), "entity", [], "any", false, false, true, 4), "uri", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4);
            // line 5
            echo "      ";
            $context["image_alt"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 5), "entity", [], "any", false, false, true, 5), "alt", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5);
            // line 6
            echo "      <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\nvs_func\Twig\NVSImageStyle']->getUrlByImageStyle($this->sandbox->ensureToStringAllowed(($context["image_uri"] ?? null), 6, $this->source), "image_930x540"));
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\" class=\"img-responsive\">
    </div>
    <div class=\"news_desc text-center text-md-left\">
      <h3 class=\"text-capitalize font-normal darkcolor\"><a href=\"";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 9, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</a></h3>
      <ul class=\"meta-tags top20 bottom20\">
        <li><a href=\"javascript:void(0)\"><i class=\"fas fa-calendar-alt\"></i>";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "created", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11), 11, $this->source), "M d"), "html", null, true);
            echo "</a></li>
        <li>";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 12, $this->source), "html", null, true);
            echo "</li>
        ";
            // line 14
            echo "      </ul>
      <div id=\"blog-content\">
        ";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "
      </div>
      ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_comments", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        } else {
            // line 22
            echo "  ";
            if ((($context["blog_listing_style"] ?? null) == "layout_33")) {
                // line 23
                echo "    <article class=\"blog-item cbp-item heading_space wow fadeIn text-center text-md-left\" data-wow-delay=\"300ms\">
      ";
                // line 24
                $context["image_uri"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 24), "entity", [], "any", false, false, true, 24), "uri", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24);
                // line 25
                echo "      ";
                $context["image_alt"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 25), "entity", [], "any", false, false, true, 25), "alt", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25);
                // line 26
                echo "      <div class=\"image\"><img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\nvs_func\Twig\NVSImageStyle']->getUrlByImageStyle($this->sandbox->ensureToStringAllowed(($context["image_uri"] ?? null), 26, $this->source), "image_690x300"));
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 26), "value", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "\" class=\"border_radius\"></div>
      <h3 class=\"darkcolor font-light bottom10 top30\"> <a href=\"";
                // line 27
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 27, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "</a></h3>
      <ul class=\"commment\">
        <li><a href=\"javascript:void(0)\"><i class=\"fas fa-calendar\"></i> ";
                // line 29
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "created", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), 29, $this->source), "M d"), "html", null, true);
                echo "</a></li>
        ";
                // line 31
                echo "        <li>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 31, $this->source), "html", null, true);
                echo "</li>
      </ul>
      <p class=\"top15\">";
                // line 33
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 33), "summary", [], "any", false, false, true, 33)) {
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 33), "summary", [], "any", false, false, true, 33), 33, $this->source)) > 200)) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 33), "summary", [], "any", false, false, true, 33), 33, $this->source), 0, 200) . "...")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 33), "summary", [], "any", false, false, true, 33))), "html", null, true);
                }
                echo "</p>
      <a class=\" button btn-primary\" href=\"";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 34, $this->source), "html", null, true);
                echo "\">Read More</a>
    </article>
  ";
            } elseif ((            // line 36
($context["blog_listing_style"] ?? null) == "layout_2")) {
                // line 37
                echo "    <div class=\"cbp-item\">
      <div class=\"news_item shadow text-center text-md-left\">
        <a class=\"image\" href=\"";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 39, $this->source), "html", null, true);
                echo "\">
          ";
                // line 40
                $context["image_uri"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 40), "entity", [], "any", false, false, true, 40), "uri", [], "any", false, false, true, 40), "value", [], "any", false, false, true, 40);
                // line 41
                echo "          ";
                $context["image_alt"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 41), "entity", [], "any", false, false, true, 41), "alt", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41);
                // line 42
                echo "          <img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\nvs_func\Twig\NVSImageStyle']->getUrlByImageStyle($this->sandbox->ensureToStringAllowed(($context["image_uri"] ?? null), 42, $this->source), "image_690x400"));
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "\" class=\"img-responsive\">
        </a>
        <div class=\"news_desc\">
          <h3 class=\"text-capitalize font-normal darkcolor\"><a href=\"";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 45, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 45), "value", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "</a></h3>
          <ul class=\"meta-tags top20 bottom20\">
            <li><a href=\"javascript:void(0)\"><i class=\"fas fa-calendar-alt\"></i>";
                // line 47
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "created", [], "any", false, false, true, 47), "value", [], "any", false, false, true, 47), 47, $this->source), "M d"), "html", null, true);
                echo "</a></li>
            <li>";
                // line 48
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 48, $this->source), "html", null, true);
                echo "</li>
           ";
                // line 50
                echo "          </ul>
          <p class=\"bottom35\">";
                // line 51
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 51), "summary", [], "any", false, false, true, 51)) {
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 51), "summary", [], "any", false, false, true, 51), 51, $this->source)) > 151)) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 51), "summary", [], "any", false, false, true, 51), 51, $this->source), 0, 151) . "...")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 51), "summary", [], "any", false, false, true, 51))), "html", null, true);
                }
                echo "</p>
          <a href=\"";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 52, $this->source), "html", null, true);
                echo "\" class=\"button gradient-btn\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read more"));
                echo "</a>
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 58
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/xtrax/templates/node/node--blog-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 58,  184 => 52,  178 => 51,  175 => 50,  171 => 48,  167 => 47,  160 => 45,  151 => 42,  148 => 41,  146 => 40,  142 => 39,  138 => 37,  136 => 36,  131 => 34,  125 => 33,  119 => 31,  115 => 29,  108 => 27,  101 => 26,  98 => 25,  96 => 24,  93 => 23,  90 => 22,  83 => 18,  78 => 16,  74 => 14,  70 => 12,  66 => 11,  59 => 9,  50 => 6,  47 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/xtrax/templates/node/node--blog-post.html.twig", "/home/deepsea1/public_html/thedungeonsociety/themes/xtrax/templates/node/node--blog-post.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 4);
        static $filters = array("escape" => 6, "date" => 11, "length" => 33, "slice" => 33, "t" => 52);
        static $functions = array("getUrlByImageStyle" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'date', 'length', 'slice', 't'],
                ['getUrlByImageStyle']
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
