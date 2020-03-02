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

/* home/index.html.twig */
class __TwigTemplate_61d3ab597b935f4d6b80639789939f8338f63032bc2d9263050dcc51c029289a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
\t<head>
\t\t";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "\t\t<meta charset=\"UTF-8\">
\t\t<title>Accueil</title>
\t</head>

\t<body>
\t\t<div class=\"global\">
\t\t\t<div class=\"menu\">
\t\t\t\t<ul class=\"items-menu\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"../projets/index.html.twig\">Projets</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Veilles</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">A Propos</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Contact</a>
\t\t\t\t\t</li>

\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"intro\">
\t\t\t\t<h1 class=\"intro-name\">Axel Renault</h1>

\t\t\t\t<div class=\"intro-description\">
\t\t\t\t\t<p>Ad culpa minim qui
\t\t\t\t\t\t<span>ipsum labore excepteur</span>
\t\t\t\t\t\tconsectetur. Labore aliqua nisi eiusmod irure magna pariatur ipsum elit pariatur culpa qui. Sint dolore sint consectetur elit. Laboris aliquip quis dolor enim anim minim. Occaecat incididunt culpa sunt fugiat sint Lorem duis amet. Enim ex mollit pariatur nulla sint id cillum minim Lorem veniam occaecat qui ea.</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"intro-main-socialnetworks\">
\t\t\t\t\t<ul class=\"intro-social-networks-menu\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.linkedin.com/in/axel-rnlt-5b6943171/\" target=\"_blank\">Linkedin</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://twitter.com/rnlt_axel\" target=\"_blank\">Twitter</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://instagram.com/axelrnlt\" target=\"_blank\">Instagram</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"fond\"></div>
\t\t</div>
\t</body>
</html></body></html></div>";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        echo "</body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("front");
        echo "
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=Barlow:400,700|PT+Sans|PT+Sans+Narrow:400,700&display=swap\" rel=\"stylesheet\">
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("front");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 62,  130 => 6,  120 => 5,  108 => 62,  53 => 9,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html>
\t<head>
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('front') }}
\t\t\t<link href=\"https://fonts.googleapis.com/css?family=Barlow:400,700|PT+Sans|PT+Sans+Narrow:400,700&display=swap\" rel=\"stylesheet\">
\t\t{% endblock %}
\t\t<meta charset=\"UTF-8\">
\t\t<title>Accueil</title>
\t</head>

\t<body>
\t\t<div class=\"global\">
\t\t\t<div class=\"menu\">
\t\t\t\t<ul class=\"items-menu\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"../projets/index.html.twig\">Projets</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Veilles</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">A Propos</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Contact</a>
\t\t\t\t\t</li>

\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"intro\">
\t\t\t\t<h1 class=\"intro-name\">Axel Renault</h1>

\t\t\t\t<div class=\"intro-description\">
\t\t\t\t\t<p>Ad culpa minim qui
\t\t\t\t\t\t<span>ipsum labore excepteur</span>
\t\t\t\t\t\tconsectetur. Labore aliqua nisi eiusmod irure magna pariatur ipsum elit pariatur culpa qui. Sint dolore sint consectetur elit. Laboris aliquip quis dolor enim anim minim. Occaecat incididunt culpa sunt fugiat sint Lorem duis amet. Enim ex mollit pariatur nulla sint id cillum minim Lorem veniam occaecat qui ea.</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"intro-main-socialnetworks\">
\t\t\t\t\t<ul class=\"intro-social-networks-menu\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.linkedin.com/in/axel-rnlt-5b6943171/\" target=\"_blank\">Linkedin</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://twitter.com/rnlt_axel\" target=\"_blank\">Twitter</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://instagram.com/axelrnlt\" target=\"_blank\">Instagram</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"fond\"></div>
\t\t</div>
\t</body>
</html></body></html></div>{% block javascripts %}{{ encore_entry_script_tags('front') }}{% endblock %}</body></html>
", "home/index.html.twig", "/var/www/ProjetPortfolio/templates/home/index.html.twig");
    }
}
