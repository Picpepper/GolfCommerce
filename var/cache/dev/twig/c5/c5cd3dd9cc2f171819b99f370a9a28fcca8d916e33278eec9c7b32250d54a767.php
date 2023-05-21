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
        // line 12
        echo "\t\t<title>
\t\t\t";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 15
        echo "\t\t</title>
\t</head>

\t<body>
\t<style>
body {
    background-image: url('Images/arras-golf.jpg');
    background-size: cover;
    margin: 0; /* réinitialisation des marges par défaut du navigateur */
    padding: 0; /* réinitialisation des marges internes par défaut du navigateur */
    display: flex;
  \tmin-height: 100vh;
  \tflex-direction: column;
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
  margin-top: auto;
}
</style>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-black\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand text-center\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t\t\t\tArras Golf
\t\t\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t\t\t<img src=\"Images/Img-navbar/Swing.gif\" alt=\"Swing\" width=\"75\">
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle text-white\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Proshop</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-black\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalogue");
        echo "\">Catalogue
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-black\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proshop");
        echo "\">Acheter maintenant
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test");
        echo "\">Test
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 76
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 77
            echo "\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle text-white\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Identification</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-black\" href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-black\" href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'inscrire
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        } else {
            // line 88
            echo "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle-fill text-white\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 94
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>

<!-- 
\t1) Finir et régler la navbar :
\t\t- Trouver la solution pour mettre l'identification à droite
\t\t\t\t\t\t\t\t\t\t\t\t
\t2) Aller plus loin :
\t    - Analyser le contenu des \"à propos\" et \"mentions légales\" des sites, 
\t    - Comprendre
\t    - Créer ou copier coller
\t\t\t\t\t\t\t\t\t
\t4) Régler le \"Inscrivez-vous\"
\t\t- Déjà, quand on ne met pas un mail ça met une erreur bizarre, j'aimerai que cette erreur se fasse autrement. Déjà savoir si c'est une erreur du code faite par le développeur ou juste une erreur indiquée pour l'utilisateur
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\tÀ part :
\t  - Voir concernant le footer pour bien le foutre tout en bas avec masse <div> dans le base html twig
\t  - Le formulaire d'inscription ne marche plus du tout
-->

\t\t";
        // line 116
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "
\t\t<footer class=\"navbar navbar-expand-lg navbar-dark bg-black\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto\"></ul>
\t\t\t\t\t<ul class=\"navbar-nav justify-content-end\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions");
        echo "\">Mentions legales
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propos");
        echo "\">À propos
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>


\t\t";
        // line 137
        $this->displayBlock('javascripts', $context, $blocks);
        // line 140
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

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Golf -
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 116
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 137
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 138
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
        return array (  282 => 138,  275 => 137,  263 => 116,  249 => 13,  239 => 8,  232 => 7,  222 => 140,  220 => 137,  208 => 128,  201 => 124,  192 => 117,  190 => 116,  166 => 94,  158 => 89,  155 => 88,  147 => 83,  142 => 81,  136 => 77,  134 => 76,  128 => 73,  120 => 68,  115 => 66,  98 => 52,  59 => 15,  57 => 13,  54 => 12,  52 => 7,  44 => 1,);
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
\t<style>
body {
    background-image: url('Images/arras-golf.jpg');
    background-size: cover;
    margin: 0; /* réinitialisation des marges par défaut du navigateur */
    padding: 0; /* réinitialisation des marges internes par défaut du navigateur */
    display: flex;
  \tmin-height: 100vh;
  \tflex-direction: column;
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
  margin-top: auto;
}
</style>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-black\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand text-center\" href=\"{{path('index')}}\">
\t\t\t\t\tArras Golf
\t\t\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t\t\t<img src=\"Images/Img-navbar/Swing.gif\" alt=\"Swing\" width=\"75\">
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto\">
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle text-white\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Proshop</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-black\" href=\"{{path('catalogue')}}\">Catalogue
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-black\" href=\"{{path('proshop')}}\">Acheter maintenant
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"{{path('test')}}\">Test
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

<!-- 
\t1) Finir et régler la navbar :
\t\t- Trouver la solution pour mettre l'identification à droite
\t\t\t\t\t\t\t\t\t\t\t\t
\t2) Aller plus loin :
\t    - Analyser le contenu des \"à propos\" et \"mentions légales\" des sites, 
\t    - Comprendre
\t    - Créer ou copier coller
\t\t\t\t\t\t\t\t\t
\t4) Régler le \"Inscrivez-vous\"
\t\t- Déjà, quand on ne met pas un mail ça met une erreur bizarre, j'aimerai que cette erreur se fasse autrement. Déjà savoir si c'est une erreur du code faite par le développeur ou juste une erreur indiquée pour l'utilisateur
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\tÀ part :
\t  - Voir concernant le footer pour bien le foutre tout en bas avec masse <div> dans le base html twig
\t  - Le formulaire d'inscription ne marche plus du tout
-->

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
