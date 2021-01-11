<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Formation;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
       $formation1 = new Formation();
       $formation1->setIntitule("Dut info");
       $formation1->setNiveau("2e annee");
       $formation1->setVille("Bayonne");

       $manager->persist($formation1);

        $manager->flush();
    }
}
