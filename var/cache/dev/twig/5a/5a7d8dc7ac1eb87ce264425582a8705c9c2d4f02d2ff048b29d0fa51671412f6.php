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

/* back/project/index.html.twig */
class __TwigTemplate_a5f66eb2d0968c454cfddcfaf11bc30d639c634577f33d85e6f349c1ee16371c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/project/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/project/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/project/index.html.twig", 1);
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

        echo "Liste Projets
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<h1>Liste des Projets</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Compétences</th>
\t\t\t\t<th>Image</th>
\t\t\t</tr>
\t\t</thead>

\t\t<tbody>
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 22
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 24);
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "date", [], "any", false, false, false, 25), "m Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["project"], "skill", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 28
                echo "\t\t\t\t\t\t\t<i id=\"skillPrint\" class=\"mdi mdi-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "linkImg", [], "any", false, false, false, 28), "html", null, true);
                echo "\"></i>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"print-img\">
\t\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["project"], "imageFilename", [], "any", false, false, false, 32))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["project"], "imageFilename", [], "any", false, false, false, 32))), "html", null, true);
            echo "\"></a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-success btn-sm\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_admin_project_print", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-file-find\"></i>
\t\t\t\t\t\t\tAfficher
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-primary btn-sm\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_admin_project_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-pencil\"></i>
\t\t\t\t\t\t\tEditer
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            // line 43
            echo twig_include($this->env, $context, "back/project/_delete.html.twig");
            echo "
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#deleteModal";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-delete\"></i>
\t\t\t\t\t\t\tSupprimer
\t\t\t\t\t\t</button>
\t\t\t\t\t\t";
            // line 48
            echo twig_include($this->env, $context, "back/project/_deleteImage.html.twig");
            echo "
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#deleteImageModal";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-delete\"></i>
\t\t\t\t\t\t\tSupprimer l'image
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 56
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\">Aucun Projet présent.</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t</tbody>
\t</table>

\t<a class=\"btn btn-primary\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_admin_project_new");
        echo "\">
\t\t<i class=\"mdi mdi-content-save\"></i>
\t\tCréer un nouveau Projet
\t</a>
\t<a class=\"btn btn-primary\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_admin");
        echo "\">Retour</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/project/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 67,  227 => 63,  222 => 60,  213 => 56,  193 => 49,  189 => 48,  182 => 44,  178 => 43,  171 => 39,  164 => 35,  156 => 32,  152 => 30,  143 => 28,  139 => 27,  134 => 25,  130 => 24,  126 => 23,  123 => 22,  105 => 21,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste Projets
{% endblock %}

{% block body %}
\t<h1>Liste des Projets</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Compétences</th>
\t\t\t\t<th>Image</th>
\t\t\t</tr>
\t\t</thead>

\t\t<tbody>
\t\t\t{% for project in projects %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ project.name }}</td>
\t\t\t\t\t<td>{{ project.description|raw }}</td>
\t\t\t\t\t<td>{{ project.date|date('m Y') }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% for project in project.skill %}
\t\t\t\t\t\t\t<i id=\"skillPrint\" class=\"mdi mdi-{{ project.linkImg }}\"></i>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"print-img\">
\t\t\t\t\t\t<a href=\"{{ asset('uploads/images/' ~ project.imageFilename) }}\"><img src=\"{{ asset('uploads/images/' ~ project.imageFilename) }}\"></a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-success btn-sm\" href=\"{{ path('app_back_admin_project_print', {'id': project.id}) }}\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-file-find\"></i>
\t\t\t\t\t\t\tAfficher
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_back_admin_project_edit', {'id': project.id}) }}\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-pencil\"></i>
\t\t\t\t\t\t\tEditer
\t\t\t\t\t\t</a>
\t\t\t\t\t\t{{ include('back/project/_delete.html.twig') }}
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#deleteModal{{ project.id }}\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-delete\"></i>
\t\t\t\t\t\t\tSupprimer
\t\t\t\t\t\t</button>
\t\t\t\t\t\t{{ include('back/project/_deleteImage.html.twig') }}
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#deleteImageModal{{ project.id }}\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-delete\"></i>
\t\t\t\t\t\t\tSupprimer l'image
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\">Aucun Projet présent.</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<a class=\"btn btn-primary\" href=\"{{ path('app_back_admin_project_new') }}\">
\t\t<i class=\"mdi mdi-content-save\"></i>
\t\tCréer un nouveau Projet
\t</a>
\t<a class=\"btn btn-primary\" href=\"{{ path('app_back_admin') }}\">Retour</a>

{% endblock %}
", "back/project/index.html.twig", "/var/www/ProjetPortfolio/templates/back/project/index.html.twig");
    }
}
