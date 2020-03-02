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

/* back/skill/index.html.twig */
class __TwigTemplate_1ee6473618cb1dcc2abf1faae462d1f0212671c7d6b0df867bb05251c2e5500e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/skill/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/skill/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/skill/index.html.twig", 1);
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

        echo "Liste Compétences
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
        echo "\t<h1>Liste des Compétences</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Catégorie</th>
\t\t\t\t<th>Icône</th>
\t\t\t</tr>
\t\t</thead>

\t\t<tbody>
\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) || array_key_exists("skills", $context) ? $context["skills"] : (function () { throw new RuntimeError('Variable "skills" does not exist.', 19, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 20
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "category", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"icon-table\">
\t\t\t\t\t\t<i class=\"mdi mdi-";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "linkImg", [], "any", false, false, false, 24), "html", null, true);
            echo "\"></i>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-success btn-sm\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_admin_skill_print", ["id" => twig_get_attribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-file-find\"></i>
\t\t\t\t\t\t\tAfficher
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-primary btn-sm\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_admin_skill_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-pencil\"></i>
\t\t\t\t\t\t\tEditer
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            // line 35
            echo twig_include($this->env, $context, "back/skill/_delete.html.twig");
            echo "
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#deleteModal";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-delete\"></i>
\t\t\t\t\t\t\tSupprimer
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
            // line 44
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\">Aucune compétence présente.</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t</tbody>
\t</table>

\t<a class=\"btn btn-primary\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_admin_skill_create");
        echo "\">
\t\t<i class=\"mdi mdi-content-save\"></i>
\t\tCréer nouvelle compétence
\t</a>
\t<a class=\"btn btn-primary\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_admin");
        echo "\">Retour</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/skill/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 55,  192 => 51,  187 => 48,  178 => 44,  157 => 36,  153 => 35,  146 => 31,  139 => 27,  133 => 24,  128 => 22,  124 => 21,  121 => 20,  103 => 19,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste Compétences
{% endblock %}

{% block body %}
\t<h1>Liste des Compétences</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Catégorie</th>
\t\t\t\t<th>Icône</th>
\t\t\t</tr>
\t\t</thead>

\t\t<tbody>
\t\t\t{% for skill in skills %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ skill.name }}</td>
\t\t\t\t\t<td>{{ skill.category }}</td>
\t\t\t\t\t<td class=\"icon-table\">
\t\t\t\t\t\t<i class=\"mdi mdi-{{skill.linkImg}}\"></i>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-success btn-sm\" href=\"{{ path('app_back_admin_skill_print', {'id': skill.id}) }}\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-file-find\"></i>
\t\t\t\t\t\t\tAfficher
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_back_admin_skill_edit', {'id': skill.id}) }}\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-pencil\"></i>
\t\t\t\t\t\t\tEditer
\t\t\t\t\t\t</a>
\t\t\t\t\t\t{{ include('back/skill/_delete.html.twig') }}
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#deleteModal{{ skill.id }}\">
\t\t\t\t\t\t\t<i class=\"mdi mdi-delete\"></i>
\t\t\t\t\t\t\tSupprimer
\t\t\t\t\t\t</button>

\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\">Aucune compétence présente.</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<a class=\"btn btn-primary\" href=\"{{ path('app_back_admin_skill_create') }}\">
\t\t<i class=\"mdi mdi-content-save\"></i>
\t\tCréer nouvelle compétence
\t</a>
\t<a class=\"btn btn-primary\" href=\"{{ path('app_back_admin') }}\">Retour</a>

{% endblock %}
", "back/skill/index.html.twig", "/var/www/ProjetPortfolio/templates/back/skill/index.html.twig");
    }
}
