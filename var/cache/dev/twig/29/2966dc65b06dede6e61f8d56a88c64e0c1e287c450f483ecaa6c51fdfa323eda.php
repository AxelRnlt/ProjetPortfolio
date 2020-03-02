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

/* back/skill/print.html.twig */
class __TwigTemplate_e2fb0d89e59b7b9ef9b440b6e93e9f88052487cac590ad90da719d23c45bfaa5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/skill/print.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/skill/print.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/skill/print.html.twig", 1);
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

        echo "Compétence ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "
";
        // line 7
        echo twig_include($this->env, $context, "back/skill/_delete.html.twig");
        echo "

    <h1>Compétence ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Catégorie</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 23, $this->source); })()), "category", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Icône</th>
                <td><span class=\"mdi mdi-";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 27, $this->source); })()), "linkImg", [], "any", false, false, false, 27), "html", null, true);
        echo "\"></span></td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_admin_skill");
        echo "\">Retour</a>

    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_admin_skill_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\">Editer</a>
        
    ";
        // line 36
        echo twig_include($this->env, $context, "back/skill/_delete.html.twig");
        echo "
    
    ";
        // line 39
        echo "</form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/skill/print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 39,  145 => 36,  140 => 34,  135 => 32,  127 => 27,  120 => 23,  113 => 19,  106 => 15,  97 => 9,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Compétence {{ skill.name }}{% endblock %}

{% block body %}

{{ include('back/skill/_delete.html.twig') }}

    <h1>Compétence {{skill.name}}</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ skill.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ skill.name }}</td>
            </tr>
            <tr>
                <th>Catégorie</th>
                <td>{{ skill.category }}</td>
            </tr>
            <tr>
                <th>Icône</th>
                <td><span class=\"mdi mdi-{{skill.linkImg}}\"></span></td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_back_admin_skill') }}\">Retour</a>

    <a href=\"{{ path('app_back_admin_skill_edit', {'id': skill.id}) }}\">Editer</a>
        
    {{ include('back/skill/_delete.html.twig') }}
    
    {# <button class=\"btn\">Supprimer</button> #}
</form>

{% endblock %}", "back/skill/print.html.twig", "/var/www/ProjetPortfolio/templates/back/skill/print.html.twig");
    }
}
