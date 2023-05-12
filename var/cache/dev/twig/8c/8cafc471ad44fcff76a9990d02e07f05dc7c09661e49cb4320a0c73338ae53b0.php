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

/* base/catalogue.html.twig */
class __TwigTemplate_052b8122459c2efd633f08a365b5596a97031936b4088749067ef973e852f572 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/catalogue.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "base/catalogue.html.twig", 1);
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
        echo "Proshop
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<style>
.gradient-text {
  background-image: linear-gradient(to right, #00bfff, #32cd32);
  -webkit-background-clip: text;
  -moz-background-clip: text;
  background-clip: text;
  color: transparent;
}

h5{
\tfont-family: 'Herbe';
\tsrc: url('public/templates/Herbe.ttf') format('woff');
\tfont-weight : bold;
\tcolor: #7CFC00;
}
</style>

\t<h1 class=\"text-center gradient-text mt-4 pt-4 display-1 fw-bold\">
\t\tPROSHOP</h1>
\t<h3 class=\"text-center gradient-text mb-4 pb-4 display-2\">
\t\tCatalogue
\t</h3>

\t<div class=\"container\">
<div class=\"row mt-3\">
\t<h1 class=\"gradient-text\">
\t\tTous les produits
\t</h1>
\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t<div id=\"Produits\" class=\"carousel slide\">
\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Produits\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Produits\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Produits\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/drivers.jpeg\" class=\"w-20\" alt=\"Driver\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/bois.png\" class=\"w-20\" alt=\"Bois\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/hybride.jpeg\" class=\"w-20\" alt=\"Hybride\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/fers.jpeg\" class=\"w-20\" alt=\"Fers\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/putter.jpeg\" class=\"w-20\" alt=\"Putter\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Clubs de golf</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Tenues vestimentaires</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Accessoires</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#Produits\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#Produits\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex flex-row-reverse\">
\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t<img src=\"Images/Img-proshop/fleche.png\" title=\"Se rendre dans la catégorie\" alt=\"Produits\" width=\"25\" height=\"25\">
\t\t</a>
\t</div>
</div>


<div class=\"row mt-3\">
\t<h1 class=\"gradient-text\">
\t\tClubs de golf
\t</h1>
\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t<div id=\"Clubs\" class=\"carousel slide\">
\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Clubs\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Clubs\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Clubs\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Clubs\" data-bs-slide-to=\"3\" aria-label=\"Slide 4\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Clubs\" data-bs-slide-to=\"4\" aria-label=\"Slide 5\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/drivers.jpeg\" class=\"w-100\" alt=\"Driver\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Driver</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/bois.png\" class=\"w-100\" alt=\"Bois\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Bois</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/hybride.jpeg\" class=\"w-100\" alt=\"Hybride\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Hybride</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/fers.jpeg\" class=\"w-100\" alt=\"Fers\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Fers</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/putter.jpeg\" class=\"w-100\" alt=\"Putter\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Putter</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#Clubs\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#Clubs\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex flex-row-reverse\">
\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t<img src=\"Images/Img-proshop/fleche.png\" title=\"Se rendre dans la catégorie\" alt=\"Clubs\" width=\"25\" height=\"25\">
\t\t</a>
\t</div>
</div>

<div class=\"row mt-3\">
\t<h1 class=\"gradient-text\">
\t\tTenues vestimentaires
\t</h1>
\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t<div id=\"Tenues\" class=\"carousel slide\">
\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Tenues\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Tenues\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Tenues\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>First slide label</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Second slide label</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Third slide label</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#Tenues\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#Tenues\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex flex-row-reverse\">
\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t<img src=\"Images/Img-proshop/fleche.png\" title=\"Se rendre dans la catégorie\" alt=\"Vêtements\" width=\"25\" height=\"25\">
\t\t</a>
\t</div>
</div>

<div class=\"row mt-3\">
\t<h1 class=\"gradient-text\">
\t\tAccessoires
\t</h1>
\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t<div id=\"carouselExampleCaptions\" class=\"carousel slide\">
\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>First slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the first slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Second slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the second slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Third slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the third slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex flex-row-reverse\">
\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t<img src=\"Images/Img-proshop/fleche.png\" title=\"Se rendre dans la catégorie\" alt=\".\" width=\"25\" height=\"25\">
\t\t</a>
\t</div>
</div>

<div class=\"row mt-3\">
\t<h1 class=\"gradient-text\">
\t\tChariots de golf
\t</h1>
\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t<div id=\"carouselExampleCaptions\" class=\"carousel slide\">
\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>First slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the first slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Second slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the second slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Third slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the third slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex flex-row-reverse\">
\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t<img src=\"Images/Img-proshop/fleche.png\" title=\"Se rendre dans la catégorie\" alt=\".\" width=\"25\" height=\"25\">
\t\t</a>
\t</div>
</div>

<div class=\"row mt-3\">
\t<h1 class=\"gradient-text\">
\t\tSacs de golf
\t</h1>
\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t<div id=\"carouselExampleCaptions\" class=\"carousel slide\">
\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>First slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the first slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Second slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the second slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Third slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the third slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex flex-row-reverse\">
\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t<img src=\"Images/Img-proshop/fleche.png\" title=\"Se rendre dans la catégorie\" alt=\".\" width=\"25\" height=\"25\">
\t\t</a>
\t</div>
</div>

<div class=\"row mt-3\">
\t<h1 class=\"gradient-text\">
\t\tBalles de golf
\t</h1>
\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t<div id=\"carouselExampleCaptions\" class=\"carousel slide\">
\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>First slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the first slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Second slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the second slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Third slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the third slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex flex-row-reverse\">
\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t<img src=\"Images/Img-proshop/fleche.png\" title=\"Se rendre dans la catégorie\" alt=\".\" width=\"25\" height=\"25\">
\t\t</a>
\t</div>
</div>
</div>


\t<!--
\t> Faire en sorte que le title du bouton s'affiche au passage de la souris partout sur le button et pas uniquement sur l'image (pas grave si je n'y arrive pas)
\t> Mettre les catégories de clubs / vêtements
\t> Peut-être mettre un dropdown sur la barre navigation avec la totalité des articles
\t> Créer les articles (card déjà présentes actuellement)
\t> Mettre une option à droite du nom pour afficher TOUS les produits pas en carousel mais format page
\t> Mettre un texte qui s'adapte en fonction de quand c'est en favoris ou pas \"Retirer des favoris\" \"Ajouter aux favoris\" lorsque l'on passe la souris
\t> Faire un système de tri pour trouver des produits
\t> Première page = Catalogue (boutons de visite), ça amène à la page de la catégorie où là tous les produits de la catégorie seront répertoriés (boutons d'info, d'ajout dans le panier et de favoris)
\t
\tConcernant les rôles :
\t> Administrateur (Hauts placés qui peuvent gérer les permissions et donner les rôles aux salariés tout en pouvant personnaliser ses fonctions)
\t> Salarié (Peut gérer les promos, ajouter un produit, retirer un produit grâce à un formulaire)
\t> Utilisateur (Est le client)
\t\t\t\t\t\t\t\t\t\t\t
\t> Si on va plus loin, les membres mais dans le cas d'un site hors commerce.
\t-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base/catalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 9,  70 => 8,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}}Proshop
{% endblock %}


