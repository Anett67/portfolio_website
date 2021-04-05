<?php

namespace App\DataFixtures;

use App\Entity\Technology;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TechnologieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $t1 = new Technology();
        $t1->setName('HTML');
        $manager->persist($t1);

        $t3 = new Technology();
        $t3->setName('CSS/Sass');
        $manager->persist($t3);

        $t2 = new Technology();
        $t2->setName('Bootstrap');
        $manager->persist($t2);

        $t444 = new Technology();
        $t444->setName('JavaScript');
        $manager->persist($t444);

        $t4 = new Technology();
        $t4->setName('jQuery');
        $manager->persist($t4);

        $t5 = new Technology();
        $t5->setName('React JS');
        $manager->persist($t5);

        $t6 = new Technology();
        $t6->setName('PHP');
        $manager->persist($t6);

        $t7 = new Technology();
        $t7->setName('Symfony 4/5');
        $manager->persist($t7);

        $t8 = new Technology();
        $t8->setName('Gulp');
        $manager->persist($t8);

        $t9 = new Technology();
        $t9->setName('Webpack');
        $manager->persist($t9);

        $t10 = new Technology();
        $t10->setName('Linux');
        $manager->persist($t10);

        $t11 = new Technology();
        $t11->setName('SQL');
        $manager->persist($t11);

        $t12 = new Technology();
        $t12->setName('MySQL');
        $manager->persist($t12);

        $t13 = new Technology();
        $t13->setName('WordPress');
        $manager->persist($t13);

        $t14 = new Technology();
        $t14->setName('Python');
        $manager->persist($t14);

        $t15 = new Technology();
        $t15->setName('Adobe XD');
        $manager->persist($t15);

        $t16 = new Technology();
        $t16->setName('Photoshop');
        $manager->persist($t16);

        $manager->flush();
    }
}
