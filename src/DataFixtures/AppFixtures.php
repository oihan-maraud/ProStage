<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Formation;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
      //Creation de generateurs de donnees Faker
      $faker = \Faker\Factory::create('fr_FR');

      $nbFormation = 5;

      for($i = 1; $i <= $nbFormation; $i++ ){
          // création d'une nouvelle formation
           $formation1 = new Formation();
           //Génération d'un non de formations
           $nomFormation = $faker->regexify("Formation [1-9]");
           //Définition du nom de la formation
           $formation1->setIntitule($nomFormation);
           //Définition du niveau de la formation
           $formation1->setNiveau($faker->regexify("[1-2]e année"));
           //Définition de la ville de la formation
           $formation1->setVille($faker->city());
           //Enregistrement de la formation créé
           $manager->persist($formation1);
       }

       // Envoyer les données en BD
        $manager->flush();
    }
}
