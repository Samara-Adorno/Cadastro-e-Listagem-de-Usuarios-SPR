<?php

declare(strict_types=1);

namespace App\Domain;

interface UserRepository
{
    /**
     * @param array{name:string,email:string,password:string} $user
     */
    public function save(array $user): void;

    /**
    * @return array<int, array{name:string,email:string,password:string}>
    */
    public function findAll(): array;
}
