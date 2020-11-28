<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetStageController extends AbstractController
{
    /**
     * @Route("/", name="projet_stage_accueil")
     */
    public function index(): Response
    {
        return $this->render('projet_stage/index.html.twig', [
            'controller_name' => 'Projet Stage Controller',
        ]);
    }
}
