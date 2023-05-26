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

/* Admin/produit/proshop.html.twig */
class __TwigTemplate_e10901351ff46a138c02684641c13f4763ec767ac77b142ad9d22878efa6a2a0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/produit/proshop.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/produit/proshop.html.twig", 1);
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
        echo "\t<style>
\t\t@font-face {
\t\t\tfont-family: 'Herbe';
\t\t\tsrc: url('public/templates/Herbe.ttf') format('truetype');
\t\t}

\t\th5 {
\t\t\tfont-family: 'Herbe';
\t\t\tfont-weight: bold;
\t\t\tcolor: #7CFC00;
\t\t}
\t</style>
\t<!--
\t\t\t\t\t\t\t\t\t\t\t\t> Faire en sorte que le title du bouton s'affiche au passage de la souris partout sur le button et pas uniquement sur l'image
\t\t\t\t\t\t\t\t\t\t\t\t> Mettre les catégories de clubs / vêtements
\t\t\t\t\t\t\t\t\t\t\t\t> Créer les articles (card déjà présentes actuellement)
\t\t\t\t\t\t\t\t\t\t\t\t> Mettre une option à droite du nom pour afficher TOUS les produits pas en carousel mais format page
\t\t\t\t\t\t\t\t\t\t\t\t> Mettre un texte qui s'adapte en fonction de quand c'est en favoris ou pas \"Retirer des favoris\" \"Ajouter aux favoris\" lorsque l'on passe la souris
\t\t\t\t\t\t\t\t\t\t\t\t> Risque de devoir refaire toutes les images avec le chemin qui commence par \"Images/\" quand je vais clear le cache.
\t\t\t\t\t\t\t\t\t\t\t\t> Faire un système de tri pour trouver des produits
\t\t\t\t\t\t\t\t\t\t\t\t> Première page = Catalogue (boutons de visite), ça amène à la page de la catégorie où là tous les produits de la catégorie seront répertoriés (boutons d'info, d'ajout dans le panier et de favoris)
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\tConcernant les rôles :
\t\t\t\t\t\t\t\t\t\t\t\t> Administrateur (Hauts placés qui peuvent gérer les permissions et donner les rôles aux salariés tout en pouvant personnaliser ses fonctions)
\t\t\t\t\t\t\t\t\t\t\t\t> Salarié (Peut gérer les promos, ajouter un produit, retirer un produit grâce à un formulaire)
\t\t\t\t\t\t\t\t\t\t\t\t> Utilisateur (Est le client)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t> Si on va plus loin, les membres mais dans le cas d'un site hors commerce.
\t\t\t\t\t\t\t\t\t\t\t\t-->
\t<h1 class=\"text-center mt-4 pt-4 display-1 fw-bold\">
\t\tPROSHOP</h1>
\t<h3 class=\"text-center mb-4 pb-4 display-2\">
\t\tProduits
\t</h3>

\t<div class=\"container\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tClubs de golf
\t\t\t\t\t";
        // line 48
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYE"))) {
            // line 49
            echo "\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutproduit");
            echo "\">+</a>
\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 58
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 58) == "club_golf")) {
                // line 59
                echo "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 61))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 61), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 63), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 64), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Prix :
\t\t\t\t\t\t\t\t\t\t";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 66), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t</div>
\t\t</div>


\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tTenues vestimentaires
\t\t\t\t\t";
        // line 86
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYE"))) {
            // line 87
            echo "\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutproduit");
            echo "\">+</a>
\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 97
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 97) == "tenue_vestimentaire")) {
                // line 98
                echo "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 100))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 100), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 102), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 103), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Prix :
\t\t\t\t\t\t\t\t\t\t";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 105), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 116
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tAccessoires
\t\t\t\t\t";
        // line 124
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYE"))) {
            // line 125
            echo "\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutproduit");
            echo "\">+</a>
\t\t\t\t\t";
        }
        // line 127
        echo "\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 133, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 134
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 134) == "accessoire")) {
                // line 135
                echo "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 137))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 137), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 139), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 140), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Prix :
\t\t\t\t\t\t\t\t\t\t";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 142), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tChariots de golf
\t\t\t\t\t";
        // line 161
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYE"))) {
            // line 162
            echo "\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutproduit");
            echo "\">+</a>
\t\t\t\t\t";
        }
        // line 164
        echo "\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 171, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 172
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 172) == "chariot")) {
                // line 173
                echo "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 175
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 175))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 175), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 177
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 177), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 178
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 178), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Prix :
\t\t\t\t\t\t\t\t\t\t";
                // line 180
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 180), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 191
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tSacs de golf
\t\t\t\t\t";
        // line 199
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYE"))) {
            // line 200
            echo "\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutproduit");
            echo "\">+</a>
