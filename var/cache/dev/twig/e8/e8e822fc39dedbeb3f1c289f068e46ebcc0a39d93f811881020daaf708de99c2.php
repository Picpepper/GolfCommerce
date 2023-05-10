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

/* base/proshop.html.twig */
class __TwigTemplate_02958d1dc2ca1d67d11cb20bb28a9ad27d982cac96ec64f09663bef9effa5cc2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/proshop.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "base/proshop.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Proshop";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1 class=\"text-center text-primary mt-4 pt-4 display-1 fw-bold\"> PROSHOP</h1>
    <h2 class=\"text-center text-secondary mb-4 pb-4 display-2\"> En construction ... </h2>

<div class=\"container\">
<div class=\"row mt-3\">
<h1> Clubs </h1>

<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Driver</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>

<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Bois 3</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>

<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Hybride</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>

<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Fers</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>

<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Wedge</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>




<div class=\"container\">
<div class=\"row mt-3\">
<h1> Vêtements </h1>

<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Casquette</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>


<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Manteau</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>

<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Polo</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>


<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">CPantalon</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>


<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Chaussures de golf</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>

</div>
</div>

<!--
    > Faire en sorte que le title du bouton s'affiche au passage de la souris partout sur le button et pas uniquement sur l'image (pas grave si je n'y arrive pas)
    > Mettre les catégories de clubs / vêtements
    > Peut-être mettre un dropdown sur la barre navigation avec la totalité des articles
    > Créer les articles (card déjà présentes actuellement)
    > Mettre une option à droite du nom pour afficher TOUS les produits pas en carousel mais format page
    > Mettre un texte qui s'adapte en fonction de quand c'est en favoris ou pas \"Retirer des favoris\" \"Ajouter aux favoris\" lorsque l'on passe la souris
-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base/proshop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 6,  67 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}}Proshop{% endblock %}

{% block body %}
    <h1 class=\"text-center text-primary mt-4 pt-4 display-1 fw-bold\"> PROSHOP</h1>
    <h2 class=\"text-center text-secondary mb-4 pb-4 display-2\"> En construction ... </h2>

<div class=\"container\">
<div class=\"row mt-3\">
<h1> Clubs </h1>

<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Driver</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>

<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Bois 3</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>

<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Hybride</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>

<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Fers</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>

<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Wedge</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>




<div class=\"container\">
<div class=\"row mt-3\">
<h1> Vêtements </h1>

<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Casquette</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>


<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Manteau</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>

<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Polo</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>


<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">CPantalon</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>


<div class=\"card col m-1\" style=\"width: 18rem;\">
  <img src=\"...\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Chaussures de golf</h5>
    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <div class=\"d-flex flex-row-reverse\">
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/favoris.png\" title=\"Le produit n'est pas en favoris\" alt=\"favoris\" width=\"25\" height=\"25\"> </a>
    <a href=\"#\" class=\"btn btn-light m-1\"> <img src=\"Img-proshop/panier.png\" title=\"Le produit n'est pas dans votre panier\" alt=\"panier\" width=\"25\" height=\"25\"> </a>
  </div>
  </div>
</div>

</div>
</div>

<!--
    > Faire en sorte que le title du bouton s'affiche au passage de la souris partout sur le button et pas uniquement sur l'image (pas grave si je n'y arrive pas)
    > Mettre les catégories de clubs / vêtements
    > Peut-être mettre un dropdown sur la barre navigation avec la totalité des articles
    > Créer les articles (card déjà présentes actuellement)
    > Mettre une option à droite du nom pour afficher TOUS les produits pas en carousel mais format page
    > Mettre un texte qui s'adapte en fonction de quand c'est en favoris ou pas \"Retirer des favoris\" \"Ajouter aux favoris\" lorsque l'on passe la souris
-->

{% endblock %}", "base/proshop.html.twig", "/var/www/html/P_SiteGolf/templates/base/proshop.html.twig");
    }
}
