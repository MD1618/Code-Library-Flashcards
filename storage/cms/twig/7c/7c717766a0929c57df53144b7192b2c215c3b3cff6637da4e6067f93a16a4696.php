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

/* C:\xampp\htdocs\FlashCards/plugins/rainlab/user/components/account/signin.htm */
class __TwigTemplate_b0eef23c75aa400bd308e59093bef6ebfd359e6f2a4e2d88110a82e42054bde7 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSignin"]);
        echo "

    <div class=\"form-group\">
        <label for=\"userSigninLogin\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["loginAttributeLabel"] ?? null), "html", null, true);
        echo "</label>
        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"Enter your ";
        // line 10
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["loginAttributeLabel"] ?? null)), "html", null, true);
        echo "\" />
    </div>

    <div class=\"form-group\">
        <label for=\"userSigninPassword\">Password</label>
        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"Enter your password\" />
    </div>

    ";
        // line 23
        if ((($context["rememberLoginMode"] ?? null) == "ask")) {
            // line 24
            echo "    <div class=\"form-group\">
        <div class=\"checkbox\">
        <label><input name=\"remember\" type=\"checkbox\" value=\"1\">Stay logged in</label>
        </div>
    </div>
    ";
        }
        // line 30
        echo "
    <button type=\"submit\" class=\"btn btn-default\">Sign in</button>

";
        // line 33
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\FlashCards/plugins/rainlab/user/components/account/signin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 33,  76 => 30,  68 => 24,  66 => 23,  50 => 10,  41 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_ajax('onSignin') }}

    <div class=\"form-group\">
        <label for=\"userSigninLogin\">{{ loginAttributeLabel }}</label>
        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"Enter your {{ loginAttributeLabel|lower }}\" />
    </div>

    <div class=\"form-group\">
        <label for=\"userSigninPassword\">Password</label>
        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"Enter your password\" />
    </div>

    {% if rememberLoginMode == 'ask' %}
    <div class=\"form-group\">
        <div class=\"checkbox\">
        <label><input name=\"remember\" type=\"checkbox\" value=\"1\">Stay logged in</label>
        </div>
    </div>
    {% endif %}

    <button type=\"submit\" class=\"btn btn-default\">Sign in</button>

{{ form_close() }}
", "C:\\xampp\\htdocs\\FlashCards/plugins/rainlab/user/components/account/signin.htm", "");
    }
}
