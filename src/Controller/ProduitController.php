<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;
use App\Form\ProduitType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;

class ProduitController extends AbstractController
{
    #[Route('/ajoutproduit', name: 'ajoutproduit')]
    public function AjoutProduits(EntityManagerInterface $entityManagerInterface,Request $request, SluggerInterface $slugger): Response
    {
        $produits = new Produit();
        $form = $this->createForm(ProduitType::class, $produits);

        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if ($form->isSubmitted()&&$form->isValid()){
                $image = $form->get('image')->getData();
                if($image){
                    $nomFichier = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                    $nomFichier = $slugger->slug($nomFichier);
                    $nomFichier = $nomFichier.'-'.uniqid().'.'.$image->guessExtension();
                    try{
                        $image->move($this->getParameter('file_directory'), $nomFichier);
                        $this->addFlash('notice', 'Image envoyée');
                        $produits->setImage($nomFichier);
                    }
                    catch(FileException $e){
                        $this->addFlash('notice', 'Erreur');
                    }
                }
              
                $entityManagerInterface->persist($produits);
                $entityManagerInterface->flush();

                $this->addFlash('notice','Modification réussi');
                return $this->redirectToRoute('proshop');
            }
        }
        return $this->render('Admin/produit/ajoutproduit.html.twig', [
                'produits' => $produits,
                'ajoutproduit' => $form->createView(),
            ]);
            
    }

    #[Route('/proshop', name: 'proshop')]
    public function proshop(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(ProduitType::class);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $produits = $form->getData();
    
            $image = $form->get('image')->getData();
            if ($image) {
                $nomFichier = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $nomFichier = $slugger->slug($nomFichier);
                $nomFichier = $nomFichier.'-'.uniqid().'.'.$image->guessExtension();
                try {
                    $image->move($this->getParameter('file_directory'), $nomFichier);
                    $this->addFlash('notice', 'Image envoyée');
                    $produits->setImage($nomFichier);
                } catch (FileException $e) {
                    $this->addFlash('notice', 'Erreur');
                }
            }
    
            $entityManager->persist($produits);
            $entityManager->flush();
    
            $this->addFlash('notice', 'Modification réussie');
            return $this->redirectToRoute('test');
        }
    
        $produits = $entityManager->getRepository(Produit::class)->findAll();
    
        return $this->render('Admin/produit/proshop.html.twig', [
            'produits' => $produits,
            'ajoutproduit' => $form->createView(),
        ]);
    }
    
}