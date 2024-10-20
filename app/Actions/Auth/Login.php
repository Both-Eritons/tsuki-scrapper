<?php

namespace App\Actions\Auth;

use App\Exceptions\Auth\Unauthorized;
use App\Exceptions\User\UserNotExistsExeception;
use App\Repositories\User\UserRepository;

class Login
{
    public function __construct(
        private UserRepository $user,
    ){}

    public function execute(array $data): string
    {
        $user = $this->user->findByEmail($data['email']);
        if(!$user) throw new UserNotExistsExeception();
        $token = auth()->guard()->attempt($data);
        if(!$token) throw new Unauthorized();
        return $token;
    }
}
