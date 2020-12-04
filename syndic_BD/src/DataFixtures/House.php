<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class House extends Fixture
{
    public function load(ObjectManager $manager)
    { for($i=0; $i<100; $i++) {

        $house = new \App\Entity\House();
        $faker = Factory::create();
        $house->setAppart($faker->secondaryAddress);
        $house->setImmeuble("b5");
        $house->setDateAchat($faker->dateTime);
        $house->setDette($faker->randomNumber(4));
        $house->setPrice1($faker->randomNumber(4));
        $house->setPrice2($faker->randomNumber(4));
        $house->setPrice3($faker->randomNumber(4));

        $manager->persist($house);
    }
        $manager->flush();
    }
}
