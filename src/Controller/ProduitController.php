<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/', name: 'produit')]
class ProduitController extends AbstractController
{
    #[Route('/', name: 'app_produit_ParfumF')]
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('produit/ParfumF.html.twig', [ 
            'ProduitRepository'=>$produitRepository
        ]);
    }

    #[Route('/', name: 'app_ParfumH')]
    public function edit(ProduitRepository $produitRepository): Response
    {
        return $this->render('produit/ParfumH.html.twig', [ 
            'ProduitRepository'=>$produitRepository
        ]);
    }
}