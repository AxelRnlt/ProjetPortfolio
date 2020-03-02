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

/* front/home.html.twig */
class __TwigTemplate_eff539f236baca7f1de4c65fb1b72959a3d8de1ac380d1357d513a5506be8d84 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home.html.twig"));

        $this->parent = $this->loadTemplate("front/front.html.twig", "front/home.html.twig", 1);
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

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "\t<div class=\"intro\">
\t\t<h1 class=\"intro-name\">Axel Renault</h1>

\t\t<div class=\"intro-description\">
\t\t\t<p>Ad culpa minim qui
\t\t\t\t<span>ipsum labore excepteur</span>
\t\t\t\tconsectetur. Labore aliqua nisi eiusmod irure magna pariatur ipsum elit pariatur culpa qui. Sint dolore sint consectetur elit. Laboris aliquip quis dolor enim anim minim. Occaecat incididunt culpa sunt fugiat sint Lorem duis amet. Enim ex mollit pariatur nulla sint id cillum minim Lorem veniam occaecat qui ea.</p>
\t\t</div>

\t\t<div class=\"intro-main-socialnetworks\">
\t\t\t<ul class=\"intro-social-networks-menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://www.linkedin.com/in/axel-rnlt-5b6943171/\" target=\"_blank\">Linkedin</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://twitter.com/rnlt_axel\" target=\"_blank\">Twitter</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://instagram.com/axelrnlt\" target=\"_blank\">Instagram</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"fond\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/front.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block content %}
\t<div class=\"intro\">
\t\t<h1 class=\"intro-name\">Axel Renault</h1>

\t\t<div class=\"intro-description\">
\t\t\t<p>Ad culpa minim qui
\t\t\t\t<span>ipsum labore excepteur</span>
\t\t\t\tconsectetur. Labore aliqua nisi eiusmod irure magna pariatur ipsum elit pariatur culpa qui. Sint dolore sint consectetur elit. Laboris aliquip quis dolor enim anim minim. Occaecat incididunt culpa sunt fugiat sint Lorem duis amet. Enim ex mollit pariatur nulla sint id cillum minim Lorem veniam occaecat qui ea.</p>
\t\t</div>

\t\t<div class=\"intro-main-socialnetworks\">
\t\t\t<ul class=\"intro-social-networks-menu\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://www.linkedin.com/in/axel-rnlt-5b6943171/\" target=\"_blank\">Linkedin</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://twitter.com/rnlt_axel\" target=\"_blank\">Twitter</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://instagram.com/axelrnlt\" target=\"_blank\">Instagram</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"fond\"></div>
{% endblock %}
", "front/home.html.twig", "/var/www/ProjetPortfolio/templates/front/home.html.twig");
    }
}
