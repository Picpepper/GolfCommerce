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
\t\t\t\t\t\t\t\t\t\t> Faire en sorte que le title du bouton s'affiche au passage de la souris partout sur le button et pas uniquement sur l'image
\t\t\t\t\t\t\t\t\t\t> Mettre les catégories de clubs / vêtements
\t\t\t\t\t\t\t\t\t\t> Créer les articles (card déjà présentes actuellement)
\t\t\t\t\t\t\t\t\t\t> Mettre une option à droite du nom pour afficher TOUS les produits pas en carousel mais format page
\t\t\t\t\t\t\t\t\t\t> Mettre un texte qui s'adapte en fonction de quand c'est en favoris ou pas \"Retirer des favoris\" \"Ajouter aux favoris\" lorsque l'on passe la souris
\t\t\t\t\t\t\t\t\t\t> Risque de devoir refaire toutes les images avec le chemin qui commence par \"Images/\" quand je vais clear le cache.
\t\t\t\t\t\t\t\t\t\t> Faire un système de tri pour trouver des produits
\t\t\t\t\t\t\t\t\t\t> Première page = Catalogue (boutons de visite), ça amène à la page de la catégorie où là tous les produits de la catégorie seront répertoriés (boutons d'info, d'ajout dans le panier et de favoris)
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tConcernant les rôles :
\t\t\t\t\t\t\t\t\t\t> Administrateur (Hauts placés qui peuvent gérer les permissions et donner les rôles aux salariés tout en pouvant personnaliser ses fonctions)
\t\t\t\t\t\t\t\t\t\t> Salarié (Peut gérer les promos, ajouter un produit, retirer un produit grâce à un formulaire)
\t\t\t\t\t\t\t\t\t\t> Utilisateur (Est le client)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t> Si on va plus loin, les membres mais dans le cas d'un site hors commerce.
\t\t\t\t\t\t\t\t\t\t-->
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
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 55
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 55) == "club_golf")) {
                // line 56
                echo "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 58))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 58), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 60), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 61), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Prix :
\t\t\t\t\t\t\t\t\t\t";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 63), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t</div>
\t\t</div>


\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tTenues vestimentaires
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 91
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 91) == "tenue_vestimentaire")) {
                // line 92
                echo "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 94))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 94), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 96), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 97), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Prix :
\t\t\t\t\t\t\t\t\t\t";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 99), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 110
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tAccessoires
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 125, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 126
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 126) == "accessoire")) {
                // line 127
                echo "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 129))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 129), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 131), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 132), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Prix :
\t\t\t\t\t\t\t\t\t\t";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 134), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 145
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tChariots de golf
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 160, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 161
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 161) == "chariot")) {
                // line 162
                echo "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 164
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 164))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 164), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 166), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 167), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Prix :
\t\t\t\t\t\t\t\t\t\t";
                // line 169
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 169), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 180
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "\t\t\t</div>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tSacs de golf
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>


<div class=\"container\">
\t<div class=\"row row-cols-4\">
\t\t";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 195, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 196
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 196) == "sac")) {
                // line 197
                echo "\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card mb-4\" style=\"width: 18rem;\">
\t\t\t\t\t\t<img src=\"";
                // line 199
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 199))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 199), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 201
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 201), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 202
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 202), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t<p class=\"card-text\">Prix : ";
                // line 203
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 203), "html", null, true);
                echo " €</p>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 213
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "\t</div>
</div>


\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tBalles de golf
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>



