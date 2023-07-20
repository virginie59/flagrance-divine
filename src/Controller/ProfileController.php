<?php

namespace App\Controller;

use App\Entity\Painting;
use App\Repository\PaintingRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/profil', name: 'app_')]

class ProfileController extends AbstractController
{
    #[Route('/', name: 'profil')]

    public function index(): Response
    {
        return $this->render('profil/index.html.twig', [
        ]);
    }
}