{% block body %}
<style>
.gradient-text {
  background-image: linear-gradient(to right, #00bfff, #32cd32);
  -webkit-background-clip: text;
  -moz-background-clip: text;
  background-clip: text;
  color: transparent;
}

h5{
\tfont-family: 'Herbe';
\tsrc: url('public/templates/Herbe.ttf') format('woff');
\tfont-weight : bold;
\tcolor: #7CFC00;
}
</style>

\t<h1 class=\"text-center gradient-text mt-4 pt-4 display-1 fw-bold\">
\t\tPROSHOP</h1>
\t<h3 class=\"text-center gradient-text mb-4 pb-4 display-2\">
\t\tCatalogue
\t</h3>

\t<div class=\"container\">
<div class=\"row mt-3\">
\t<h1 class=\"gradient-text\">
\t\tTous les produits
\t</h1>
\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t<div id=\"Produits\" class=\"carousel slide\">
\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Produits\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Produits\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Produits\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/drivers.jpeg\" class=\"w-20\" alt=\"Driver\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/bois.png\" class=\"w-20\" alt=\"Bois\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/hybride.jpeg\" class=\"w-20\" alt=\"Hybride\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/fers.jpeg\" class=\"w-20\" alt=\"Fers\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/putter.jpeg\" class=\"w-20\" alt=\"Putter\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Clubs de golf</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Tenues vestimentaires</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Accessoires</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#Produits\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#Produits\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex flex-row-reverse\">
\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t<img src=\"Images/Img-proshop/fleche.png\" title=\"Se rendre dans la catégorie\" alt=\"Produits\" width=\"25\" height=\"25\">
\t\t</a>
\t</div>
</div>


<div class=\"row mt-3\">
\t<h1 class=\"gradient-text\">
\t\tClubs de golf
\t</h1>
\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t<div id=\"Clubs\" class=\"carousel slide\">
\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Clubs\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Clubs\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Clubs\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Clubs\" data-bs-slide-to=\"3\" aria-label=\"Slide 4\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Clubs\" data-bs-slide-to=\"4\" aria-label=\"Slide 5\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/drivers.jpeg\" class=\"w-100\" alt=\"Driver\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Driver</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/bois.png\" class=\"w-100\" alt=\"Bois\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Bois</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/hybride.jpeg\" class=\"w-100\" alt=\"Hybride\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Hybride</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/fers.jpeg\" class=\"w-100\" alt=\"Fers\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Fers</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/putter.jpeg\" class=\"w-100\" alt=\"Putter\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Putter</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#Clubs\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#Clubs\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex flex-row-reverse\">
\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t<img src=\"Images/Img-proshop/fleche.png\" title=\"Se rendre dans la catégorie\" alt=\"Clubs\" width=\"25\" height=\"25\">
\t\t</a>
\t</div>
</div>

<div class=\"row mt-3\">
\t<h1 class=\"gradient-text\">
\t\tTenues vestimentaires
\t</h1>
\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t<div id=\"Tenues\" class=\"carousel slide\">
\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Tenues\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Tenues\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#Tenues\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>First slide label</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Second slide label</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Third slide label</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#Tenues\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#Tenues\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex flex-row-reverse\">
\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t<img src=\"Images/Img-proshop/fleche.png\" title=\"Se rendre dans la catégorie\" alt=\"Vêtements\" width=\"25\" height=\"25\">
\t\t</a>
\t</div>
</div>

<div class=\"row mt-3\">
\t<h1 class=\"gradient-text\">
\t\tAccessoires
\t</h1>
\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t<div id=\"carouselExampleCaptions\" class=\"carousel slide\">
\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>First slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the first slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Second slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the second slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Third slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the third slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex flex-row-reverse\">
\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t<img src=\"Images/Img-proshop/fleche.png\" title=\"Se rendre dans la catégorie\" alt=\".\" width=\"25\" height=\"25\">
\t\t</a>
\t</div>
</div>

<div class=\"row mt-3\">
\t<h1 class=\"gradient-text\">
\t\tChariots de golf
\t</h1>
\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t<div id=\"carouselExampleCaptions\" class=\"carousel slide\">
\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>First slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the first slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Second slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the second slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Third slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the third slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex flex-row-reverse\">
\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t<img src=\"Images/Img-proshop/fleche.png\" title=\"Se rendre dans la catégorie\" alt=\".\" width=\"25\" height=\"25\">
\t\t</a>
\t</div>
</div>

<div class=\"row mt-3\">
\t<h1 class=\"gradient-text\">
\t\tSacs de golf
\t</h1>
\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t<div id=\"carouselExampleCaptions\" class=\"carousel slide\">
\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>First slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the first slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Second slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the second slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Third slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the third slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex flex-row-reverse\">
\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t<img src=\"Images/Img-proshop/fleche.png\" title=\"Se rendre dans la catégorie\" alt=\".\" width=\"25\" height=\"25\">
\t\t</a>
\t</div>
</div>

<div class=\"row mt-3\">
\t<h1 class=\"gradient-text\">
\t\tBalles de golf
\t</h1>
\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"container-fluid nav-item\">
\t\t\t\t<div id=\"carouselExampleCaptions\" class=\"carousel slide\">
\t\t\t\t\t<div class=\"carousel-indicators\">
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>First slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the first slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Second slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the second slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t<h5>Third slide label</h5>
\t\t\t\t\t\t\t\t<p>Some representative placeholder content for the third slide.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex flex-row-reverse\">
\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t<img src=\"Images/Img-proshop/fleche.png\" title=\"Se rendre dans la catégorie\" alt=\".\" width=\"25\" height=\"25\">
\t\t</a>
\t</div>
</div>
</div>


\t<!--
\t> Faire en sorte que le title du bouton s'affiche au passage de la souris partout sur le button et pas uniquement sur l'image (pas grave si je n'y arrive pas)
\t> Mettre les catégories de clubs / vêtements
\t> Peut-être mettre un dropdown sur la barre navigation avec la totalité des articles
\t> Créer les articles (card déjà présentes actuellement)
\t> Mettre une option à droite du nom pour afficher TOUS les produits pas en carousel mais format page
\t> Mettre un texte qui s'adapte en fonction de quand c'est en favoris ou pas \"Retirer des favoris\" \"Ajouter aux favoris\" lorsque l'on passe la souris
\t> Faire un système de tri pour trouver des produits
\t> Première page = Catalogue (boutons de visite), ça amène à la page de la catégorie où là tous les produits de la catégorie seront répertoriés (boutons d'info, d'ajout dans le panier et de favoris)
\t
\tConcernant les rôles :
\t> Administrateur (Hauts placés qui peuvent gérer les permissions et donner les rôles aux salariés tout en pouvant personnaliser ses fonctions)
\t> Salarié (Peut gérer les promos, ajouter un produit, retirer un produit grâce à un formulaire)
\t> Utilisateur (Est le client)
\t\t\t\t\t\t\t\t\t\t\t
\t> Si on va plus loin, les membres mais dans le cas d'un site hors commerce.
\t-->

{% endblock %}

", "base/catalogue.html.twig", "/var/www/html/P_SiteGolf/templates/base/catalogue.html.twig");
    }
}
