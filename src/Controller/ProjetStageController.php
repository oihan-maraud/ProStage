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
     * @Route("/stages/{intitule}", name="projet_stage_Stages")
     */
    public function stages($intitule): Response
    {
      return  $this ->render('projet_stage/stages.html.twig',
      ['idStages'=>  $intitule]);
    }

    /**
     * @Route("/filtre/entreprise", name="projet_stage_filtre_enreprise")
     */
    public function filtre(): Response
    {
      return  $this ->render('projet_stage/filtresEntreprise.html.twig');
    }

}
