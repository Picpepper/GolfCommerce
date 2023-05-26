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
class __TwigTemplate_ec1d7c1a5d5e2fdf26edccc1537a1682154a69578e1c484a5bcd19cee0bd41ae extends Template
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
        // line 51
        echo "\t\t<title>
\t\t\t";
        // line 52
        $this->displayBlock('title', $context, $blocks);
        // line 54
        echo "\t\t</title>
\t\t<link rel=\"icon\" href=\"Images/balle-de-golf.png\"/>
\t</head>


\t<body>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-black\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand text-center\" href=\"";
        // line 62
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
\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle text-white\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Proshop</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalogue");
        echo "\">Catalogue</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proshop");
        echo "\">Acheter maintenant</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t";
        // line 85
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 86
            echo "\t\t\t\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle text-white\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Identification</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-black\" href=\"";
            // line 90
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-black\" href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'inscrire</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        } else {
            // line 96
            echo "\t\t\t\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle-fill text-white\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>

\t\t";
        // line 109
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "
\t\t<footer class=\"navbar navbar-expand-lg navbar-dark bg-black\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto\"></ul>
\t\t\t\t\t<ul class=\"navbar-nav justify-content-end\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions");
        echo "\">Mentions legales
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propos");
        echo "\">À propos
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>


\t\t";
        // line 130
        $this->displayBlock('javascripts', $context, $blocks);
        // line 133
        echo "\t</body>
</html></body></html>

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
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ\" crossorigin=\"anonymous\">
\t\t\t<style>
\t\t\t\th1,
\t\t\t\th3 {
\t\t\t\t\tbackground-image: linear-gradient(to right, #00bfff, #32cd32);
\t\t\t\t\t-webkit-background-clip: text;
\t\t\t\t\t-moz-background-clip: text;
\t\t\t\t\tbackground-clip: text;
\t\t\t\t\tcolor: transparent;
\t\t\t\t}

\t\t\t\tbody {
\t\t\t\t\tbackground-image: url('Images/arras-golf.jpg');
\t\t\t\t\tbackground-size: cover;
\t\t\t\t\tmargin: 0;
\t\t\t\t\tpadding: 0;
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tmin-height: 100vh;
\t\t\t\t\tflex-direction: column;
\t\t\t\t\tposition: relative;
\t\t\t\t}

\t\t\t\tbody::before {
\t\t\t\t\tcontent: \"\";
\t\t\t\t\tposition: fixed;
\t\t\t\t\ttop: 0;
\t\t\t\t\tleft: 0;
\t\t\t\t\twidth: 100%;
\t\t\t\t\theight: 100%;
\t\t\t\t\tbackground-image: url('Images/arras-golf.jpg');
\t\t\t\t\tbackground-size: cover;
\t\t\t\t\tfilter: blur(5px);
\t\t\t\t\tz-index: -1;
\t\t\t\t}

\t\t\t\tfooter {
\t\t\t\t\theight: 25px;
\t\t\t\t\tbackground-color: #f2f2f2;
\t\t\t\t\tmargin-top: auto;
\t\t\t\t}
\t\t\t</style>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 52
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Golf -
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 109
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
        echo "\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\" crossorigin=\"anonymous\"></script>
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
        return array (  272 => 131,  265 => 130,  253 => 109,  239 => 52,  190 => 8,  183 => 7,  173 => 133,  171 => 130,  159 => 121,  152 => 117,  143 => 110,  141 => 109,  134 => 104,  125 => 98,  121 => 96,  113 => 91,  109 => 90,  103 => 86,  101 => 85,  93 => 80,  87 => 77,  69 => 62,  59 => 54,  57 => 52,  54 => 51,  52 => 7,  44 => 1,);
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
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ\" crossorigin=\"anonymous\">
\t\t\t<style>
\t\t\t\th1,
\t\t\t\th3 {
\t\t\t\t\tbackground-image: linear-gradient(to right, #00bfff, #32cd32);
\t\t\t\t\t-webkit-background-clip: text;
\t\t\t\t\t-moz-background-clip: text;
\t\t\t\t\tbackground-clip: text;
\t\t\t\t\tcolor: transparent;
\t\t\t\t}

\t\t\t\tbody {
\t\t\t\t\tbackground-image: url('Images/arras-golf.jpg');
\t\t\t\t\tbackground-size: cover;
\t\t\t\t\tmargin: 0;
\t\t\t\t\tpadding: 0;
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tmin-height: 100vh;
\t\t\t\t\tflex-direction: column;
\t\t\t\t\tposition: relative;
\t\t\t\t}

\t\t\t\tbody::before {
\t\t\t\t\tcontent: \"\";
\t\t\t\t\tposition: fixed;
\t\t\t\t\ttop: 0;
\t\t\t\t\tleft: 0;
\t\t\t\t\twidth: 100%;
\t\t\t\t\theight: 100%;
\t\t\t\t\tbackground-image: url('Images/arras-golf.jpg');
\t\t\t\t\tbackground-size: cover;
\t\t\t\t\tfilter: blur(5px);
\t\t\t\t\tz-index: -1;
\t\t\t\t}

\t\t\t\tfooter {
\t\t\t\t\theight: 25px;
\t\t\t\t\tbackground-color: #f2f2f2;
\t\t\t\t\tmargin-top: auto;
\t\t\t\t}
\t\t\t</style>
\t\t{% endblock %}
\t\t<title>
\t\t\t{% block title %}Golf -
\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"icon\" href=\"Images/balle-de-golf.png\"/>
\t</head>


\t<body>
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
\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle text-white\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Proshop</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('catalogue') }}\">Catalogue</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('proshop') }}\">Acheter maintenant</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t{% if not is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle text-white\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Identification</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-black\" href=\"{{path('app_login')}}\">Se connecter</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-black\" href=\"{{path('app_register')}}\">S'inscrire</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_logout')}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle-fill text-white\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>

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
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\" crossorigin=\"anonymous\"></script>
\t\t{% endblock %}
\t</body>
</html></body></html>

", "base.html.twig", "/var/www/html/P_SiteGolf/templates/base.html.twig");
    }
}
