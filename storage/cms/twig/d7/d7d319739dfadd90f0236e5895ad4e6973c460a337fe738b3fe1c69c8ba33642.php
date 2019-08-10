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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
        // line 7
        echo "
<ul class=\"record-list\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 10
            echo "        <li>
            ";
            // line 12
            echo "            ";
            ob_start(function () { return ''; });
            // line 13
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 14
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 14)]);
                echo "\">
                ";
            }
            // line 16
            echo "
                ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], ($context["displayColumn"] ?? null), [], "any", false, false, false, 17), "html", null, true);
            echo "
                <br>
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "cards", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 20
                echo "                    <p>";
                echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                echo "</p>


                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 25
                echo "                    </a>
                ";
            }
            // line 27
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 28
            echo "        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</ul>

";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 34) > 1)) {
            // line 35
            echo "    <ul class=\"pagination\">
        ";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 36) > 1)) {
                // line 37
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 37), "baseFileName", [], "any", false, false, false, 37), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 37) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 39
            echo "
        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 40)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 41
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 41) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 42
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 42), "baseFileName", [], "any", false, false, false, 42), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
        ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 46) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 46))) {
                // line 47
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 47), "baseFileName", [], "any", false, false, false, 47), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 47) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 49
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\FlashCards/themes/flashcards/pages/decks.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 49,  164 => 47,  162 => 46,  159 => 45,  148 => 42,  143 => 41,  139 => 40,  136 => 39,  130 => 37,  128 => 36,  125 => 35,  123 => 34,  119 => 32,  110 => 30,  104 => 28,  101 => 27,  97 => 25,  94 => 24,  83 => 20,  79 => 19,  74 => 17,  71 => 16,  65 => 14,  62 => 13,  59 => 12,  56 => 10,  51 => 9,  47 => 7,  45 => 6,  43 => 5,  41 => 4,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<ul class=\"record-list\">
    {% for record in records %}
        <li>
            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

                {{ attribute(record, displayColumn) }}
                <br>
                {% for card in record.cards %}
                    <p>{{card}}</p>


                {% endfor %}
                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}
        </li>
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</ul>

{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}", "C:\\xampp\\htdocs\\FlashCards/themes/flashcards/pages/decks.htm", "");
    }
}
