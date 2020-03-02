<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $p = new Project();
        $p->setName('Projet 1');
        $p->setDescription('Description du Premier Projet, cela peut être très long. à voir ce que ça donne en base de données.');
        $p->setDate(new \DateTime('mm "-" YY'));

        $manager->persist($p);

        $manager->flush(); 
    }
}
