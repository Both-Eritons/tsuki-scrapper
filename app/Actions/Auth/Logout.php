<?php

namespace App\Actions\Auth;

class Logout
{
    public function __construct(
        private UserRepository $user,
    ){}

    public function execute(array $data)
    {

    }
}
