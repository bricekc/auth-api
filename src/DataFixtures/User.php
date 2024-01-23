<?php

namespace App\DataFixtures;

use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class User extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::createOne(['firstname' => 'user1', 'email' => 'user1@example.com']);
        UserFactory::createOne(['firstname' => 'user2', 'email' => 'user2@example.com']);
        UserFactory::createOne(['firstname' => 'user3', 'email' => 'user3@example.com']);
        UserFactory::createMany(20);
    }
}
