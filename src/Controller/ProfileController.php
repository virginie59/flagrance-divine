<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/profil', name: 'app_')]

class ProfileController extends AbstractController
{
    #[Route('/', name: 'profil')]

    public function index(UserRepository $userRepository): Response
    {
        $user = $this->getUser();
        return $this->render('profil/index.html.twig', [
            'user' => $user
        ]);
    }
}
