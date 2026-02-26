<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: [
            __DIR__.'/../routes/web.php',
            __DIR__.'/../routes/auth.php',
            __DIR__.'/../routes/Admin.php',
            ],
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
      $middleware->redirectGuestsTo(function (Request $request){
          if ($request->routeIs('admin.*')){
              return route('admin.auth.login.index');
          }


          return route('auth.login.index');
      });
      $middleware->redirectUsersTo(function (Request $request) {
          if (request()->routeIs('admin.*')) {
              return route('admin.dashboard');
          }
          return route('index');
      });

    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
