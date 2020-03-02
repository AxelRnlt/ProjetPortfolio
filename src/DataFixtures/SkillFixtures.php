<?php

namespace App\DataFixtures;

use App\Entity\Skill;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SkillFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {  
         $s = new Skill();
        $s->setName('HTML');
        $s->setCategory('Langage');
        $s->setLinkImg('language-html5');
        $manager->persist($s);

        $manager->flush(); 
    }
}