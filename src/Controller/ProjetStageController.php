<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetStageController extends AbstractController
{
    /**
     * @Route("/projet/stage", name="projet_stage")
     */
    public function index(): Response
    {
        return $this->render('projet_stage/index.html.twig', [
            'controller_name' => 'ProjetStageController',
        ]);
    }
}
