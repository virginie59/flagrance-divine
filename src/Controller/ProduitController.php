<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/produit', name: 'app_produit')]
class ProduitController extends AbstractController
{
    #[Route('/ParfumF', name: 'app_produit_ParfumF')]
    public function index(ProduitRepository $produitRepository): Response
    {
        $produits = $produitRepository->findAll();

        $user = $this->getUser();

        return $this->render('produit/ParfumF.html.twig', [ 
            'ProduitRepository'=>$produitRepository
        ]);
    }

   #[Route('/ParfumH', name: 'app_produit_ParfumH')]
    public function edit(ProduitRepository $produitRepository): Response
    {
        $produits = $produitRepository->findAll();

        $user = $this->getUser();

        return $this->render('produit/ParfumH.html.twig', [ 
            'ProduitRepository'=>$produitRepository
        ]);
    }
    #[Route('/CollectionSoins', name: 'app_produit_CollectionSoins')]
    public function show(ProduitRepository $produitRepository): Response
    {
        $produits = $produitRepository->findAll();

        $user = $this->getUser();

        return $this->render('produit/ParfumH.html.twig', [ 
            'ProduitRepository'=>$produitRepository
        ]);
    }
}