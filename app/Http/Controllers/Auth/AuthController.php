<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\Login;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends AuthBase
{
    public function login(LoginRequest $req, Login $action)
    {
        $token = $action->execute($req->validated());

        return $this->respondWithToken($token);
    }

    public function register()
    {

    }

    public function logout()
    {

    }
}
