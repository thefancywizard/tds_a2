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

/* themes/xtrax/templates/view/views-view.html.twig */
class __TwigTemplate_cf0a1ad50af7d704327186e802124fa1 extends \Twig\Template
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
        // line 35
        if ((($context["id"] ?? null) == "blog")) {
            // line 36
            echo "  ";
            if ((($context["display_id"] ?? null) == "sidebar_widget__recent_posts_block")) {
                // line 37
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 37, $this->source), "html", null, true);
                echo "
  ";
            } elseif ((            // line 38
($context["display_id"] ?? null) == "section_blog")) {
                // line 39
                echo "    <div class=\"row\">
      <div class=\"col-md-12 text-center\">
        ";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 41, $this->source), "html", null, true);
                echo "
      </div>
    </div>
    <div id=\"blog-measonry\" class=\"cbp\">
      ";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 45, $this->source), "html", null, true);
                echo "
    </div>
  ";
            } elseif ((            // line 47
($context["display_id"] ?? null) == "block_footer_widget_latest_news")) {
                // line 48
                echo "    <ul class=\"latest_news whitecolor\">
    ";
                // line 49
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 49, $this->source), "html", null, true);
                echo "
    </ul>
  ";
            } else {
                // line 52
                echo "    ";
                if ((($context["blog_listing_style"] ?? null) == "layout_2")) {
                    // line 53
                    echo "      ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 53, $this->source), "html", null, true);
                    echo "
      ";
                    // line 54
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 54, $this->source), "html", null, true);
                    echo "
    ";
                } else {
                    // line 56
                    echo "      <div id=\"blog-measonry\" class=\"cbp\">
        ";
                    // line 57
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 57, $this->source), "html", null, true);
                    echo "
      </div>
      <div class=\"row\">
        <div class=\"col-sm-12\">
          ";
                    // line 61
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 61, $this->source), "html", null, true);
                    echo "
        </div>
      </div>
    ";
                }
                // line 65
                echo "  ";
            }
        } elseif ((        // line 66
($context["id"] ?? null) == "_xtrax_taxonomy_terms")) {
            // line 67
            echo "  ";
            if ((($context["display_id"] ?? null) == "sidebar_widget__top_tags_block")) {
                // line 68
                echo "    <ul class=\"webtags\">
      ";
                // line 69
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 69, $this->source), "html", null, true);
                echo "
    </ul>
  ";
            } elseif ((            // line 71
($context["display_id"] ?? null) == "sidebar_widget__blog_categories_block")) {
                // line 72
                echo "    <ul class=\"webcats\">
      ";
                // line 73
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 73, $this->source), "html", null, true);
                echo "
    </ul>
  ";
            } elseif ((            // line 75
($context["display_id"] ?? null) == "block_service_categories_filter")) {
                // line 76
                echo "    <div id=\"services-filter\" class=\"cbp-l-filters dark bottom40 wow fadeIn d-table mx-auto\" data-wow-delay=\"350ms\">
      ";
                // line 77
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 77, $this->source), "html", null, true);
                echo "
      ";
                // line 78
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 78, $this->source), "html", null, true);
                echo "
    </div>
  ";
            } elseif ((            // line 80
($context["display_id"] ?? null) == "block_gallery_categories_filter")) {
                // line 81
                echo "    <div id=\"mosaic-filter\" class=\"cbp-l-filters bottom30 wow fadeIn text-center\" data-wow-delay=\"350ms\">
      ";
                // line 82
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 82, $this->source), "html", null, true);
                echo "
      ";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 83, $this->source), "html", null, true);
                echo "
    </div>
  ";
            } else {
                // line 86
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 86, $this->source), "html", null, true);
                echo "
    ";
                // line 87
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 87, $this->source), "html", null, true);
                echo "
    ";
                // line 88
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 88, $this->source), "html", null, true);
                echo "
    ";
                // line 89
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 89, $this->source), "html", null, true);
                echo "
    ";
                // line 90
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 90, $this->source), "html", null, true);
                echo "
    ";
                // line 91
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 91, $this->source), "html", null, true);
                echo "
  ";
            }
        } elseif ((        // line 93
($context["id"] ?? null) == "_xtrax_product")) {
            // line 94
            echo "  ";
            if ((($context["display_id"] ?? null) == "products")) {
                // line 95
                echo "    <div class=\"row\">
      <div class=\"col-md-12 text-center wow fadeIn\" data-wow-delay=\"300ms\">
        ";
                // line 97
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 97, $this->source), "html", null, true);
                echo "
      </div>
      ";
                // line 99
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 99, $this->source), "html", null, true);
                echo "
      <div class=\"col-lg-12 col-md-12\">
        ";
                // line 101
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 101, $this->source), "html", null, true);
                echo "
      </div>
    </div>
  ";
            } else {
                // line 105
                echo "  ";
            }
        } elseif ((        // line 106
($context["id"] ?? null) == "_xtrax_section_content")) {
            // line 107
            echo "  ";
            if ((($context["display_id"] ?? null) == "section_team_members_1")) {
                // line 108
                echo "    <div class=\"row\">
      <div class=\"col-md-12 text-center heading_space animated wow fadeIn\" data-wow-delay=\"300ms\">
        ";
                // line 110
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 110, $this->source), "html", null, true);
                echo "
      </div>
    </div>
    <div class=\"row equal-shadow-team\">
      ";
                // line 114
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 114, $this->source), "html", null, true);
                echo "
    </div>
  ";
            } elseif ((            // line 116
($context["display_id"] ?? null) == "section_team_members_2")) {
                // line 117
                echo "    <div class=\"row\">
      ";
                // line 118
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 118, $this->source), "html", null, true);
                echo "
    </div>
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div id=\"ourteam-slider\" class=\"owl-carousel\">
          ";
                // line 123
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 123, $this->source), "html", null, true);
                echo "
        </div>
      </div>
    </div>
  ";
            } elseif ((            // line 127
($context["display_id"] ?? null) == "section_testimonial_1")) {
                // line 128
                echo "    <div class=\"row\">
      <div class=\"col-md-12 text-center heading_space wow fadeIn\" data-wow-delay=\"300ms\">
        ";
                // line 130
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 130, $this->source), "html", null, true);
                echo "
      </div>
    </div>
    <div id=\"testimonial-grid\" class=\"cbp mt-n3\">
      ";
                // line 134
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 134, $this->source), "html", null, true);
                echo "
    </div>
  ";
            } elseif ((            // line 136
($context["display_id"] ?? null) == "section_testimonial_2")) {
                // line 137
                echo "    <div class=\"row\">
      <div class=\"col-md-12 text-center animated wow fadeIn\" data-wow-delay=\"300ms\">
        ";
                // line 139
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 139, $this->source), "html", null, true);
                echo "
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-md-12 col-sm-12\">
        <div id=\"testimonial-main-slider\" class=\"owl-carousel\">
          ";
                // line 145
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 145, $this->source), "html", null, true);
                echo "
        </div>
      </div>
    </div>
  ";
            } elseif ((            // line 149
($context["display_id"] ?? null) == "section_testimonial_3")) {
                // line 150
                echo "    <div class=\"parallax page-header testimonial-bg\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-6 offset-lg-6 col-md-12 text-center text-lg-right\">
            <div class=\"heading-title wow fadeInUp padding_testi\" data-wow-delay=\"300ms\">
              ";
                // line 155
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 155, $this->source), "html", null, true);
                echo "
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"container\">
      <div class=\"owl-carousel\" id=\"testimonial-slider\">
        ";
                // line 163
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 163, $this->source), "html", null, true);
                echo "
      </div>
    </div>
  ";
            } elseif ((            // line 166
($context["display_id"] ?? null) == "section_testimonial_4")) {
                // line 167
                echo "    <div class=\"parallax page-header testimonial-bg\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-6 offset-lg-6 col-md-12 text-center text-lg-right\">
            <div class=\"heading-title wow fadeInUp padding_testi\" data-wow-delay=\"300ms\">
              ";
                // line 172
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 172, $this->source), "html", null, true);
                echo "
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"container\">
      <div class=\"owl-carousel\" id=\"testimonial-slider\">
        ";
                // line 180
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 180, $this->source), "html", null, true);
                echo "
      </div>
    </div>
  ";
            } elseif ((            // line 183
($context["display_id"] ?? null) == "section_partner_1")) {
                // line 184
                echo "    <div class=\"row\">
      ";
                // line 185
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 185, $this->source), "html", null, true);
                echo "
      <div class=\"col-md-12 col-sm-12\">
        <div id=\"partners-slider\" class=\"owl-carousel\">
          ";
                // line 188
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 188, $this->source), "html", null, true);
                echo "
        </div>
      </div>
    </div>
  ";
            } elseif ((            // line 192
($context["display_id"] ?? null) == "section_services_1")) {
                // line 193
                echo "    <div class=\"col-md-12 text-center heading_space wow fadeIn\" data-wow-delay=\"300ms\">
      ";
                // line 194
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 194, $this->source), "html", null, true);
                echo "
    </div>
    ";
                // line 196
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 196, $this->source), "html", null, true);
                echo "
    <div id=\"services-measonry\" class=\"cbp\">
      ";
                // line 198
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 198, $this->source), "html", null, true);
                echo "
    </div>
  ";
            } elseif ((            // line 200
($context["display_id"] ?? null) == "section_faqs")) {
                // line 201
                echo "    <div class=\"row\">
      <div class=\"col-md-12 text-center animated wow fadeIn\" data-wow-delay=\"300ms\">
        ";
                // line 203
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 203, $this->source), "html", null, true);
                echo "
      </div>
      <h2 class=\"d-none\">";
                // line 205
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Tabs"));
                echo "</h2>
      <div class=\"col-md-12 col-sm-12\">
        <div id=\"accordion\">
          ";
                // line 208
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 208, $this->source), "html", null, true);
                echo "
        </div>
      </div>
    </div>
  ";
            } elseif ((            // line 212
($context["display_id"] ?? null) == "section_gallery_1")) {
                // line 213
                echo "    <div class=\"row\">
      <div class=\"col-md-12 text-center wow fadeIn top15\" data-wow-delay=\"300ms\">
        ";
                // line 215
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 215, $this->source), "html", null, true);
                echo "
      </div>
      <div class=\"col-lg-12\">
        ";
                // line 218
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 218, $this->source), "html", null, true);
                echo "
      </div>
      <div class=\"col-lg-12\">
        <div id=\"grid-mosaic\" class=\"cbp cbp-l-grid-mosaic-flat\">
          ";
                // line 222
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 222, $this->source), "html", null, true);
                echo "
        </div>
        <div class=\"col-lg-12\">
          ";
                // line 225
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 225, $this->source), "html", null, true);
                echo "
        </div>
      </div>
    </div>
  ";
            } else {
                // line 230
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 230, $this->source), "html", null, true);
                echo "
    ";
                // line 231
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 231, $this->source), "html", null, true);
                echo "
    ";
                // line 232
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 232, $this->source), "html", null, true);
                echo "
    ";
                // line 233
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 233, $this->source), "html", null, true);
                echo "
    ";
                // line 234
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 234, $this->source), "html", null, true);
                echo "
    ";
                // line 235
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 235, $this->source), "html", null, true);
                echo "
  ";
            }
        } elseif ((        // line 237
($context["id"] ?? null) == "_xtrax_sliders")) {
            // line 238
            echo "  ";
            if ((($context["display_id"] ?? null) == "slider_1")) {
                // line 239
                echo "    <div id=\"revo_main_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-dark\" data-alias=\"classic4export\" data-source=\"gallery\">
      <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
      <div id=\"rev_main\" class=\"rev_slider fullwidthabanner white\" data-version=\"5.4.1\">
        <ul>
          ";
                // line 243
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 243, $this->source), "html", null, true);
                echo "
        </ul>
      </div>
    </div>
    ";
                // line 247
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 247, $this->source), "html", null, true);
                echo "
  ";
            } elseif ((            // line 248
($context["display_id"] ?? null) == "slider_2")) {
                // line 249
                echo "    <h2 class=\"d-none\">hidden</h2>
    <div id=\"rev_single_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\" data-alias=\"trax_slider_01\">
      <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
      <div id=\"rev_single\" class=\"rev_slider fullwidthabanner\" data-version=\"5.4.8.1\">
        <ul>
          ";
                // line 254
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 254, $this->source), "html", null, true);
                echo "
        </ul>
      </div>
      <!-- END REVOLUTION SLIDER -->
    </div>
  ";
            } elseif ((            // line 259
($context["display_id"] ?? null) == "slider_3")) {
                // line 260
                echo "    <h2 class=\"d-none\">heading</h2>
    <!--Main Slider-->
    <div id=\"revo_main_wrapper\" class=\"rev_slider_wrapper\">
      <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
      <div id=\"rev_arrows\"  class=\"rev_slider\" data-version=\"5.4.8.1\">
        <ul>
          ";
                // line 266
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 266, $this->source), "html", null, true);
                echo "
        </ul>
      </div>
    </div>
  ";
            } elseif ((            // line 270
($context["display_id"] ?? null) == "slider_5")) {
                // line 271
                echo "    <div id=\"revo_main_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-dark\" data-alias=\"classic4export\" data-source=\"gallery\">
      <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
      <div id=\"rev_creative\" class=\"rev_slider fullwidthabanner white\" data-version=\"5.4.1\">
        <ul>
          ";
                // line 275
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 275, $this->source), "html", null, true);
                echo "
        </ul>
      </div>
    </div>
  ";
            } elseif ((            // line 279
($context["display_id"] ?? null) == "slider_6")) {
                // line 280
                echo "    <div id=\"revo_main_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-dark\" data-alias=\"classic4export\" data-source=\"gallery\">
      <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
      <div id=\"rev_creative\" class=\"rev_slider fullwidthabanner white\" data-version=\"5.4.1\">
        <ul>
          ";
                // line 284
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 284, $this->source), "html", null, true);
                echo "
        </ul>
      </div>
    </div>
  ";
            } elseif ((            // line 288
($context["display_id"] ?? null) == "slider_7")) {
                // line 289
                echo "    <h2 class=\"d-none\">heading</h2>
    <!--Main Slider-->
    <div id=\"rev_slider_8_1_wrapper\" class=\"rev_slider_wrapper fullscreen-container transparent-bg\" data-source=\"gallery\">
      <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
      <div id=\"rev_slider_8_1\" class=\"rev_slider fullscreenbanner\" data-version=\"5.4.8.1\">
        <ul>
          ";
                // line 295
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 295, $this->source), "html", null, true);
                echo "
        </ul>
        <div class=\"tp-bannertimer\" style=\"height: 5px; background: rgba(0,0,0,0.15);\"></div>
      </div>
    </div>
    <!--Main Slider ends -->
  ";
            } elseif ((            // line 301
($context["display_id"] ?? null) == "slider_8")) {
                // line 302
                echo "    <h2 class=\"d-none\">hidden</h2>
    <div id=\"rev_single_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\" data-alias=\"trax_slider_01\">
      <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
      <div id=\"rev_single\" class=\"rev_slider fullwidthbanner\" data-version=\"5.4.8.1\">
        <ul>
          ";
                // line 307
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 307, $this->source), "html", null, true);
                echo "
        </ul>
      </div>
      <!-- END REVOLUTION SLIDER -->
    </div>
  ";
            } elseif ((            // line 312
($context["display_id"] ?? null) == "slider_9")) {
                // line 313
                echo "    <h2 class=\"d-none\">hidden</h2>
    <div id=\"rev_single_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\" data-alias=\"trax_slider_01\">
      <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
      <div id=\"rev_single\" class=\"rev_slider fullwidthabanner\" data-version=\"5.4.8.1\">
        <ul>
          ";
                // line 318
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 318, $this->source), "html", null, true);
                echo "
        </ul>
      </div>
      <!-- END REVOLUTION SLIDER -->
    </div>
  ";
            } elseif ((            // line 323
($context["display_id"] ?? null) == "slider_10")) {
                // line 324
                echo "    <div id=\"revo_main_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-dark\" data-alias=\"classic4export\" data-source=\"gallery\">
      <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
      <div id=\"rev_main\" class=\"rev_slider fullwidthabanner white\" data-version=\"5.4.1\">
        <ul>
          ";
                // line 328
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 328, $this->source), "html", null, true);
                echo "
        </ul>
      </div>
    </div>
    ";
                // line 332
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 332, $this->source), "html", null, true);
                echo "
  ";
            } elseif ((            // line 333
($context["display_id"] ?? null) == "slider_11")) {
                // line 334
                echo "    <h2 class=\"d-none\">hidden</h2>
    <div id=\"rev_single_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\" data-alias=\"trax_slider_01\">
      <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
      <div id=\"rev_single\" class=\"rev_slider fullwidthabanner\" data-version=\"5.4.8.1\">
        <ul>
          ";
                // line 339
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 339, $this->source), "html", null, true);
                echo "
        </ul>
      </div>
      <!-- END REVOLUTION SLIDER -->
    </div>
    <!--scroll down-->
    ";
                // line 345
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 345, $this->source), "html", null, true);
                echo "
  ";
            } elseif ((            // line 346
($context["display_id"] ?? null) == "slider_12")) {
                // line 347
                echo "    <div id=\"revo_main_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-dark\" data-alias=\"classic4export\" data-source=\"gallery\">
      <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
      <div id=\"rev_creative\" class=\"rev_slider fullwidthabanner white\" data-version=\"5.4.1\">
        <ul>
          ";
                // line 351
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 351, $this->source), "html", null, true);
                echo "
        </ul>
      </div>
    </div>
  ";
            } elseif ((            // line 355
($context["display_id"] ?? null) == "slider_13")) {
                // line 356
                echo "    <div id=\"revo_main_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-light\" data-alias=\"classic4export\">
      <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
      <div id=\"rev_main\" class=\"rev_slider fullwidthabanner\" data-version=\"5.4.1\">
        <ul>
          ";
                // line 360
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 360, $this->source), "html", null, true);
                echo "
        </ul>
      </div>
    </div>
    ";
                // line 364
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 364, $this->source), "html", null, true);
                echo "
  ";
            } elseif ((            // line 365
($context["display_id"] ?? null) == "slider_14")) {
                // line 366
                echo "    <div id=\"revo_main_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-dark\" data-alias=\"classic4export\" data-source=\"gallery\">
      <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
      <div id=\"vertical-bullets\" class=\"rev_slider fullwidthabanner white vertical-tpb\" data-version=\"5.4.1\">
        <ul>
          ";
                // line 370
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 370, $this->source), "html", null, true);
                echo "
        </ul>
      </div>
    </div>
    ";
                // line 374
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 374, $this->source), "html", null, true);
                echo "
  ";
            } elseif ((            // line 375
($context["display_id"] ?? null) == "slider_15")) {
                // line 376
                echo "    <h2 class=\"d-none\">heading</h2>
    <div id=\"revo_main_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\">
      <div id=\"rev_one_page\" class=\"rev_slider fullwidthabanner\" style=\"display:none;\" data-version=\"5.4.1\">
        <ul>
          ";
                // line 380
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 380, $this->source), "html", null, true);
                echo "
        </ul>
      </div>
    </div>
  ";
            } elseif ((            // line 384
($context["display_id"] ?? null) == "slider_17")) {
                // line 385
                echo "    <h2 class=\"d-none\">hidden</h2>
    <div id=\"rev_single_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\" data-alias=\"trax_slider_01\">
      <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
      <div id=\"rev_single\" class=\"rev_slider fullwidthabanner\" data-version=\"5.4.8.1\">
        <ul>
          ";
                // line 390
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 390, $this->source), "html", null, true);
                echo "
        </ul>
      </div>
      <!-- END REVOLUTION SLIDER -->
    </div>
  ";
            } else {
                // line 396
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 396, $this->source), "html", null, true);
                echo "
    ";
                // line 397
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 397, $this->source), "html", null, true);
                echo "
    ";
                // line 398
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 398, $this->source), "html", null, true);
                echo "
    ";
                // line 399
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 399, $this->source), "html", null, true);
                echo "
    ";
                // line 400
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 400, $this->source), "html", null, true);
                echo "
    ";
                // line 401
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 401, $this->source), "html", null, true);
                echo "
  ";
            }
        } else {
            // line 404
            echo "\t  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 404, $this->source), "html", null, true);
            echo "
  \t";
            // line 405
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 405, $this->source), "html", null, true);
            echo "
  \t";
            // line 406
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 406, $this->source), "html", null, true);
            echo "
  \t";
            // line 407
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 407, $this->source), "html", null, true);
            echo "
  \t";
            // line 408
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 408, $this->source), "html", null, true);
            echo "
  \t";
            // line 409
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 409, $this->source), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/xtrax/templates/view/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  786 => 409,  782 => 408,  778 => 407,  774 => 406,  770 => 405,  765 => 404,  759 => 401,  755 => 400,  751 => 399,  747 => 398,  743 => 397,  738 => 396,  729 => 390,  722 => 385,  720 => 384,  713 => 380,  707 => 376,  705 => 375,  701 => 374,  694 => 370,  688 => 366,  686 => 365,  682 => 364,  675 => 360,  669 => 356,  667 => 355,  660 => 351,  654 => 347,  652 => 346,  648 => 345,  639 => 339,  632 => 334,  630 => 333,  626 => 332,  619 => 328,  613 => 324,  611 => 323,  603 => 318,  596 => 313,  594 => 312,  586 => 307,  579 => 302,  577 => 301,  568 => 295,  560 => 289,  558 => 288,  551 => 284,  545 => 280,  543 => 279,  536 => 275,  530 => 271,  528 => 270,  521 => 266,  513 => 260,  511 => 259,  503 => 254,  496 => 249,  494 => 248,  490 => 247,  483 => 243,  477 => 239,  474 => 238,  472 => 237,  467 => 235,  463 => 234,  459 => 233,  455 => 232,  451 => 231,  446 => 230,  438 => 225,  432 => 222,  425 => 218,  419 => 215,  415 => 213,  413 => 212,  406 => 208,  400 => 205,  395 => 203,  391 => 201,  389 => 200,  384 => 198,  379 => 196,  374 => 194,  371 => 193,  369 => 192,  362 => 188,  356 => 185,  353 => 184,  351 => 183,  345 => 180,  334 => 172,  327 => 167,  325 => 166,  319 => 163,  308 => 155,  301 => 150,  299 => 149,  292 => 145,  283 => 139,  279 => 137,  277 => 136,  272 => 134,  265 => 130,  261 => 128,  259 => 127,  252 => 123,  244 => 118,  241 => 117,  239 => 116,  234 => 114,  227 => 110,  223 => 108,  220 => 107,  218 => 106,  215 => 105,  208 => 101,  203 => 99,  198 => 97,  194 => 95,  191 => 94,  189 => 93,  184 => 91,  180 => 90,  176 => 89,  172 => 88,  168 => 87,  163 => 86,  157 => 83,  153 => 82,  150 => 81,  148 => 80,  143 => 78,  139 => 77,  136 => 76,  134 => 75,  129 => 73,  126 => 72,  124 => 71,  119 => 69,  116 => 68,  113 => 67,  111 => 66,  108 => 65,  101 => 61,  94 => 57,  91 => 56,  86 => 54,  81 => 53,  78 => 52,  72 => 49,  69 => 48,  67 => 47,  62 => 45,  55 => 41,  51 => 39,  49 => 38,  44 => 37,  41 => 36,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/xtrax/templates/view/views-view.html.twig", "/home/deepsea1/public_html/thedungeonsociety/themes/xtrax/templates/view/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 35);
        static $filters = array("escape" => 37, "t" => 205);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