<div class=\"container\">
\t<div class=\"row\">
\t\t";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 230, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 231
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 231) == "balle")) {
                // line 232
                echo "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card mb-4\" style=\"width: 18rem;\">
\t\t\t\t\t\t<img src=\"";
                // line 234
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 234))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 234), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 236
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 236), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 237
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 237), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t<p class=\"card-text\">Prix : ";
                // line 238
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 238), "html", null, true);
                echo " €</p>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 248
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "\t</div>
</div></div>

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
        return array (  486 => 249,  480 => 248,  467 => 238,  463 => 237,  459 => 236,  452 => 234,  448 => 232,  445 => 231,  441 => 230,  423 => 214,  417 => 213,  404 => 203,  400 => 202,  396 => 201,  389 => 199,  385 => 197,  382 => 196,  378 => 195,  362 => 181,  356 => 180,  342 => 169,  337 => 167,  333 => 166,  326 => 164,  322 => 162,  319 => 161,  315 => 160,  299 => 146,  293 => 145,  279 => 134,  274 => 132,  270 => 131,  263 => 129,  259 => 127,  256 => 126,  252 => 125,  236 => 111,  230 => 110,  216 => 99,  211 => 97,  207 => 96,  200 => 94,  196 => 92,  193 => 91,  189 => 90,  172 => 75,  166 => 74,  152 => 63,  147 => 61,  143 => 60,  136 => 58,  132 => 56,  129 => 55,  125 => 54,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
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
\t\t\t\t\t\t\t\t\t\t> Faire en sorte que le title du bouton s'affiche au passage de la souris partout sur le button et pas uniquement sur l'image
\t\t\t\t\t\t\t\t\t\t> Mettre les catégories de clubs / vêtements
\t\t\t\t\t\t\t\t\t\t> Créer les articles (card déjà présentes actuellement)
\t\t\t\t\t\t\t\t\t\t> Mettre une option à droite du nom pour afficher TOUS les produits pas en carousel mais format page
\t\t\t\t\t\t\t\t\t\t> Mettre un texte qui s'adapte en fonction de quand c'est en favoris ou pas \"Retirer des favoris\" \"Ajouter aux favoris\" lorsque l'on passe la souris
\t\t\t\t\t\t\t\t\t\t> Risque de devoir refaire toutes les images avec le chemin qui commence par \"Images/\" quand je vais clear le cache.
\t\t\t\t\t\t\t\t\t\t> Faire un système de tri pour trouver des produits
\t\t\t\t\t\t\t\t\t\t> Première page = Catalogue (boutons de visite), ça amène à la page de la catégorie où là tous les produits de la catégorie seront répertoriés (boutons d'info, d'ajout dans le panier et de favoris)
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tConcernant les rôles :
\t\t\t\t\t\t\t\t\t\t> Administrateur (Hauts placés qui peuvent gérer les permissions et donner les rôles aux salariés tout en pouvant personnaliser ses fonctions)
\t\t\t\t\t\t\t\t\t\t> Salarié (Peut gérer les promos, ajouter un produit, retirer un produit grâce à un formulaire)
\t\t\t\t\t\t\t\t\t\t> Utilisateur (Est le client)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t> Si on va plus loin, les membres mais dans le cas d'un site hors commerce.
\t\t\t\t\t\t\t\t\t\t-->
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
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t</div>
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
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>


<div class=\"container\">
\t<div class=\"row row-cols-4\">
\t\t{% for produit in produits %}
\t\t\t{% if produit.categorie == \"sac\" %}
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card mb-4\" style=\"width: 18rem;\">
\t\t\t\t\t\t<img src=\"{{ asset('Images/' ~ produit.image) }}\" class=\"card-img-top\" alt=\"{{ produit.nom }}\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ produit.nom }}</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">{{ produit.description }}</p>
\t\t\t\t\t\t\t<p class=\"card-text\">Prix : {{ produit.prix }} €</p>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</div>
</div>


\t\t<div class=\"container\">
\t\t\t<div class=\"row mt-3\">
\t\t\t\t<h1>
\t\t\t\t\tBalles de golf
\t\t\t\t</h1>
\t\t\t</div>
\t\t</div>



<div class=\"container\">
\t<div class=\"row\">
\t\t{% for produit in produits %}
\t\t\t{% if produit.categorie == \"balle\" %}
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"card mb-4\" style=\"width: 18rem;\">
\t\t\t\t\t\t<img src=\"{{ asset('Images/' ~ produit.image) }}\" class=\"card-img-top\" alt=\"{{ produit.nom }}\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ produit.nom }}</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">{{ produit.description }}</p>
\t\t\t\t\t\t\t<p class=\"card-text\">Prix : {{ produit.prix }} €</p>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/info.png\" alt=\"Info\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/favoris.png\" alt=\"Favoris\" width=\"25\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-secondary\"><img src=\"Images/Img-proshop/panier.png\" alt=\"Panier\" width=\"25\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t{% endfor %}
\t</div>
</div></div>

{% endblock %}

", "Admin/produit/proshop.html.twig", "/var/www/html/P_SiteGolf/templates/Admin/produit/proshop.html.twig");
    }
}
