<?php

namespace App\DataFixtures;


use Faker\Factory;
use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
    $faker = Factory::create();
    for ($i = 0; $i<100; $i ++) {
        $categorie = new Categorie();
        $categorie ->setName ($faker->name());
        $manager->persist($categorie);
         // $product = new Product();
         // $manager->persist($product);
 }
         $manager->flush();
    
    
}
}
