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

/* back/security/login.html.twig */
class __TwigTemplate_b4204d502f0c724a20adeedd8222e7aebb528a359ecff0a5f1520d6f012e8b07 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tConnexion
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<form method=\"post\">

\t\t<div class=\"formFade\">
\t\t\t<div id=\"formLogin\">


\t\t\t\t<form>
\t\t\t\t\t<h2 id=\"connectlabel\" class=\"fadeIn first\">Se connecter</h2>

\t\t\t\t\t";
        // line 18
        echo "\t\t\t\t\t<input
\t\t\t\t\ttype=\"email\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"fadeIn second\" placeholder=\"Email\" ";
        echo ">

\t\t\t\t\t";
        // line 22
        echo "
\t\t\t\t\t<label for=\"inputPassword\">Mot de passe</label>
\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"fadeIn third\" required>

\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t\t</form>

\t\t\t\t<div id=\"formFooter\">
\t\t\t\t\t<button class=\"btn btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\tValider
\t\t\t\t\t</button>
\t\t\t\t\t</br>
\t\t\t\t\t<label for=\"remember_me\">Rester Connecter</label>
\t\t\t\t\t<input class=\"checkboxRemember\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" ";
        // line 36
        echo "/></br></br>
\t\t\t\t\t";
        // line 37
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 37, $this->source); })())) {
            // line 38
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })()), "messageKey", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })()), "messageData", [], "any", false, false, false, 38), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t";
        }
        // line 40
        echo "
\t\t\t\t\t";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
            // line 42
            echo "\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\tConnecté en tant que: 
\t\t\t\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "username", [], "any", false, false, false, 44), "html", null, true);
            echo " </br>
\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se Déconnecter</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 48,  153 => 45,  149 => 44,  145 => 42,  143 => 41,  140 => 40,  134 => 38,  132 => 37,  129 => 36,  116 => 26,  110 => 22,  104 => 19,  101 => 18,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tConnexion
{% endblock %}

{% block body %}
\t<form method=\"post\">

\t\t<div class=\"formFade\">
\t\t\t<div id=\"formLogin\">


\t\t\t\t<form>
\t\t\t\t\t<h2 id=\"connectlabel\" class=\"fadeIn first\">Se connecter</h2>

\t\t\t\t\t{# <label for=\"inputEmail\">Email</label> #}
\t\t\t\t\t<input
\t\t\t\t\ttype=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"fadeIn second\" placeholder=\"Email\" {# required autofocus #}>

\t\t\t\t\t{#<input type=\"text\" id=\"login\" class=\"fadeIn second\" name=\"login\" placeholder=\"login\">#}

\t\t\t\t\t<label for=\"inputPassword\">Mot de passe</label>
\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"fadeIn third\" required>

\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t</form>

\t\t\t\t<div id=\"formFooter\">
\t\t\t\t\t<button class=\"btn btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\t\tValider
\t\t\t\t\t</button>
\t\t\t\t\t</br>
\t\t\t\t\t<label for=\"remember_me\">Rester Connecter</label>
\t\t\t\t\t<input class=\"checkboxRemember\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" {# checked #}/></br></br>
\t\t\t\t\t{% if error %}
\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\tConnecté en tant que: 
\t\t\t\t\t\t\t{{ app.user.username }} </br>
\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Se Déconnecter</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</form>
{% endblock %}
", "back/security/login.html.twig", "/var/www/ProjetPortfolio/templates/back/security/login.html.twig");
    }
}
