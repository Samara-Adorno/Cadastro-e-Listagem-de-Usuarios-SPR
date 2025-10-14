<?php

declare(strict_types=1);

namespace App\Application;

use App\Domain\UserRepository;
use App\Domain\UserValidator;

final class UserService
{
    public function __construct(
        private UserRepository $repository,
        private UserValidator $validator
    ) {
    }

    /**
     * @param array{name?:string,email?:string,password?:string} $input
     */

   public function register(array $input): bool
   {
    $errors = $this->validator->validate($input);
    if ($errors !== []) {
        // regra de negócio não apresenta: devolve o resultado
        return false;
    }
    
    $user = [
        'name' => $input['name'] ?? 'Sem Nome',
        'email' => (string) $input['email'],
        'password' => password_hash((string) $input['password'], PASSWORD_DEFAULT),
    ];

    $this->repository->save($user);
    return true;
    }

    public function listUsers(): array
    {
        return $this->repository->findAll();
    }
}