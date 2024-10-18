<?php
namespace App\Repositories\User\Contracts;

use App\Models\User;

interface Contract
{
    public function findByEmail(string $email): ?User;
    public function findByUsername(string $user): ?User;
    public function findById(int $id): ?User;

    public function create(array $data): ?User;
    public function deleteById(int $id): ?User;
    public function deleteByEmail(string $email): ?User;
}
