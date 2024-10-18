<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthBase extends Controller
{
    public function respondWithToken(string $token)
    {
        return response($token);
    }

    public function respondWithUser($user)
    {
        return response($user);
    }
}
