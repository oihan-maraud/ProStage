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
     * @Route("/entreprises", name="projet_stage_entreprises")
     */
    public function entreprises(): Response
    {
      $texte_entreprises = "Cette page affichera la liste des entreprises proposant un stage";
      return  $this ->render('projet_stage/entreprises.html.twig',
      ['controller_name'=> $texte_entreprises ]);
    }

    /**
     * @Route("/formations", name="projet_stage_formations")
     */
    public function formations(): Response
    {
      $texte_formations = "Cette page affichera la liste des formations de l'IUT";
      return  $this ->render('projet_stage/formations2.html.twig',
      ['controller_name'=> $texte_formations ]);
    }

    /**
     * @Route("/stages/{id}", name="projet_stage_Stages")
     */
    public function stages($id): Response
    {
      $texte_stages = "Cette page affichera le descriptif du stage ayant pour identifiant ". $id;
      return  $this ->render('projet_stage/stages.html.twig',
      ['controller_name'=> $texte_stages ]);
    }
}
