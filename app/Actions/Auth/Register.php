<?php

namespace App\Actions\Auth;

class Register
{
    public function __construct(
        private UserRepository $user,
    ){}

    public function execute(array $data)
    {

    }
}
