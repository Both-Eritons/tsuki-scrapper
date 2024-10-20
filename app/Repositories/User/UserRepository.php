<?php

namespace App\Repositories\User;

use App\Models\User\User;
use App\Repositories\User\Contracts\Contract;

class UserRepository implements Contract
{
    public function __construct(
        private User $user
    ){}

    public function findById(int $id): ?User
    {
        return $this->user::find($id);
    }

    public function findByEmail(string $email): ?User
    {
        return $this->user::where('email', $email)->first();
    }

    public function findByUsername(string $user): ?User
    {
        return $this->user::where('username', $user)->first();
    }

    public function create(array $data): ?User
    {
        return $this->user::create($data);
    }

    public function deleteById(int $id): ?User
    {
        return $this->user::find($id)->delete();
    }

    public function deleteByEmail(string $email): ?User
    {
        return $this->user::where('email', $email)->delete();
    }
}
