<?php

namespace Tests\UseCase;

use App\Repository\UserRepositoryInterface;
use App\UseCase\SaveUserRequest;
use App\UseCase\SaveUserUseCase;
use PHPUnit\Framework\TestCase;

class SaveUserUseCaseTest extends TestCase
{
    public function testExecute()
    {
        $userRepository = $this->createMock(UserRepositoryInterface::class);
        $userRepository->expects($this->once())
            ->method('save');

        $useCase = new SaveUserUseCase($userRepository);

        $request = new SaveUserRequest('1', 'John Doe', 'john@example.com', 'password123');
        $useCase->execute($request);
    }
}