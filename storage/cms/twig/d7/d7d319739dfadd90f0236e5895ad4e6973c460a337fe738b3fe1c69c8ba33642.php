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
        if (($context["user"] ?? null)) {
            // line 2
            echo "    ";
            $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, false, 2);
            // line 3
            echo "    ";
            $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, false, 3);
            // line 4
            echo "    ";
            $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 4);
            // line 5
            echo "    ";
            $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, false, 5);
            // line 6
            echo "    ";
            $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 6);
            // line 7
            echo "    ";
            $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 7);
            // line 8
            echo "
    <ul class=\"record-list\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 11
                echo "            <li>
                ";
                // line 13
                echo "                ";
                ob_start(function () { return ''; });
                // line 14
                echo "                    ";
                if (($context["detailsPage"] ?? null)) {
                    // line 15
                    echo "                        <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 15)]);
                    echo "\">
                    ";
                }
                // line 17
                echo "
                    ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], ($context["displayColumn"] ?? null), [], "any", false, false, false, 18), "html", null, true);
                echo "
                    <br>
                    ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "cards", [], "any", false, false, false, 20));
                foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                    // line 21
                    echo "                        <p>";
                    echo twig_escape_filter($this->env, $context["card"], "html", null, true);
                    echo "</p>


                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                    ";
                if (($context["detailsPage"] ?? null)) {
                    // line 26
                    echo "                        </a>
                    ";
                }
                // line 28
                echo "                ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 29
                echo "            </li>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 31
                echo "            <li class=\"no-data\">";
                echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    </ul>

    ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 35) > 1)) {
                // line 36
                echo "        <ul class=\"pagination\">
            ";
                // line 37
                if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 37) > 1)) {
                    // line 38
                    echo "                <li><a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 38), "baseFileName", [], "any", false, false, false, 38), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 38) - 1)]);
                    echo "\">&larr; Prev</a></li>
            ";
                }
                // line 40
                echo "
            ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 41)));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 42
                    echo "                <li class=\"";
                    echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 42) == $context["page"])) ? ("active") : (null));
                    echo "\">
                    <a href=\"";
                    // line 43
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 43), "baseFileName", [], "any", false, false, false, 43), [($context["pageParam"] ?? null) => $context["page"]]);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "
            ";
                // line 47
                if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 47) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 47))) {
                    // line 48
                    echo "                <li><a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 48), "baseFileName", [], "any", false, false, false, 48), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 48) + 1)]);
                    echo "\">Next &rarr;</a></li>
            ";
                }
                // line 50
                echo "        </ul>
    ";
            }
        } else {
            // line 53
            echo "<h1>Nope! Yer nae logged in pal. </h1>
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
        return array (  183 => 53,  178 => 50,  172 => 48,  170 => 47,  167 => 46,  156 => 43,  151 => 42,  147 => 41,  144 => 40,  138 => 38,  136 => 37,  133 => 36,  131 => 35,  127 => 33,  118 => 31,  112 => 29,  109 => 28,  105 => 26,  102 => 25,  91 => 21,  87 => 20,  82 => 18,  79 => 17,  73 => 15,  70 => 14,  67 => 13,  64 => 11,  59 => 10,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  43 => 4,  40 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if user %}
    {% set records = builderList.records %}
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
    {% endif %}
{% else %}
<h1>Nope! Yer nae logged in pal. </h1>
{% endif %}", "C:\\xampp\\htdocs\\FlashCards/themes/flashcards/pages/decks.htm", "");
    }
}
