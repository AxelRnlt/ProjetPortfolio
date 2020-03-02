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

/* skill/index.html.twig */
class __TwigTemplate_0afc70b76d529523598dd53368cf23a7ad22515a9773d7bc797d9fac8c8445f2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "skill/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "skill/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "skill/index.html.twig", 1);
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

        echo "Liste Compétences";
        
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
        echo "    <h1>Liste des Compétences</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Catégorie</th>
                <th>Icône</th>
            </tr>
        </thead>

        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) || array_key_exists("skills", $context) ? $context["skills"] : (function () { throw new RuntimeError('Variable "skills" does not exist.', 18, $this->source); })()));
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
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "category", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td class=\"icon-table\">
                    <i class=\"mdi mdi-";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "linkImg", [], "any", false, false, false, 23), "html", null, true);
            echo "\"></i>
                </td>
                <td>
                    <a class=\"btn btn-success btn-sm\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skill_print", ["id" => twig_get_attribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">
                        <i class=\"mdi mdi-file-find\"></i>
                        Afficher
                    </a>
                    <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skill_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">
                        <i class=\"mdi mdi-pencil\"></i>
                        Editer
                    </a>
                    ";
            // line 34
            echo twig_include($this->env, $context, "skill/_delete.html.twig");
            echo "
                    <button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#deleteModal";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\">
                        <i class=\"mdi mdi-delete\"></i>
                        Supprimer
                    </button>
                    
                </td>
            </tr>
        ";
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
            // line 43
            echo "            <tr>
                <td colspan=\"5\">Aucune compétence présente.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
  
    <a class=\"btn btn-primary\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_skill_create");
        echo "\">
        <i class=\"mdi mdi-content-save\"></i>
        Créer nouvelle compétence
    </a>
    <a class=\"btn btn-primary\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\">Retour</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "skill/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 54,  191 => 50,  186 => 47,  177 => 43,  156 => 35,  152 => 34,  145 => 30,  138 => 26,  132 => 23,  127 => 21,  123 => 20,  120 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste Compétences{% endblock %}

{% block body %}
    <h1>Liste des Compétences</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Catégorie</th>
                <th>Icône</th>
            </tr>
        </thead>

        <tbody>
        {% for skill in skills %}
            <tr>
                <td>{{ skill.name }}</td>
                <td>{{ skill.category }}</td>
                <td class=\"icon-table\">
                    <i class=\"mdi mdi-{{skill.linkImg}}\"></i>
                </td>
                <td>
                    <a class=\"btn btn-success btn-sm\" href=\"{{ path('app_admin_skill_print', {'id': skill.id}) }}\">
                        <i class=\"mdi mdi-file-find\"></i>
                        Afficher
                    </a>
                    <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_admin_skill_edit', {'id': skill.id}) }}\">
                        <i class=\"mdi mdi-pencil\"></i>
                        Editer
                    </a>
                    {{ include('skill/_delete.html.twig') }}
                    <button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#deleteModal{{ skill.id }}\">
                        <i class=\"mdi mdi-delete\"></i>
                        Supprimer
                    </button>
                    
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">Aucune compétence présente.</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
  
    <a class=\"btn btn-primary\" href=\"{{ path('app_admin_skill_create') }}\">
        <i class=\"mdi mdi-content-save\"></i>
        Créer nouvelle compétence
    </a>
    <a class=\"btn btn-primary\" href=\"{{ path('app_admin') }}\">Retour</a>

{% endblock %}
", "skill/index.html.twig", "/var/www/ProjetPortfolio/templates/skill/index.html.twig");
    }
}
