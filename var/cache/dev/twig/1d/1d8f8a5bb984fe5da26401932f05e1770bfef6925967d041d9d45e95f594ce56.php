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

/* Utilisateur/base/a-propos.html.twig */
class __TwigTemplate_ec6d315e79d694ccf6198673da0b7186acc1c15351799a142e3576880683cb0a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Utilisateur/base/a-propos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Utilisateur/base/a-propos.html.twig", 1);
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
        echo "À propos
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
\t\tÀ PROPOS
\t</h1>


\t<strong>
\t\tÀ propos du Golf d’Arras
\t</strong>
\t<p>
\t\tLe Golf d’Arras est une société spécialisée dans le golf qui s'engage à vous vendre des services de qualité. Nous proposons clubs, vêtements, accessoires de golf de haute qualité et nous nous efforçons d'offrir à nos clients une expérience exceptionnelle.
\t</p>

\t<p>
\t\tFondé en 1990, le Golf d’Arras bénéficie de 33 ans d'expérience. Notre équipe talentueuse et passionnée possède une expertise approfondie dans tout ce qui touche au domaine du golf et travaille avec dévouement pour répondre aux besoins uniques de nos clients.
\t</p>

\t<p>
\t\tNotre mission est de vous fournir tous les services dont vous avez besoin pour jouer au golf dans de bonnes conditions. Nous croyons fermement au relationnel et nous nous efforçons de l'intégrer dans tout ce que nous faisons. Nous collaborons étroitement avec nos clients pour comprendre leurs besoins et leur offrir des solutions personnalisées qui les aident à atteindre leurs objectifs.
\t</p>

\t<p>
\t\tAu Golf d'Arras, nous sommes fiers de nos réalisations. Nous avons établi des partenariats solides avec des entreprises renommées et avons été reconnus pour notre excellence avec l'accueil de l'Open de France Dames de golf, tournoi du Ladies European Tour à 11 reprises. Ces accomplissements témoignent de notre engagement envers l'excellence et de notre dévouement à fournir des résultats exceptionnels.
\t</p>

\t<p>
\t\tNous sommes ravis de vous servir et de vous accompagner dans votre parcours vers la réussite dans le golf. N'hésitez pas à nous contacter à <br>
         Ce numéro : 03 21 50 24 24 <br>
         Cette adresse : Rue Briquet Taillandier, 62223 Anzin-Saint-Aubin <br>
        pour discuter de vos besoins ou pour obtenir de plus amples informations. Nous sommes impatients de collaborer avec vous et de contribuer à votre succès.
\t</p>

\t<p>
\t\tMerci de visiter le Golf d'Arras et de découvrir ce que nous avons à offrir. Nous espérons avoir l'occasion de vous servir et de vous offrir une expérience exceptionnelle.
\t</p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Utilisateur/base/a-propos.html.twig";
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
\t{{parent()}}À propos
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
\t\tÀ PROPOS
\t</h1>


\t<strong>
\t\tÀ propos du Golf d’Arras
\t</strong>
\t<p>
\t\tLe Golf d’Arras est une société spécialisée dans le golf qui s'engage à vous vendre des services de qualité. Nous proposons clubs, vêtements, accessoires de golf de haute qualité et nous nous efforçons d'offrir à nos clients une expérience exceptionnelle.
\t</p>

\t<p>
\t\tFondé en 1990, le Golf d’Arras bénéficie de 33 ans d'expérience. Notre équipe talentueuse et passionnée possède une expertise approfondie dans tout ce qui touche au domaine du golf et travaille avec dévouement pour répondre aux besoins uniques de nos clients.
\t</p>

\t<p>
\t\tNotre mission est de vous fournir tous les services dont vous avez besoin pour jouer au golf dans de bonnes conditions. Nous croyons fermement au relationnel et nous nous efforçons de l'intégrer dans tout ce que nous faisons. Nous collaborons étroitement avec nos clients pour comprendre leurs besoins et leur offrir des solutions personnalisées qui les aident à atteindre leurs objectifs.
\t</p>

\t<p>
\t\tAu Golf d'Arras, nous sommes fiers de nos réalisations. Nous avons établi des partenariats solides avec des entreprises renommées et avons été reconnus pour notre excellence avec l'accueil de l'Open de France Dames de golf, tournoi du Ladies European Tour à 11 reprises. Ces accomplissements témoignent de notre engagement envers l'excellence et de notre dévouement à fournir des résultats exceptionnels.
\t</p>

\t<p>
\t\tNous sommes ravis de vous servir et de vous accompagner dans votre parcours vers la réussite dans le golf. N'hésitez pas à nous contacter à <br>
         Ce numéro : 03 21 50 24 24 <br>
         Cette adresse : Rue Briquet Taillandier, 62223 Anzin-Saint-Aubin <br>
        pour discuter de vos besoins ou pour obtenir de plus amples informations. Nous sommes impatients de collaborer avec vous et de contribuer à votre succès.
\t</p>

\t<p>
\t\tMerci de visiter le Golf d'Arras et de découvrir ce que nous avons à offrir. Nous espérons avoir l'occasion de vous servir et de vous offrir une expérience exceptionnelle.
\t</p>

{% endblock %}

", "Utilisateur/base/a-propos.html.twig", "/var/www/html/P_SiteGolf/templates/Utilisateur/base/a-propos.html.twig");
    }
}
