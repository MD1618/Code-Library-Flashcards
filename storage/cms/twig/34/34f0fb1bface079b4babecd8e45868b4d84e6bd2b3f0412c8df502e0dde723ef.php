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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 4
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("welcome.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 5
        echo "    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>About </h2>
    </div>
    <p class=\"lead\">
       This website is a flash card based <a href=\"https://en.wikipedia.org/wiki/Spaced_retrieval\">Spaced Retrieval</a> learning tool. 
       <br>
       A copy of <a href=\"https://apps.ankiweb.net/\">Anki Web.</a>
    </p>

   

    <!-- Content blocks -->
    <h3>How to use it.</h3>
    <p class=\"lead\">
        Rate the difficulty you had in recalling the answer and the app will judge how long to leave it until it asks the question again.
        <br>
        This ensures the maximum effort for recalling the information and forging stronger neural connections. Just like building muscles in the gym.
        <br>
        Efficient learning.
    </p>
   

    <hr />

    


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
        return array (  43 => 5,  39 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<div class=\"jumbotron\">
    <div class=\"container\">
        {% content \"welcome.htm\" %}
    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>About </h2>
    </div>
    <p class=\"lead\">
       This website is a flash card based <a href=\"https://en.wikipedia.org/wiki/Spaced_retrieval\">Spaced Retrieval</a> learning tool. 
       <br>
       A copy of <a href=\"https://apps.ankiweb.net/\">Anki Web.</a>
    </p>

   

    <!-- Content blocks -->
    <h3>How to use it.</h3>
    <p class=\"lead\">
        Rate the difficulty you had in recalling the answer and the app will judge how long to leave it until it asks the question again.
        <br>
        This ensures the maximum effort for recalling the information and forging stronger neural connections. Just like building muscles in the gym.
        <br>
        Efficient learning.
    </p>
   

    <hr />

    


</div>", "C:\\xampp\\htdocs\\FlashCards/themes/flashcards/pages/home.htm", "");
    }
}
