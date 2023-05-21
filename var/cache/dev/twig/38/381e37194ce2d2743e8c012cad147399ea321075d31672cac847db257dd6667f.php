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

/* Utilisateur/base/mentions-legales.html.twig */
class __TwigTemplate_8e89631046f8a2b88171d1dfaf38e77d30fbad8ce4b28c44f03a106286060d07 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Utilisateur/base/mentions-legales.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Utilisateur/base/mentions-legales.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "Mentions légales
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<style>
\t\thtml,
\t\tbody {
\t\t\tbackground: none;
\t\t\tbackground-color: white;
\t\t}
\t</style>
\t<h1 class=\"text-center mt-4 pt-4 display-1 fw-bold\">
\t\tMENTIONS LEGALES
\t</h1>

\t<nav id=\"mentions-legales\" class=\"mentions-legales bg-body-tertiary px-3 mb-3\">
\t\t<a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Les parties</a>
\t\t<ul class=\"dropdown-menu\">
\t\t\t<li>
\t\t\t\t<a class=\"dropdown-item\" href=\"#scrollspyHeading1\">Identification du site</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"dropdown-item\" href=\"#scrollspyHeading2\">Propriété intellectuelle</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"dropdown-item\" href=\"#scrollspyHeading3\">Protection des données personnelles</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"dropdown-item\" href=\"#scrollspyHeading4\">Limitation de responsabilité</a>
\t\t\t</li>
\t\t</ul>
\t</nav>
\t<div data-bs-spy=\"scroll\" data-bs-target=\"#navbar-example2\" data-bs-root-margin=\"0px 0px -40%\" data-bs-smooth-scroll=\"true\" class=\"scrollspy-example bg-body-tertiary p-3 rounded-2\" tabindex=\"0\">
\t\t<h2 id=\"scrollspyHeading1\">1. Identification du site</h2>
\t\t<p>Le présent site est édité par Clément Desjonquères, un étudiant en BTS SIO au Lycée Guy Mollet d'Arras, immatriculé sous le numéro SIRET 19620256800016, dont le siège social est situé au 57 rue Bocquet Flochel 62000 ARRAS.</p>
\t\t<p>Contact :
\t\t\t<a href=\"mailto:clementdesj@hotmail.fr\">clementdesj@hotmail.fr</a>
\t\t</p>

\t\t<h2 id=\"scrollspyHeading2\">2. Propriété intellectuelle</h2>
\t\t<p>Tous les éléments présents sur le site, tels que les textes, les images, les logos, les graphiques, les vidéos, sont la propriété exclusive de Google Images ou de ses partenaires et sont protégés par les lois relatives à la propriété intellectuelle. Toute reproduction, distribution, modification ou utilisation de ces éléments sans autorisation préalable écrite est strictement interdite, cela dépendra beaucoup de l'image que vous utilisez.</p>

\t\t<h2 id=\"scrollspyHeading3\">3. Protection des données personnelles</h2>
\t\t<p>Aucunes données personnelles sur vous sont et seront utilisées à des fins publicitaires ou n'importe quel autre usage. Ce projet est uniquement fait par un étudiant et il n'a aucun droit sur vous.</p>

\t\t<h2 id=\"scrollspyHeading4\">4. Limitation de responsabilité</h2>
\t\t<p>L'étudiant qui a créé ce projet s'efforce de fournir des informations exactes et à jour sur le site, mais ne peut garantir l'exactitude, l'exhaustivité ou la pertinence des informations fournies. Le Lycée Guy Mollet d'Arras décline toute responsabilité quant à l'utilisation qui pourrait être faite des informations présentes sur le site.</p>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Utilisateur/base/mentions-legales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}}Mentions légales
{% endblock %}

{% block body %}
\t<style>
\t\thtml,
\t\tbody {
\t\t\tbackground: none;
\t\t\tbackground-color: white;
\t\t}
\t</style>
\t<h1 class=\"text-center mt-4 pt-4 display-1 fw-bold\">
\t\tMENTIONS LEGALES
\t</h1>

\t<nav id=\"mentions-legales\" class=\"mentions-legales bg-body-tertiary px-3 mb-3\">
\t\t<a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">Les parties</a>
\t\t<ul class=\"dropdown-menu\">
\t\t\t<li>
\t\t\t\t<a class=\"dropdown-item\" href=\"#scrollspyHeading1\">Identification du site</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"dropdown-item\" href=\"#scrollspyHeading2\">Propriété intellectuelle</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"dropdown-item\" href=\"#scrollspyHeading3\">Protection des données personnelles</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a class=\"dropdown-item\" href=\"#scrollspyHeading4\">Limitation de responsabilité</a>
\t\t\t</li>
\t\t</ul>
\t</nav>
\t<div data-bs-spy=\"scroll\" data-bs-target=\"#navbar-example2\" data-bs-root-margin=\"0px 0px -40%\" data-bs-smooth-scroll=\"true\" class=\"scrollspy-example bg-body-tertiary p-3 rounded-2\" tabindex=\"0\">
\t\t<h2 id=\"scrollspyHeading1\">1. Identification du site</h2>
\t\t<p>Le présent site est édité par Clément Desjonquères, un étudiant en BTS SIO au Lycée Guy Mollet d'Arras, immatriculé sous le numéro SIRET 19620256800016, dont le siège social est situé au 57 rue Bocquet Flochel 62000 ARRAS.</p>
\t\t<p>Contact :
\t\t\t<a href=\"mailto:clementdesj@hotmail.fr\">clementdesj@hotmail.fr</a>
\t\t</p>

\t\t<h2 id=\"scrollspyHeading2\">2. Propriété intellectuelle</h2>
\t\t<p>Tous les éléments présents sur le site, tels que les textes, les images, les logos, les graphiques, les vidéos, sont la propriété exclusive de Google Images ou de ses partenaires et sont protégés par les lois relatives à la propriété intellectuelle. Toute reproduction, distribution, modification ou utilisation de ces éléments sans autorisation préalable écrite est strictement interdite, cela dépendra beaucoup de l'image que vous utilisez.</p>

\t\t<h2 id=\"scrollspyHeading3\">3. Protection des données personnelles</h2>
\t\t<p>Aucunes données personnelles sur vous sont et seront utilisées à des fins publicitaires ou n'importe quel autre usage. Ce projet est uniquement fait par un étudiant et il n'a aucun droit sur vous.</p>

\t\t<h2 id=\"scrollspyHeading4\">4. Limitation de responsabilité</h2>
\t\t<p>L'étudiant qui a créé ce projet s'efforce de fournir des informations exactes et à jour sur le site, mais ne peut garantir l'exactitude, l'exhaustivité ou la pertinence des informations fournies. Le Lycée Guy Mollet d'Arras décline toute responsabilité quant à l'utilisation qui pourrait être faite des informations présentes sur le site.</p>
\t</div>

{% endblock %}

", "Utilisateur/base/mentions-legales.html.twig", "/var/www/html/P_SiteGolf/templates/Utilisateur/base/mentions-legales.html.twig");
    }
}
