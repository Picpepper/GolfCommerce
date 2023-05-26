<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FavorisController extends AbstractController
{
    #[Route(path:'/favoris/ajouter/{id}', name:'favoris_ajouter')]
    public function ajouterAuxFavoris(Produit $produit): Response
    {
        // Vérifier si l'utilisateur est connecté
        if (!$this->getUser()) {
            // Rediriger vers la page de login
            return $this->redirectToRoute('login');
        }

        // Récupérer l'utilisateur connecté
        $utilisateur = $this->getUser();

        // Ajouter le produit aux favoris de l'utilisateur
        $utilisateur->addFavori($produit);

        // Enregistrer les modifications en base de données
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        // Rediriger vers la page des produits ou une autre page de votre choix
        return $this->redirectToRoute('listefavoris');
    }

    #[Route(path:'/favoris/supprimer/{id}', name:'favoris_supprimer')]
    public function supprimerDesFavoris(Produit $produit): Response
    {
        // Vérifier si l'utilisateur est connecté
        if (!$this->getUser()) {
            // Rediriger vers la page de login
            return $this->redirectToRoute('login');
        }

        // Récupérer l'utilisateur connecté
        $utilisateur = $this->getUser();

        // Supprimer le produit des favoris de l'utilisateur
        $utilisateur->removeFavori($produit);

        // Enregistrer les modifications en base de données
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        // Rediriger vers la page des produits ou une autre page de votre choix
        return $this->redirectToRoute('listefavoris');
    }
}
