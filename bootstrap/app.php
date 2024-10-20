<?php

use App\Exceptions\User\UserDataException as UserData;
use App\Http\Middleware\ForceJsonResponse;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request as Req;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $mid) {
        $mid->append(ForceJsonResponse::class);
    })
    ->withExceptions(function (Exceptions $ex) {
        $ex->render(function(UserData $e, Req $req) {
            if(!$req->is('api/*')) return;
            return response(['message'=>$e->getMessage()],$e->getCode());
        });
    })->create();
