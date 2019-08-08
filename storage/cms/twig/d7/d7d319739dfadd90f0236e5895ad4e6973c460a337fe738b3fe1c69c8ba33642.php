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

/* C:\xampp\htdocs\FlashCards/themes/flashcards/pages/decks.htm */
class __TwigTemplate_03afd10dcaf7fa9f789117158f2c37c493e189310fc20b953c7997cade147fe2 extends \Twig\Template
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
        // line 1
        echo "<h1>Decks</h1>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\FlashCards/themes/flashcards/pages/decks.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Decks</h1>", "C:\\xampp\\htdocs\\FlashCards/themes/flashcards/pages/decks.htm", "");
    }
}
