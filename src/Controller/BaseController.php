<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    #[Route('/i', name: 'index')]
    public function index(): Response
    {
        return $this->render('Utilisateur/base/accueil.html.twig', [

        ]);
    }

    #[Route('/catalogue', name: 'catalogue')]
    public function catalogue(): Response
    {
        return $this->render('Utilisateur/base/catalogue.html.twig', [
            
        ]);
    }

    #[Route('/mentions-legales', name: 'mentions')]
    public function mentions(): Response
    {
        return $this->render('Utilisateur/base/mentions-legales.html.twig', [
            
        ]);
    }

    #[Route('/a-propos', name: 'propos')]
    public function propos(): Response
    {
        return $this->render('Utilisateur/base/a-propos.html.twig', [
            
        ]);
    }

    #[Route('/test', name: 'test')]
    public function test(): Response
    {
        return $this->render('Utilisateur/base/test.html.twig', [
            
        ]);
    }
}
