<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('abc');
        $movie->setDescription('qwerty');
        $movie->setImagePath('kjjhj');
        $movie->setReleaseYear(date('Y-m-d H:i:s'));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('qwer');
        $movie2->setDescription('lkjvcvf');
        $movie2->setImagePath('hhhh');
        $movie2->setReleaseYear(date('Y-m-d H:i:s'));
        $manager->persist($movie2);



        $manager->flush();
    }
}
