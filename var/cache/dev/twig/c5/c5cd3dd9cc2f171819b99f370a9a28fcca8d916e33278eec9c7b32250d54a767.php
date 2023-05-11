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
class __TwigTemplate_c62d9af11a5f2fc2577fa4f84a7ba6378963c62986756c1f3d503d65867a2aae extends Template
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
        // line 40
        echo "\t\t<title>
\t\t\t";
        // line 41
        $this->displayBlock('title', $context, $blocks);
        // line 43
        echo "\t\t</title>
\t</head>

\t<body>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-black\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand text-center\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t\t\t\tArras Golf
\t\t\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t\t\t<img src=\"Images/img-navbar/swing.gif\" alt=\"GIF\">
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proshop");
        echo "\">Proshop
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 64
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 65
            echo "\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle text-white\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Identification</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-black\" href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-black\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'inscrire
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        } else {
            // line 76
            echo "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle-fill text-white\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>

\t\t<!-- 
\t\t\t\t\t\t\t\t\t\t\t\t1) Finir la gauche de la navbar :
\t\t\t\t\t\t\t\t\t\t\t\t    - Centrer le carousel dans le petit cadre
\t\t\t\t\t\t\t\t\t\t\t\t    - Régler l'image de manière à ce qu'elle ne fasse pas son débordement lorsque ça passe à l'image suivante
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t3) Aller plus loin :
\t\t\t\t\t\t\t\t\t\t\t\t    - Analyser le contenu des \"à propos\" et \"mentions légales\" des sites, 
\t\t\t\t\t\t\t\t\t\t\t\t    - Comprendre
\t\t\t\t\t\t\t\t\t\t\t\t    - Créer ou copier coller
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t4) Régler le \"Inscrivez-vous\"
\t\t\t\t\t\t\t\t\t\t\t\t\t- Déjà, quand on ne met pas un mail ça met une erreur bizarer, j'aimerai que cette erreur se fasse autrement. Déjà savoir si c'est une erreur du code faite par le développeur ou juste une erreur indiquée pour l'utilisateur
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\tÀ part :
\t\t\t\t\t\t\t\t\t\t\t\t  - Voir si on peut créer nos images nous-même, comme ça on peut faire plusieurs images et faire un GIF propre qui remplacera le carousel ou avoir plusieurs images de même taille qui seront donc adaptées
\t\t\t\t\t\t\t\t\t\t\t\t  - Quand je vais mettre le fond du parcours de golf, il se peut que le fond soit trop grand, s'il va on peut s'en foutre ou non mais j'aimerai connaitre un peu mieux le fonctionnement dans le cas où ça ronge/rogne l'image
\t\t\t\t\t\t\t\t\t\t\t\t-->

\t\t";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "
\t\t<footer class=\"navbar navbar-expand-lg navbar-dark bg-black\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto\"></ul>
\t\t\t\t\t<ul class=\"navbar-nav justify-content-end\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions");
        echo "\">Mentions legales
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propos");
        echo "\">À propos
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>


\t\t";
        // line 128
        $this->displayBlock('javascripts', $context, $blocks);
        // line 131
        echo "
\t</body>
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

<style>
body {
    background-image: url('Images/arras-golf.jpg');
    background-size: cover;
    margin: 0; /* réinitialisation des marges par défaut du navigateur */
    padding: 0; /* réinitialisation des marges internes par défaut du navigateur */
    min-height: 100vh; /* spécifie la hauteur minimale de la page à 100% de la hauteur de la vue */
    position: relative; /* permet de positionner les éléments enfants par rapport à ce conteneur */
}

body::before {
    content: \"\";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('Images/arras-golf.jpg');
    background-size: cover;
    filter: blur(5px);
    z-index: -1;
}

