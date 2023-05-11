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

/* base.html.twig */
class __TwigTemplate_1a7aa7a075b08be27bc338ba4b9899c7641305235442efc452eab6e5fbb76582 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "\t\t<title>
\t\t\t";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 14
        echo "\t\t</title>
\t</head>

\t<body>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-black\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand text-center\" href=\"#\">
\t\t\t\t\tGolf

\t\t\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t\t\t<div class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" id=\"carousel\">

\t\t\t\t\t\t\t<div class=\"carousel-inner \">
\t\t\t\t\t\t\t\t<div class=\"carousel-item active\" data-bs-interval=\"2000\">
\t\t\t\t\t\t\t\t\t<img src=\"Img-navbar/Swing1-t.png\" alt=\"golf1\" width=\"100\" height=\"100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\" data-bs-interval=\"2000\">
\t\t\t\t\t\t\t\t\t<img src=\"Img-navbar/Swing2-t.png\" alt=\"golf2\" width=\"100\" height=\"100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\" data-bs-interval=\"2000\">
\t\t\t\t\t\t\t\t\t<img src=\"Img-navbar/Swing3-tb.png\" alt=\"golf3\" width=\"100\" height=\"100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\" data-bs-interval=\"2000\">
\t\t\t\t\t\t\t\t\t<img src=\"Img-navbar/Swing4-t.png\" alt=\"golf4\" width=\"100\" height=\"100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\" data-bs-interval=\"2000\">
\t\t\t\t\t\t\t\t\t<img src=\"Img-navbar/Swing5-t.png\" alt=\"golf5\" width=\"100\" height=\"100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</a>

\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Accueil
\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proshop");
        echo "\">Proshop</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"navbar-nav justify-content-end\">
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Identification</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">S'inscrire</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Se connecter</a>
\t\t\t\t\t\t\t\t<div></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<!-- 
\t\t\t1) Finir la gauche de la navbar :
\t\t\t    - Centrer le carousel dans le petit cadre
\t\t\t    - Régler le débordement sur la navbar
\t\t\t
\t\t\t2) Agrandir l'écriture des pages à la suite de la navbar
\t\t\t
\t\t\t3) Mettre un fond flou avec le parcours du golf
\t\t\t
\t\t\t4) Aller plus loin :
\t\t\t    - Analyser le contenu des \"à propos\" et \"mentions légales\" des sites, 
\t\t\t    - Comprendre
\t\t\t    - Créer ou copier coller
\t\t\t
\t\t\t5) Rendre la navbar qui est en bas dans un format \"footer\" en gardant le même visuel
\t\t\t
\t\t\tÀ part :
\t\t\t  - Voir si on peut créer nos images nous-même, comme ça on peut faire plusieurs images et faire un GIF propre qui remplacera le carousel ou avoir plusieurs images de même taille qui seront donc adaptées
\t\t\t  - Quand je vais mettre le fond du parcours de golf, il se peut que le fond soit trop grand, s'il va on peut s'en foutre ou non mais j'aimerai connaitre un peu mieux le fonctionnement dans le cas où ça ronge/rogne l'image
\t\t\t-->

\t\t\t";
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 97
        echo "
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-black\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t\t<ul class=\"navbar-nav me-auto\"></ul>
\t\t\t\t\t\t<ul class=\"navbar-nav justify-content-end\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Mentions légales</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">À propos</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t</body>

\t\t";
        // line 116
        $this->displayBlock('javascripts', $context, $blocks);
        // line 119
        echo "\t</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t\t\t<!-- Bootstrap CSS -->
\t\t\t<link href=\"https://bootswatch.com/5/lumen/bootstrap.min.css\" rel=\"stylesheet\">
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Golf -
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 96
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 116
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 117
        echo "\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 117,  228 => 116,  216 => 96,  202 => 12,  193 => 8,  186 => 7,  177 => 119,  175 => 116,  154 => 97,  152 => 96,  120 => 67,  109 => 59,  101 => 54,  59 => 14,  57 => 12,  54 => 11,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t{% block stylesheets %}
