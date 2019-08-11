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

/* C:\xampp\htdocs\FlashCards/themes/flashcards/pages/deck-details.htm */
class __TwigTemplate_0a51191c137a066d04a90002937161e569ccfb8f7c0cfed067c25a85dbd95c5d extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, false, 3);
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), ($context["displayColumn"] ?? null), [], "any", false, false, false, 6), "html", null, true);
            echo "
     ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "cards", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 8
                echo "        <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "front", [], "any", false, false, false, 8), "html", null, true);
                echo "</p>


     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\FlashCards/themes/flashcards/pages/deck-details.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  55 => 8,  51 => 7,  46 => 6,  44 => 5,  41 => 4,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
    {{ attribute(record, displayColumn) }}
     {% for card in record.cards %}
        <p>{{card.front}}</p>


     {% endfor %}
{% else %}
    {{ notFoundMessage }}
{% endif %}", "C:\\xampp\\htdocs\\FlashCards/themes/flashcards/pages/deck-details.htm", "");
    }
}
