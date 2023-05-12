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

/* produit/proshop.html.twig */
class __TwigTemplate_a3ace517c2cd92c76044490eba59e4b3b1b4255f77e7830032728450f6b5eb8d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/proshop.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/proshop.html.twig", 1);
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

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
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
\t\tProduits
\t</h3>

\t<div class=\"container\">
\t\t<div class=\"row mt-3\">
\t\t\t<h1>
\t\t\t\tTous les produits
\t\t\t</h1>
\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t\t\t\t\t<img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas dans vos favoris\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t\t\t\t\t<img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tClubs
\t\t\t\t</h1>
\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Driver</h5>
\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Bois 3</h5>
\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Hybride</h5>
\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Fers</h5>
\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Wedge</h5>
\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\tVêtements
\t\t\t\t\t\t</h1>

\t\t\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Casquette</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Manteau</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Polo</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Pantalon</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Chaussures de golf</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


<!--
> Faire en sorte que le title du bouton s'affiche au passage de la souris partout sur le button et pas uniquement sur l'image
> Mettre les catégories de clubs / vêtements
> Peut-être mettre un dropdown sur la barre navigation avec la totalité des articles
> Créer les articles (card déjà présentes actuellement)
> Mettre une option à droite du nom pour afficher TOUS les produits pas en carousel mais format page
> Mettre un texte qui s'adapte en fonction de quand c'est en favoris ou pas \"Retirer des favoris\" \"Ajouter aux favoris\" lorsque l'on passe la souris
> Risque de devoir refaire toutes les images avec le chemin qui commence par \"Images/\" quand je vais clear le cache.
> Faire un système de tri pour trouver des produits
> Première page = Catalogue (boutons de visite), ça amène à la page de la catégorie où là tous les produits de la catégorie seront répertoriés (boutons d'info, d'ajout dans le panier et de favoris)

Concernant les rôles :
> Administrateur (Hauts placés qui peuvent gérer les permissions et donner les rôles aux salariés tout en pouvant personnaliser ses fonctions)
> Salarié (Peut gérer les promos, ajouter un produit, retirer un produit grâce à un formulaire)
> Utilisateur (Est le client)
\t\t\t\t\t\t\t\t\t\t
> Si on va plus loin, les membres mais dans le cas d'un site hors commerce.
-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "produit/proshop.html.twig";
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
\t\tProduits
\t</h3>

\t<div class=\"container\">
\t\t<div class=\"row mt-3\">
\t\t\t<h1>
\t\t\t\tTous les produits
\t\t\t</h1>
\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t\t\t\t\t<img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas dans vos favoris\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\">
\t\t\t\t\t\t\t<img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tClubs
\t\t\t\t</h1>
\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Driver</h5>
\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Bois 3</h5>
\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Hybride</h5>
\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Fers</h5>
\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Wedge</h5>
\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\tVêtements
\t\t\t\t\t\t</h1>

\t\t\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Casquette</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Manteau</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Polo</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Pantalon</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card col m-1\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t<img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Chaussures de golf</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Cliquez ici pour plus d'informations sur le produit\">
\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/info.png\" alt=\"information\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-row-reverse\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans vos favoris\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/favoris.png\" alt=\"favoris\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light m-1\" title=\"Le produit n'est pas dans votre panier\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"Images/Img-proshop/panier.png\" alt=\"panier\" width=\"25\" height=\"25\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


<!--
> Faire en sorte que le title du bouton s'affiche au passage de la souris partout sur le button et pas uniquement sur l'image
> Mettre les catégories de clubs / vêtements
> Peut-être mettre un dropdown sur la barre navigation avec la totalité des articles
> Créer les articles (card déjà présentes actuellement)
> Mettre une option à droite du nom pour afficher TOUS les produits pas en carousel mais format page
> Mettre un texte qui s'adapte en fonction de quand c'est en favoris ou pas \"Retirer des favoris\" \"Ajouter aux favoris\" lorsque l'on passe la souris
> Risque de devoir refaire toutes les images avec le chemin qui commence par \"Images/\" quand je vais clear le cache.
> Faire un système de tri pour trouver des produits
> Première page = Catalogue (boutons de visite), ça amène à la page de la catégorie où là tous les produits de la catégorie seront répertoriés (boutons d'info, d'ajout dans le panier et de favoris)

Concernant les rôles :
> Administrateur (Hauts placés qui peuvent gérer les permissions et donner les rôles aux salariés tout en pouvant personnaliser ses fonctions)
> Salarié (Peut gérer les promos, ajouter un produit, retirer un produit grâce à un formulaire)
> Utilisateur (Est le client)
\t\t\t\t\t\t\t\t\t\t
> Si on va plus loin, les membres mais dans le cas d'un site hors commerce.
-->

{% endblock %}

", "produit/proshop.html.twig", "/var/www/html/P_SiteGolf/templates/produit/proshop.html.twig");
    }
}
