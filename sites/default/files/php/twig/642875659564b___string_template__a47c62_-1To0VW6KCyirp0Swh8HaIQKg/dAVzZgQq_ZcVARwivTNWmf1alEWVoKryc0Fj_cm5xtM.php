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

/* __string_template__a47c62fed6af916cb618df6c67f8c05a */
class __TwigTemplate_bc323330753912df3bdad697fef02e3f extends \Twig\Template
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
        echo "<div class=\"col-lg-3 col-md-4 col-sm-6 col-12 pb-4\">
   <div class=\"team-box wow fadeIn\" data-wow-delay=\"300ms\">
      <div class=\"image\">
";
        // line 4
        if (($context["field_team_member_bio"] ?? null)) {
            // line 5
            echo "<div class=\"team-member-bio\">
";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_team_member_bio"] ?? null), 6, $this->source), "html", null, true);
            echo "
</div>
";
        }
        // line 9
        echo "         <img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_avatar"] ?? null), 9, $this->source), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 9, $this->source), "html", null, true);
        echo "\">
      </div>
      <div class=\"team-content\">
         <h4 class=\"darkcolor\">";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 12, $this->source), "html", null, true);
        echo "</h4>
         <p>";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_job_title"] ?? null), 13, $this->source), "html", null, true);
        echo "</p>
         <ul class=\"social-icons-simple\">
";
        // line 15
        if (($context["field_facebook"] ?? null)) {
            // line 16
            echo "            <li><a target=\"_blank\" class=\"facebook\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_facebook"] ?? null), 16, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i> </a> </li>
";
        }
        // line 18
        if (($context["field_twitter"] ?? null)) {
            // line 19
            echo "            <li><a target=\"_blank\" class=\"twitter\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_twitter"] ?? null), 19, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fab fa-twitter\"></i> </a> </li>
";
        }
        // line 21
        if (($context["field_instagram"] ?? null)) {
            // line 22
            echo "            <li><a target=\"_blank\" class=\"insta\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_instagram"] ?? null), 22, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fab fa-instagram\"></i> </a> </li>
";
        }
        // line 24
        if (($context["field_field_tiktok"] ?? null)) {
            // line 25
            echo "            <li><a target=\"_blank\" class=\"tiktok\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_field_tiktok"] ?? null), 25, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fab fa-tiktok\"></i> </a> </li>
";
        }
        // line 27
        if (($context["field_art_station"] ?? null)) {
            // line 28
            echo "            <li><a target=\"_blank\" class=\"artstation\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_art_station"] ?? null), 28, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fab fa-artstation\"></i> </a> </li>
";
        }
        // line 30
        echo "         </ul>
      </div>
   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__a47c62fed6af916cb618df6c67f8c05a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 30,  107 => 28,  105 => 27,  99 => 25,  97 => 24,  91 => 22,  89 => 21,  83 => 19,  81 => 18,  75 => 16,  73 => 15,  68 => 13,  64 => 12,  55 => 9,  49 => 6,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a47c62fed6af916cb618df6c67f8c05a", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
