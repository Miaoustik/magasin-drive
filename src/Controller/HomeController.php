<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\UX\Turbo\TurboBundle;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/test')]
    public function toast(Request $request): Response
    {
        $request->setRequestFormat(TurboBundle::STREAM_FORMAT);
        return $this->render('toast.html.twig', [
            'message' => "Votre profil à été mis à jour."
        ]);
    }
}
