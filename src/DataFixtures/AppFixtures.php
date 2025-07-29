<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use App\Entity\Snippet;
use App\Entity\User;
use App\Factory\CommentFactory;
use App\Factory\SnippetFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::createOne([
            'email' => 'i@test.com'
        ]);

        UserFactory::createMany(9);
        SnippetFactory::createMany(50);
        CommentFactory::createMany(100);
    }
}
