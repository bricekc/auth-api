<?php

namespace App\DataFixtures;

use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
;

class User extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::createOne(['firstname' => 'user1', 'email' => 'user1@example.com']);
        UserFactory::createOne(['firstname' => 'user2', 'email' => 'user2@example.com']);
        UserFactory::createOne(['firstname' => 'user3', 'email' => 'user3@example.com']);
        UserFactory::createMany(20);
    }

    public function getDependencies()
    {
        return [
            ConversationFixtures::class
        ];
        // TODO: Implement getDependencies() method.
    }
}
