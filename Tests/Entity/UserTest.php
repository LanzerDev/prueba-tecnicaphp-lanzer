<?php

namespace Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserCreation()
    {
        $user = new User('1', 'John Doe', 'john@example.com', 'password123');

        $this->assertEquals('1', $user->getId());
        $this->assertEquals('John Doe', $user->getName());
        $this->assertEquals('john@example.com', $user->getEmail());
        $this->assertEquals('password123', $user->getPassword());
    }

    public function testUserSetters()
    {
        $user = new User('1', 'John Doe', 'john@example.com', 'password123');

        $user->setName('Jane Doe');
        $user->setEmail('jane@example.com');
        $user->setPassword('newpassword123');

        $this->assertEquals('Jane Doe', $user->getName());
        $this->assertEquals('jane@example.com', $user->getEmail());
        $this->assertEquals('newpassword123', $user->getPassword());
    }
}