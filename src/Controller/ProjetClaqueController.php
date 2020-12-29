<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetClaqueController extends AbstractController
{
    /**
     * @Route("/projet_claque", name="projet_claque")
     */
    public function index(): Response
    {
        return $this->render('projet_claque/index.html.twig', [
            'controller_name' => 'ProjetClaqueController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('projet_claque/home.html.twig', [
            'controller_name' => 'ProjetClaqueController',
        ]);
    }
}
