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

/* project/print.html.twig */
class __TwigTemplate_ec7d21bff47fd2fd26d8f4810b6c957b571a354597fbb65ddb6f2ccbb6a8e4fd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/print.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/print.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project/print.html.twig", 1);
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

        echo "Projet";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "
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
        echo "\t";
        // line 9
        echo "
\t<h1>Projet
\t\t";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Description</th>
\t\t\t\t<td>";
        // line 25
        echo twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Date</th>
\t\t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 29, $this->source); })()), "date", [], "any", false, false, false, 29), "m Y"), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Nom de l'Image</th>
\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 33, $this->source); })()), "imageFilename", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Image liée</th>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 38, $this->source); })()), "imageFilename", [], "any", false, false, false, 38))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 38, $this->source); })()), "imageFilename", [], "any", false, false, false, 38))), "html", null, true);
        echo "\"></a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Compétences obtenues</th>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["project"], "skill", [], "any", false, false, false, 44));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 45
            echo "\t\t\t\t\t\t<i id=\"skillPrint\" class=\"mdi mdi-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "linkImg", [], "any", false, false, false, 45), "html", null, true);
            echo "\"></i>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\">Aucune compétence présente.</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t</tr>
\t\t</tbody>
\t</td>
</tr></tbody></table><a class=\"btn btn-primary\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_project");
        echo "\">Retour</a><a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_project_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\">Editer</a>";
        echo twig_include($this->env, $context, "project/_delete.html.twig");
        echo "<button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#deleteModal";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), "html", null, true);
        echo "\"><i class=\"mdi mdi-delete\"></i>Supprimer</button></form>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project/print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 54,  175 => 51,  166 => 47,  158 => 45,  153 => 44,  142 => 38,  134 => 33,  127 => 29,  120 => 25,  113 => 21,  106 => 17,  97 => 11,  93 => 9,  91 => 7,  81 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Projet{{ project.name }}
{% endblock %}

{% block body %}
\t{# 
\t\t{{ include('project/_delete.html.twig') }} #}

\t<h1>Projet
\t\t{{project.name}}</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<td>{{ project.id }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<td>{{ project.name }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Description</th>
\t\t\t\t<td>{{ project.description|raw }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Date</th>
\t\t\t\t<td>{{ project.date|date('m Y') }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Nom de l'Image</th>
\t\t\t\t<td>{{ project.imageFilename }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Image liée</th>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"{{ asset('uploads/images/' ~ project.imageFilename) }}\"><img src=\"{{ asset('uploads/images/' ~ project.imageFilename) }}\"></a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Compétences obtenues</th>
\t\t\t\t<td>
\t\t\t\t\t{% for project in project.skill %}
\t\t\t\t\t\t<i id=\"skillPrint\" class=\"mdi mdi-{{ project.linkImg }}\"></i>
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\">Aucune compétence présente.</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tr>
\t\t</tbody>
\t</td>
</tr></tbody></table><a class=\"btn btn-primary\" href=\"{{ path('app_admin_project') }}\">Retour</a><a class=\"btn btn-primary\" href=\"{{ path('app_admin_project_edit', {'id': project.id}) }}\">Editer</a>{{ include('project/_delete.html.twig') }}<button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#deleteModal{{ project.id }}\"><i class=\"mdi mdi-delete\"></i>Supprimer</button></form>{% endblock %}
", "project/print.html.twig", "/var/www/ProjetPortfolio/templates/project/print.html.twig");
    }
}
