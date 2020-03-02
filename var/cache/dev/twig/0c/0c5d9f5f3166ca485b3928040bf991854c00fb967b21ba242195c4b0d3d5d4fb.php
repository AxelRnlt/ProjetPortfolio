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

/* skill/create.html.twig */
class __TwigTemplate_11acbf8c2dca738ae72ec82f96cc2d56ddb098e5a751aa34d6a53d0d01420213 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "skill/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "skill/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "skill/create.html.twig", 1);
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

        echo "Nouvelle Compétence";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Créer nouvelle compétence</h1>

    <form name=\"skill\" method=\"post\">
        <div id=\"skill\">
            <div class=\"form-group\">
                <label class=\"required\" for=\"skill_name\">
                    Nom de la Compétence
                </label>
                <input id=\"skill_name\" class=\"form-control\" type=\"text\" name=\"skill[name]\" required=\"required\">
            </div>
            <div class=\"form-group\">
                <label class=\"required\" for=\"skill_category\">
                    Catégorie
                </label>
                <input id=\"skill_category\" class=\"form-control\" type=\"text\" name=\"skill[category]\" required=\"required\">
            </div>  
            ";
        // line 23
        echo "            <div class=\"form-group\">
                <label class=\"required\" for=\"skill_linkImg\">
                    Lien Image
                </label>
                <input id=\"skill_linkImg\" class=\"form-control\" type=\"text\" name=\"skill[linkImg]\" required=\"required\">
            </div>  
            <div class=\"form-group\">
                <button id=\"skill_save\" class=\"btn-primary btn\" type=\"submit\" name=\"skill[save]\">Sauvegarder</button>
            </div>
        </div>
    </form>

    <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skill");
        echo "\">Revenir à la liste</a>
    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\">Revenir au Menu principal</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "skill/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 36,  120 => 35,  106 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Compétence{% endblock %}

{% block body %}
    <h1>Créer nouvelle compétence</h1>

    <form name=\"skill\" method=\"post\">
        <div id=\"skill\">
            <div class=\"form-group\">
                <label class=\"required\" for=\"skill_name\">
                    Nom de la Compétence
                </label>
                <input id=\"skill_name\" class=\"form-control\" type=\"text\" name=\"skill[name]\" required=\"required\">
            </div>
            <div class=\"form-group\">
                <label class=\"required\" for=\"skill_category\">
                    Catégorie
                </label>
                <input id=\"skill_category\" class=\"form-control\" type=\"text\" name=\"skill[category]\" required=\"required\">
            </div>  
            {# disparition -> #}
            <div class=\"form-group\">
                <label class=\"required\" for=\"skill_linkImg\">
                    Lien Image
                </label>
                <input id=\"skill_linkImg\" class=\"form-control\" type=\"text\" name=\"skill[linkImg]\" required=\"required\">
            </div>  
            <div class=\"form-group\">
                <button id=\"skill_save\" class=\"btn-primary btn\" type=\"submit\" name=\"skill[save]\">Sauvegarder</button>
            </div>
        </div>
    </form>

    <a href=\"{{ path('app_admin_skill') }}\">Revenir à la liste</a>
    <a href=\"{{ path('app_admin') }}\">Revenir au Menu principal</a>

{% endblock %}
", "skill/create.html.twig", "/var/www/ProjetPortfolio/templates/skill/create.html.twig");
    }
}