\t\t\t\t\t";
        }
        // line 202
        echo "\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>


\t\t";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 207, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 208
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 208) == "sac")) {
                // line 209
                echo "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card mb-4\" style=\"width: 18rem;\">
\t\t\t\t\t\t<img src=\"";
                // line 211
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 211))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 211), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 213
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 213), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 214
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 214), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t<p class=\"card-text\">Prix :
\t\t\t\t\t\t\t\t";
                // line 216
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 216), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t";
                // line 220
                if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 220, $this->source); })()), "user", [], "any", false, false, false, 220) && twig_in_filter($context["produit"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 220, $this->source); })()), "user", [], "any", false, false, false, 220), "getFavoris", [], "method", false, false, false, 220)))) {
                    // line 221
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris_supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 221)]), "html", null, true);
                    echo "\" class=\"btn btn-success\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 223
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris_ajouter", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 223)]), "html", null, true);
                    echo "\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t";
                }
                // line 225
                echo "\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 231
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "

\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tBalles de golf

\t\t\t\t\t";
        // line 239
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYE"))) {
            // line 240
            echo "\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutproduit");
            echo "\">+</a>
\t\t\t\t\t";
        }
        // line 242
        echo "\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 248, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 249
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 249) == "balle")) {
                // line 250
                echo "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card mb-4\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 252
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 252))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 252), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 254
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 254), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 255
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 255), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Prix :
\t\t\t\t\t\t\t\t\t\t";
                // line 257
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 257), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 268
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Admin/produit/proshop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 269,  553 => 268,  539 => 257,  534 => 255,  530 => 254,  523 => 252,  519 => 250,  516 => 249,  512 => 248,  504 => 242,  498 => 240,  496 => 239,  487 => 232,  481 => 231,  473 => 225,  467 => 223,  461 => 221,  459 => 220,  452 => 216,  447 => 214,  443 => 213,  436 => 211,  432 => 209,  429 => 208,  425 => 207,  418 => 202,  412 => 200,  410 => 199,  401 => 192,  395 => 191,  381 => 180,  376 => 178,  372 => 177,  365 => 175,  361 => 173,  358 => 172,  354 => 171,  345 => 164,  339 => 162,  337 => 161,  328 => 154,  322 => 153,  308 => 142,  303 => 140,  299 => 139,  292 => 137,  288 => 135,  285 => 134,  281 => 133,  273 => 127,  267 => 125,  265 => 124,  256 => 117,  250 => 116,  236 => 105,  231 => 103,  227 => 102,  220 => 100,  216 => 98,  213 => 97,  209 => 96,  200 => 89,  194 => 87,  192 => 86,  182 => 78,  176 => 77,  162 => 66,  157 => 64,  153 => 63,  146 => 61,  142 => 59,  139 => 58,  135 => 57,  127 => 51,  121 => 49,  119 => 48,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ parent() }}Proshop
{% endblock %}

{% block body %}
\t<style>
\t\t@font-face {
\t\t\tfont-family: 'Herbe';
\t\t\tsrc: url('public/templates/Herbe.ttf') format('truetype');
\t\t}

\t\th5 {
\t\t\tfont-family: 'Herbe';
\t\t\tfont-weight: bold;
\t\t\tcolor: #7CFC00;
\t\t}
\t</style>
\t<!--
\t\t\t\t\t\t\t\t\t\t\t\t> Faire en sorte que le title du bouton s'affiche au passage de la souris partout sur le button et pas uniquement sur l'image
\t\t\t\t\t\t\t\t\t\t\t\t> Mettre les catégories de clubs / vêtements
\t\t\t\t\t\t\t\t\t\t\t\t> Créer les articles (card déjà présentes actuellement)
\t\t\t\t\t\t\t\t\t\t\t\t> Mettre une option à droite du nom pour afficher TOUS les produits pas en carousel mais format page
\t\t\t\t\t\t\t\t\t\t\t\t> Mettre un texte qui s'adapte en fonction de quand c'est en favoris ou pas \"Retirer des favoris\" \"Ajouter aux favoris\" lorsque l'on passe la souris
\t\t\t\t\t\t\t\t\t\t\t\t> Risque de devoir refaire toutes les images avec le chemin qui commence par \"Images/\" quand je vais clear le cache.
\t\t\t\t\t\t\t\t\t\t\t\t> Faire un système de tri pour trouver des produits
\t\t\t\t\t\t\t\t\t\t\t\t> Première page = Catalogue (boutons de visite), ça amène à la page de la catégorie où là tous les produits de la catégorie seront répertoriés (boutons d'info, d'ajout dans le panier et de favoris)
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\tConcernant les rôles :
\t\t\t\t\t\t\t\t\t\t\t\t> Administrateur (Hauts placés qui peuvent gérer les permissions et donner les rôles aux salariés tout en pouvant personnaliser ses fonctions)
\t\t\t\t\t\t\t\t\t\t\t\t> Salarié (Peut gérer les promos, ajouter un produit, retirer un produit grâce à un formulaire)
\t\t\t\t\t\t\t\t\t\t\t\t> Utilisateur (Est le client)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t> Si on va plus loin, les membres mais dans le cas d'un site hors commerce.
\t\t\t\t\t\t\t\t\t\t\t\t-->
\t<h1 class=\"text-center mt-4 pt-4 display-1 fw-bold\">
\t\tPROSHOP</h1>
\t<h3 class=\"text-center mb-4 pb-4 display-2\">
\t\tProduits
\t</h3>

