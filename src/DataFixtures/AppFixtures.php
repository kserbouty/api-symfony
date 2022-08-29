<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++) {
            $product = new Product();
            $product->setName('Product n°' . $i);
            $product->setDescription('Description n°' . $i);
            $product->setQuantity(mt_rand(50, 100));
            $product->setPrice(mt_rand(10, 30));
            $product->setCreatedAt(new \DateTime());
            $manager->persist($product);
        }
        $manager->flush();
    }
}