\t\t\t<!-- Bootstrap CSS -->
\t\t\t<link href=\"https://bootswatch.com/5/lumen/bootstrap.min.css\" rel=\"stylesheet\">
\t\t{% endblock %}
\t\t<title>
\t\t\t{% block title %}Golf -
\t\t\t{% endblock %}
\t\t</title>
\t</head>

\t<body>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-black\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand text-center\" href=\"#\">
\t\t\t\t\tGolf

\t\t\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t\t\t<div class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" id=\"carousel\">

\t\t\t\t\t\t\t<div class=\"carousel-inner \">
\t\t\t\t\t\t\t\t<div class=\"carousel-item active\" data-bs-interval=\"2000\">
\t\t\t\t\t\t\t\t\t<img src=\"Img-navbar/Swing1-t.png\" alt=\"golf1\" width=\"100\" height=\"100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\" data-bs-interval=\"2000\">
\t\t\t\t\t\t\t\t\t<img src=\"Img-navbar/Swing2-t.png\" alt=\"golf2\" width=\"100\" height=\"100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\" data-bs-interval=\"2000\">
\t\t\t\t\t\t\t\t\t<img src=\"Img-navbar/Swing3-tb.png\" alt=\"golf3\" width=\"100\" height=\"100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\" data-bs-interval=\"2000\">
\t\t\t\t\t\t\t\t\t<img src=\"Img-navbar/Swing4-t.png\" alt=\"golf4\" width=\"100\" height=\"100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\" data-bs-interval=\"2000\">
\t\t\t\t\t\t\t\t\t<img src=\"Img-navbar/Swing5-t.png\" alt=\"golf5\" width=\"100\" height=\"100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</a>

\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"{{path('index')}}\">Accueil
\t\t\t\t\t\t\t\t<span class=\"visually-hidden\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('proshop')}}\">Proshop</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"navbar-nav justify-content-end\">
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Identification</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">S'inscrire</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_login')}}\">Se connecter</a>
\t\t\t\t\t\t\t\t<div></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<!-- 
\t\t\t1) Finir la gauche de la navbar :
\t\t\t    - Centrer le carousel dans le petit cadre
\t\t\t    - Régler le débordement sur la navbar
\t\t\t
\t\t\t2) Agrandir l'écriture des pages à la suite de la navbar
\t\t\t
\t\t\t3) Mettre un fond flou avec le parcours du golf
\t\t\t
\t\t\t4) Aller plus loin :
\t\t\t    - Analyser le contenu des \"à propos\" et \"mentions légales\" des sites, 
\t\t\t    - Comprendre
\t\t\t    - Créer ou copier coller
\t\t\t
\t\t\t5) Rendre la navbar qui est en bas dans un format \"footer\" en gardant le même visuel
\t\t\t
\t\t\tÀ part :
\t\t\t  - Voir si on peut créer nos images nous-même, comme ça on peut faire plusieurs images et faire un GIF propre qui remplacera le carousel ou avoir plusieurs images de même taille qui seront donc adaptées
\t\t\t  - Quand je vais mettre le fond du parcours de golf, il se peut que le fond soit trop grand, s'il va on peut s'en foutre ou non mais j'aimerai connaitre un peu mieux le fonctionnement dans le cas où ça ronge/rogne l'image
\t\t\t-->

\t\t\t{% block body %}{% endblock %}

\t\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-black\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t\t<ul class=\"navbar-nav me-auto\"></ul>
\t\t\t\t\t\t<ul class=\"navbar-nav justify-content-end\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Mentions légales</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">À propos</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t</body>

\t\t{% block javascripts %}
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
\t\t{% endblock %}
\t</body>
</html>
", "base.html.twig", "/var/www/html/P_SiteGolf/templates/base.html.twig");
    }
}
