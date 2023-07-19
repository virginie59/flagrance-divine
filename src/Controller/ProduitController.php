<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/', name: 'app_produit')]
class ProduitController extends AbstractController
{
    #[Route('/', name: 'app_ParfumF')]
    public function index(ProduitRepository $produitRepository): Response
    {
        return $this->render('produit/ParfumF.html.twig', [ 
            'ProduitRepository'=>$produitRepository
        ]);
    }
}