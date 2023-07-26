<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Produit;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\String\Slugger\SluggerInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class ProduitFixtures extends Fixture implements DependentFixtureInterface
{
    public function __construct(private ParameterBagInterface $parameterBag, private SluggerInterface $slugger)
    {
    }
    public function load(ObjectManager $manager): void
    {
        $uploadProduitDir = $this->parameterBag->get('upload_produit_directory');

        if (!is_dir(__DIR__ . '/../../public' . $uploadProduitDir)) {
            mkdir(__DIR__ . '/../../public' . $uploadProduitDir, recursive: true);
        }
        $faker = Factory::create();

        for ($i = 0; $i<20; $i ++) {
copy(
    __DIR__ . '/data/produit/' . 'flacon.jpeg',
    __DIR__ . '/../../public' . $uploadProduitDir . '/' . 'flacon.jpeg'
);

       $produit = new Produit();
       $produit ->setname ($faker->sentence(3));
       $produit ->setprix ($faker->numberBetween(50, 150));
       $produit ->setquantite ($faker->numberBetween(50,250));
       $produit ->setcomposition ($faker->paragraph(2));
       $produit ->setresume($faker->paragraph(3));
       $manager -> persist($produit);
    }
        $manager->flush();
    }
    public function getDependencies()
    {
        return[
            CategoryFixtures::class,
        ];
    }
}
