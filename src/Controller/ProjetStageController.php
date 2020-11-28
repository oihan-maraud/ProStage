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
      return  new  Response('<html ><body ><h1 >Bienvenue sur la page d\'accueil de Prostages </h1 ></body ></html >');
    }

    /**
     * @Route("/entreprises", name="projet_stage_entreprises")
     */
    public function entreprises(): Response
    {
      return  new  Response('<html ><body ><h1 >Cette page affichera la liste des entreprises proposant un stage </h1 ></body ></html >');
    }

    /**
     * @Route("/formations", name="projet_stage_formations")
     */
    public function formations(): Response
    {
      return  new  Response('<html ><body ><h1 >Cette page affichera la liste des formations de l\'IUT </h1 ></body ></html >');
    }

    /**
     * @Route("/stages/{id}", name="projet_stage_Stages")
     */
    public function stages($id): Response
    {
      return  new  Response('Bienvenue sur la page d\'accueil de Prostages ' . $id );
    }
}
