<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;


class Worker extends Fixture
{
    public function load(ObjectManager $manager)
    {

        for($i=0; $i<10; $i++) {
            $worker = new \App\Entity\Worker();
            $faker = Factory::create();
            $worker->setAge(mt_rand(20, 80));
            $worker->setName( $faker->firstName." ".$faker->lastName );
            $worker->setJob($faker->jobTitle);
            $worker->setContractType($faker->randomElement($array = array ('CDI','CDD')));
            $worker->setNumTel($faker->biasedNumberBetween($min = 22222222, $max = 99999999, $function = 'sqrt'));
            $worker->setCin($faker->biasedNumberBetween($min = 22222222, $max = 99999999, $function = 'sqrt'));
            $worker->setBirthday($faker->dateTime());
            $worker->setAdr($faker->address);
            $worker->setDateRecrut($faker->dateTime());



            $manager->persist($worker);
        }

        $manager->flush();
    }
}
