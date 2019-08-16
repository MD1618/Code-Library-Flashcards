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

/* C:\xampp\htdocs\FlashCards/themes/flashcards/pages/home.htm */
class __TwigTemplate_d56d73574dc5580f01e7cfd1be26641da5c409d9bac2d2511be9d92ef4bed702 extends \Twig\Template
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
        echo "<div class=\"\" style=\"display:grid;justify-content:space-evenly;margin-top:100px;\">
    <object style=\"width:200px;margin:10px;\" id=\"svgObjectLarge\" type=\"image/svg+xml\" data=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/svg/MDWDLogo2.3.svg");
        echo "\" class=\"logo\"></object>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\FlashCards/themes/flashcards/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"\" style=\"display:grid;justify-content:space-evenly;margin-top:100px;\">
    <object style=\"width:200px;margin:10px;\" id=\"svgObjectLarge\" type=\"image/svg+xml\" data=\"{{ 'assets/svg/MDWDLogo2.3.svg'|theme }}\" class=\"logo\"></object>
</div>", "C:\\xampp\\htdocs\\FlashCards/themes/flashcards/pages/home.htm", "");
    }
}
