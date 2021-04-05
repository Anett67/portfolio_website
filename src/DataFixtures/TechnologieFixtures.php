<?php

namespace App\DataFixtures;

use App\Entity\Technology;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TechnologieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {



        $manager->flush();
    }
}
