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

/* C:\xampp\htdocs\FlashCards/themes/flashcards/partials/site/header.htm */
class __TwigTemplate_a665bf46de8b9616886939957e42b5b58b21dd78f3b6247d8993acd4a9ad3748 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <object style=\"width:80px;margin:10px;float:left;\" id=\"svgObject\" type=\"image/svg+xml\" data=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/svg/MDWDLogo2.3.svg");
        echo "\" class=\"logo\"></object>
            <a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Code Tools</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                ";
        // line 19
        echo "                
                ";
        // line 21
        echo "
                ";
        // line 22
        if (($context["user"] ?? null)) {
            // line 23
            echo "                    <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23) == "code")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("code");
            echo "\">Code</a></li>
                    <li class=\"";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24) == "decks")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("decks");
            echo "\">Decks</a></li>
                    <li class=\"";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25) == "profile")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\">Profile</a></li>
                    <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
                     <li ><a href=\"backend\" target=\"_blank\" rel=\"noopener noreferrer\">Backend</a></li>
                ";
        } else {
            // line 29
            echo "                   <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29) == "login")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\">Login</a></li>
                ";
        }
        // line 31
        echo "                
                
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\FlashCards/themes/flashcards/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 31,  95 => 29,  84 => 25,  76 => 24,  67 => 23,  65 => 22,  62 => 21,  59 => 19,  51 => 13,  47 => 12,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <object style=\"width:80px;margin:10px;float:left;\" id=\"svgObject\" type=\"image/svg+xml\" data=\"{{ 'assets/svg/MDWDLogo2.3.svg'|theme }}\" class=\"logo\"></object>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Code Tools</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                {# <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li> #}
                
                {# <li class=\"{% if this.page.id == 'plugins' %}active{% endif %}\"><a href=\"{{ 'plugins'|page }}\">About</a></li> #}

                {% if user %}
                    <li class=\"{% if this.page.id == 'code' %}active{% endif %}\"><a href=\"{{ 'code'|page }}\">Code</a></li>
                    <li class=\"{% if this.page.id == 'decks' %}active{% endif %}\"><a href=\"{{ 'decks'|page }}\">Decks</a></li>
                    <li class=\"{% if this.page.id == 'profile' %}active{% endif %}\"><a href=\"{{ 'login'|page }}\">Profile</a></li>
                    <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
                     <li ><a href=\"backend\" target=\"_blank\" rel=\"noopener noreferrer\">Backend</a></li>
                {% else %}
                   <li class=\"{% if this.page.id == 'login' %}active{% endif %}\"><a href=\"{{ 'login'|page }}\">Login</a></li>
                {% endif %}
                
                
            </ul>
        </div>
    </div>
</nav>", "C:\\xampp\\htdocs\\FlashCards/themes/flashcards/partials/site/header.htm", "");
    }
}
