<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
//Encoder les mdp
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

//use Symfony\Component\Security\Core\User\UserInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder) {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $u = new User();
        $u->setEmail('testencoder2@gmail.com');
        $u->setRoles(['ROLE_ADMIN']);
        $u->setName('test2');
        $u->setFirstname('Firsttest2');
        $u->setPassword($this->passwordEncoder->encodePassword(
            $u,
            //'lemdp'
            'lemdp',
        ));

        $u->setBirthday(new \DateTime('2019-10-10'));
        $u->setAddress('1 Rue du test');
        $u->setPostcode('11111');
        $u->setCity('VilleTest');
        $u->setTelephone('0781517131');
        $manager->persist($u);
        $manager->flush(); 
        
        /*
        https://symfony.com/doc/4.0/security/entity_provider.html
        https://symfony.com/doc/4.4/testing/database.html#mocking-a-doctrine-repository-in-unit-tests
        */
    }
}
