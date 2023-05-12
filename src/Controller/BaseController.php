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
        return $this->render('base/index.html.twig', [

        ]);
    }

    #[Route('/proshop', name: 'proshop')]
    public function proshop(): Response
    {
        return $this->render('base/proshop.html.twig', [
            
        ]);
    }

    #[Route('/catalogue', name: 'catalogue')]
    public function catalogue(): Response
    {
        return $this->render('base/catalogue.html.twig', [
            
        ]);
    }

    #[Route('/mentions-legales', name: 'mentions')]
    public function mentions(): Response
    {
        return $this->render('base/mentions-legales.html.twig', [
            
        ]);
    }

    #[Route('/a-propos', name: 'propos')]
    public function propos(): Response
    {
        return $this->render('base/a-propos.html.twig', [
            
        ]);
    }
}
