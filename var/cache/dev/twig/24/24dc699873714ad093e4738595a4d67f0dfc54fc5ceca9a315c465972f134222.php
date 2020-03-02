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

/* security/login.html.twig */
class __TwigTemplate_a061234b30f48eaf223a657cab4e4077dc774bf7aa763af2c1aa2ca1281818dd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "\tConnexion
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<form method=\"post\">

\t\t<div class=\"formFade\">
\t\t\t<div id=\"formLogin\">


\t\t\t\t<form>
\t\t\t\t\t<h2 id=\"connectlabel\" class=\"fadeIn first\">Se connecter</h2>

\t\t\t\t\t";
        // line 22
        echo "\t\t\t\t\t<input
\t\t\t\t\ttype=\"email\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"fadeIn second\" placeholder=\"Email\" ";
        echo ">

\t\t\t\t\t";
        // line 26
        echo "
\t\t\t\t\t<label for=\"inputPassword\">Mot de passe</label>
\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"fadeIn third\" required>

\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
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
        // line 40
        echo "/></br></br>
\t\t\t\t\t";
        // line 41
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 42, $this->source); })()), "messageKey", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 42, $this->source); })()), "messageData", [], "any", false, false, false, 42), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t";
        }
        // line 44
        echo "
\t\t\t\t\t";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)) {
            // line 46
            echo "\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\tConnecté en tant que: 
\t\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "username", [], "any", false, false, false, 48), "html", null, true);
            echo " </br>
\t\t\t\t\t\t\t<a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se Déconnecter</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 52
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 52,  153 => 49,  149 => 48,  145 => 46,  143 => 45,  140 => 44,  134 => 42,  132 => 41,  129 => 40,  116 => 30,  110 => 26,  104 => 23,  101 => 22,  90 => 12,  80 => 11,  69 => 8,  59 => 7,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script> #}

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

{#
                Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                See https://symfony.com/doc/current/security/remember_me.html
        
                <div class=\"checkbox mb-3\">
                    <label>
                        <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                    </label>
                </div>
            #}
", "security/login.html.twig", "/var/www/ProjetPortfolio/templates/security/login.html.twig");
    }
}
