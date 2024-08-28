<?php

namespace Tests\Repository;

use App\Entity\User;
use App\Repository\UserRepository;
use PHPUnit\Framework\TestCase;

class UserRepositoryTest extends TestCase
{
    public function testSaveAndGetById()
    {
        $repository = new UserRepository();
        $user = new User('1', 'John Doe', 'john@example.com', 'password123');

        $repository->save($user); 

        $savedUser = $repository->getById('1');
        $this->assertNotNull($savedUser);
        $this->assertEquals($user->getName(), $savedUser->getName());
    }

    public function testDelete()
    {
        $repository = new UserRepository();
        $user = new User('1', 'John Doe', 'john@example.com', 'password123');

        $repository->save($user);
        $repository->delete('1');

        $this->assertNull($repository->getById('1'));
    }
}