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

/* back/skill/_delete.html.twig */
class __TwigTemplate_20903c2d683d664f4fed6e3093df91de896fd8d48fdbb454673ec10431960e9f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/skill/_delete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/skill/_delete.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"deleteModal";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"deleteModalLabel\">SUPPRIMER</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
       Êtes-vous sûr de supprimer: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo " ?
      </div>
      <div class=\"modal-footer\">
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_admin_skill_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["skill"]) || array_key_exists("skill", $context) ? $context["skill"] : (function () { throw new RuntimeError('Variable "skill" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\" class=\"btn btn-danger\">Valider</a>
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
      </div>
    </div>
  </div>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back/skill/_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  57 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"deleteModal{{ skill.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"deleteModalLabel\">SUPPRIMER</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
       Êtes-vous sûr de supprimer: {{ skill.name }} ?
      </div>
      <div class=\"modal-footer\">
        <a href=\"{{ path('app_back_admin_skill_delete', {'id': skill.id}) }}\" class=\"btn btn-danger\">Valider</a>
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
      </div>
    </div>
  </div>
</div>

{# include param l'id pr chaque ligne de delete #}", "back/skill/_delete.html.twig", "/var/www/ProjetPortfolio/templates/back/skill/_delete.html.twig");
    }
}
