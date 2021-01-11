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

       $formation1 = new Formation();
       $formation1->setIntitule($faker->realText($maxNbChars = 50, $indexSize = 2));
       $formation1->setNiveau("2e annee");
       $formation1->setVille("Bayonne");

       $manager->persist($formation1);

        $manager->flush();
    }
}
