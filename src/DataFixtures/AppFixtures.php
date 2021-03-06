<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPrenom('Steven');
        $user->setEmail('admin@gmail.com');
        $user->setNom('Nativel');
        $user->setPassword('admin');
        $manager->persist($user);
        $manager->flush();
    }
}
