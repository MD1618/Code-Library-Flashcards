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

/* C:\xampp\htdocs\FlashCards/plugins/martin/decks/components/cards/default.htm */
class __TwigTemplate_ccf9fcf57c5c2cba6a9c9eff788fc3ba9990dfe7cc4fcb867fdff5d938816b86 extends \Twig\Template
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
        $context["cards"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cards", [], "any", false, false, false, 1);
        // line 2
        echo "
<ul>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cards"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 5
            echo "    <li>
        ";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["card"], "front", [], "any", false, false, false, 6);
            echo "
    </li>
    <li>
        ";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["card"], "back", [], "any", false, false, false, 9);
            echo "
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\FlashCards/plugins/martin/decks/components/cards/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  54 => 9,  48 => 6,  45 => 5,  41 => 4,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set cards = __SELF__.cards %}

<ul>
    {% for card in cards %}
    <li>
        {{ card.front|raw }}
    </li>
    <li>
        {{ card.back|raw }}
    </li>
    {% endfor %}
</ul>", "C:\\xampp\\htdocs\\FlashCards/plugins/martin/decks/components/cards/default.htm", "");
    }
}
