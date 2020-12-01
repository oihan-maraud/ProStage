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
      $texte_accueil = "Bienvenue sur la page d'accueil de Prostages";
      return  $this ->render('projet_stage/index.html.twig');
    }


    /**
     * @Route("/stages/{id}", name="projet_stage_Stages")
     */
    public function stages($id): Response
    {
      return  $this ->render('projet_stage/stages.html.twig',
      ['idStages'=>  $id]);
    }

    /**
     * @Route("/filtre/{id_filtre}", name="projet_stage_filtre")
     */
    public function filtre($id_filtre): Response
    {
      return  $this ->render('projet_stage/filtres.html.twig',
      ['filter'=>  $id_filtre]);
    }
}