footer {
  height: 25px;
  background-color: #f2f2f2;
}
</style>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Golf -
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 107
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 128
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 129
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
        return array (  268 => 129,  261 => 128,  249 => 107,  235 => 41,  197 => 8,  190 => 7,  179 => 131,  177 => 128,  165 => 119,  158 => 115,  149 => 108,  147 => 107,  120 => 82,  112 => 77,  109 => 76,  101 => 71,  96 => 69,  90 => 65,  88 => 64,  82 => 61,  67 => 49,  59 => 43,  57 => 41,  54 => 40,  52 => 7,  44 => 1,);
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

<style>
body {
    background-image: url('Images/arras-golf.jpg');
    background-size: cover;
    margin: 0; /* réinitialisation des marges par défaut du navigateur */
    padding: 0; /* réinitialisation des marges internes par défaut du navigateur */
    min-height: 100vh; /* spécifie la hauteur minimale de la page à 100% de la hauteur de la vue */
    position: relative; /* permet de positionner les éléments enfants par rapport à ce conteneur */
}

body::before {
    content: \"\";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('Images/arras-golf.jpg');
    background-size: cover;
    filter: blur(5px);
    z-index: -1;
}

footer {
  height: 25px;
  background-color: #f2f2f2;
}
</style>
\t\t{% endblock %}
\t\t<title>
\t\t\t{% block title %}Golf -
\t\t\t{% endblock %}
\t\t</title>
\t</head>

\t<body>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-black\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand text-center\" href=\"{{path('index')}}\">
\t\t\t\t\tArras Golf
\t\t\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t\t\t<img src=\"Images/img-navbar/swing.gif\" alt=\"GIF\">
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"{{path('proshop')}}\">Proshop
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if not is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle text-white\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Identification</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-black\" href=\"{{path('app_login')}}\">Se connecter
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-black\" href=\"{{path('app_register')}}\">S'inscrire
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_logout')}}\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle-fill text-white\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>

\t\t<!-- 
\t\t\t\t\t\t\t\t\t\t\t\t1) Finir la gauche de la navbar :
\t\t\t\t\t\t\t\t\t\t\t\t    - Centrer le carousel dans le petit cadre
\t\t\t\t\t\t\t\t\t\t\t\t    - Régler l'image de manière à ce qu'elle ne fasse pas son débordement lorsque ça passe à l'image suivante
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t3) Aller plus loin :
\t\t\t\t\t\t\t\t\t\t\t\t    - Analyser le contenu des \"à propos\" et \"mentions légales\" des sites, 
\t\t\t\t\t\t\t\t\t\t\t\t    - Comprendre
\t\t\t\t\t\t\t\t\t\t\t\t    - Créer ou copier coller
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t4) Régler le \"Inscrivez-vous\"
\t\t\t\t\t\t\t\t\t\t\t\t\t- Déjà, quand on ne met pas un mail ça met une erreur bizarer, j'aimerai que cette erreur se fasse autrement. Déjà savoir si c'est une erreur du code faite par le développeur ou juste une erreur indiquée pour l'utilisateur
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\tÀ part :
\t\t\t\t\t\t\t\t\t\t\t\t  - Voir si on peut créer nos images nous-même, comme ça on peut faire plusieurs images et faire un GIF propre qui remplacera le carousel ou avoir plusieurs images de même taille qui seront donc adaptées
\t\t\t\t\t\t\t\t\t\t\t\t  - Quand je vais mettre le fond du parcours de golf, il se peut que le fond soit trop grand, s'il va on peut s'en foutre ou non mais j'aimerai connaitre un peu mieux le fonctionnement dans le cas où ça ronge/rogne l'image
\t\t\t\t\t\t\t\t\t\t\t\t-->

\t\t{% block body %}{% endblock %}

\t\t<footer class=\"navbar navbar-expand-lg navbar-dark bg-black\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto\"></ul>
\t\t\t\t\t<ul class=\"navbar-nav justify-content-end\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"{{path('mentions')}}\">Mentions legales
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"{{path('propos')}}\">À propos
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>


\t\t{% block javascripts %}
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
\t\t{% endblock %}

\t</body>
</html>

", "base.html.twig", "/var/www/html/P_SiteGolf/templates/base.html.twig");
    }
}
