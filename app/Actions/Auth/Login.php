<?php

namespace App\Actions\Auth;

class Login
{
    public function __construct(
        private UserRepository $user,
    ){}

    public function execute(array $data)
    {

    }
}
