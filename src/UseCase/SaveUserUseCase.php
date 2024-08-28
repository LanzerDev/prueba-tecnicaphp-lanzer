<?php

namespace App\UseCase;

use App\Entity\User;
use App\Repository\UserRepositoryInterface;

class SaveUserUseCase
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(SaveUserRequest $request): void
    {
        $user = new User(
            $request->getId(),
            $request->getName(),
            $request->getEmail(),
            $request->getPassword()
        );

        $this->userRepository->save($user);
    }
}