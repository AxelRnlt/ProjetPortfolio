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

/* /nombre2.html.twig */
class __TwigTemplate_40df845b63d9d16a4d61a908e6ff18c77236b2cbb1ee6030acac210f31cb03cf extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/nombre2.html.twig"));

        // line 2
        echo "
<h1>Votre nouveau nombre: ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["nombre2"]) || array_key_exists("nombre2", $context) ? $context["nombre2"] : (function () { throw new RuntimeError('Variable "nombre2" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</h1>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/nombre2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/nombre2.html.twig #}

<h1>Votre nouveau nombre: {{ nombre2 }}</h1>", "/nombre2.html.twig", "/var/www/ProjetPortfolio/templates/nombre2.html.twig");
    }
}
