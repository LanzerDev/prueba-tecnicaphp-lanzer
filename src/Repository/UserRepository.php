<?php

namespace App\Repository;

use App\Entity\User;

class UserRepository implements UserRepositoryInterface
{
    private array $users = [];

    public function save(User $user): void
    {
        $this->users[$user->getId()] = $user;
    }

    public function update(User $user): void
    {
        if (isset($this->users[$user->getId()])) {
            $this->users[$user->getId()] = $user;
        }
    }

    public function delete(string $id): void
    {
        unset($this->users[$id]);
    }

    public function getById(string $id): ?User
    {
        return $this->users[$id] ?? null;
    }
}