<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Stage;
use App\Entity\Entreprise;
use App\Entity\Formation;
use App\Repository\StageRepository;

class ProjetStageController extends AbstractController
{
    /**
     * @Route("/", name="projet_stage_accueil")
     */
    public function index(StageRepository $repositoryStage): Response
    {
      //récupérer les stages enregistrés en BD
      $stages = $repositoryStage->findAll();

      //Envoyer les stages récupérer à la vue chargé de les afficher
      return  $this ->render('projet_stage/index.html.twig', ['stages'=>$stages]);
    }

    /**
     * @Route("/ajouterEntreprise", name="projet_stage_ajoutEntreprise")
     */
    public function ajouterEntreprise(): Response
    {
      //afficher la page présentant le formulaire d'ajout d'une entreprise
      return  $this -> render('projet_stage/ajoutEntreprise.html.twig');
    }


    /**
     * @Route("/stages/{id}", name="projet_stage_Stages")
     */
    public function stages(Stage $stage): Response
    {
      return  $this ->render('projet_stage/stages.html.twig',
      ['stage'=> $stage]);
    }

    /**
     * @Route("/entreprise/{nom}", name="projet_stage_enreprise")
     */
    public function entreprise($nom): Response
    {
      //récupérer le repository de l'entité Stage
      $repositoryStage = $this->getDoctrine()->getRepository(Stage::class);

      $stage = $repositoryStage->findByNomEntreprise($nom);

      return  $this ->render('projet_stage/entreprise.html.twig',
      ['stage'=> $stage]);
    }

    /**
     * @Route("/formation/{intitule}", name="projet_stage_formation")
     */
    public function formations($intitule): Response
    {
      //récupérer le repository de l'entité Stage
      $repositoryStage = $this->getDoctrine()->getRepository(Stage::class);

      //récupérer les stages de la formation qui a pour id celui passé en paramètre qui est enregistré en BD
      $stage = $repositoryStage->findByNomFormation($intitule);

      return  $this ->render('projet_stage/formation.html.twig',
      ['stage'=>  $stage]);
    }
    /**
     * @Route("/filtreFormation", name="projet_stage_filtre_formation")
     */
    public function filtreFormations(): Response
    {
      // Récupérer le repository de l'entité Formation
      $repositoryFormation = $this->getDoctrine()->getRepository(Formation::class);

      // Récupérer les stages par formations enregistrées en BD
      $formations=$repositoryFormation->findAll();

      return  $this ->render('projet_stage/filtreFormation.html.twig',
      ['formations' => $formations]);
    }

    /**
     * @Route("/filtreEntreprise", name="projet_stage_filtre_entreprise")
     */
    public function filtreEntreprise(): Response
    {
      // Récupérer le repository de l'entité Entreprise
      $repositoryEntreprise = $this->getDoctrine()->getRepository(Entreprise::class);

      // Récupérer les stages par entreprise enregistrées en BD
      $entreprises = $repositoryEntreprise->findAll();

      return  $this ->render('projet_stage/filtreEntreprise.html.twig',
      ['entreprises' => $entreprises]);
    }

}