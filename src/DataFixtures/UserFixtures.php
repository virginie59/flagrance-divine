<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

     public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    public function load(ObjectManager $manager): void
    {
        $admin = new User();
        $admin->setEmail('admin@fla.fr');
        $admin->setFirstname('Adeline');
        $admin->setLastname('Sechet');
        $admin->setRoles(['ROLE_ADMIN']);
        $hashedPassword = $this->passwordHasher->hashPassword(
            $admin,
            'password'
        );
        $admin->setPassword($hashedPassword);
        $manager->persist($admin);

        $user = new User();
        $user->setEmail('user@fla.fr');
        $user->setFirstname('valerie');
        $user->setLastname('Lefebvre');
        $hashedPassword = $this->passwordHasher->hashPassword(
            $user,
            'userpassword'
        );
        $user->setPassword($hashedPassword);
        $manager->persist($user);

        $manager->flush();
    }
}