\t<div class=\"container\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tClubs de golf
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_EMPLOYE')%}
\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"{{path('ajoutproduit')}}\">+</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t{% for produit in produits %}
\t\t\t\t\t{% if produit.categorie == \"club_golf\" %}
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('Images/' ~ produit.image) }}\" class=\"card-img-top\" alt=\"{{ produit.nom }}\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ produit.nom }}</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ produit.description }}</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Prix :
\t\t\t\t\t\t\t\t\t\t{{ produit.prix }}
\t\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>


\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tTenues vestimentaires
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_EMPLOYE')%}
\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"{{path('ajoutproduit')}}\">+</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t{% for produit in produits %}
\t\t\t\t\t{% if produit.categorie == \"tenue_vestimentaire\" %}
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('Images/' ~ produit.image) }}\" class=\"card-img-top\" alt=\"{{ produit.nom }}\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ produit.nom }}</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ produit.description }}</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Prix :
\t\t\t\t\t\t\t\t\t\t{{ produit.prix }}
\t\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tAccessoires
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_EMPLOYE')%}
\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"{{path('ajoutproduit')}}\">+</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t{% for produit in produits %}
\t\t\t\t\t{% if produit.categorie == \"accessoire\" %}
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('Images/' ~ produit.image) }}\" class=\"card-img-top\" alt=\"{{ produit.nom }}\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ produit.nom }}</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ produit.description }}</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Prix :
\t\t\t\t\t\t\t\t\t\t{{ produit.prix }}
\t\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tChariots de golf
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_EMPLOYE')%}
\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"{{path('ajoutproduit')}}\">+</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t{% for produit in produits %}
\t\t\t\t\t{% if produit.categorie == \"chariot\" %}
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('Images/' ~ produit.image) }}\" class=\"card-img-top\" alt=\"{{ produit.nom }}\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ produit.nom }}</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ produit.description }}</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Prix :
\t\t\t\t\t\t\t\t\t\t{{ produit.prix }}
\t\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tSacs de golf
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_EMPLOYE')%}
\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"{{path('ajoutproduit')}}\">+</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>


\t\t{% for produit in produits %}
\t\t\t{% if produit.categorie == \"sac\" %}
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card mb-4\" style=\"width: 18rem;\">
\t\t\t\t\t\t<img src=\"{{ asset('Images/' ~ produit.image) }}\" class=\"card-img-top\" alt=\"{{ produit.nom }}\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ produit.nom }}</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">{{ produit.description }}</p>
\t\t\t\t\t\t\t<p class=\"card-text\">Prix :
\t\t\t\t\t\t\t\t{{ produit.prix }}
\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t{% if app.user and produit in app.user.getFavoris() %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('favoris_supprimer', {id: produit.id}) }}\" class=\"btn btn-success\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('favoris_ajouter', {id: produit.id}) }}\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t{% endfor %}


\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tBalles de golf

\t\t\t\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_EMPLOYE')%}
\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"{{path('ajoutproduit')}}\">+</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t{% for produit in produits %}
\t\t\t\t\t{% if produit.categorie == \"balle\" %}
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card mb-4\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('Images/' ~ produit.image) }}\" class=\"card-img-top\" alt=\"{{ produit.nom }}\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ produit.nom }}</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ produit.description }}</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Prix :
\t\t\t\t\t\t\t\t\t\t{{ produit.prix }}
\t\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}

", "Admin/produit/proshop.html.twig", "/var/www/html/P_SiteGolf/templates/Admin/produit/proshop.html.twig");
    }
}
