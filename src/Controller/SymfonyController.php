<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SymfonyController extends AbstractController
{
    /**
     * @Route("/symfony", name="symfony")
     */
    public function index()
    {
        return $this->render('symfony/index.html.twig', [
            'controller_name' => 'SymfonyController',
        ]);
    }
}
