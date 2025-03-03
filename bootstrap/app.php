<?php

use App\Http\Middleware\CheckRoleMiddleware;
use App\Http\Middleware\TestMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //global middleware
        // $middleware->append(TestMiddleware::class);
        // $middleware->append(CheckRoleMiddleware::class);

        //group of middleware and then use it anywhere in app
        // $middleware->appendToGroup('test-group', [

        //     TestMiddleware::class,
        //     CheckRoleMiddleware::class      
        // ]);


        //appending middleware to default middleware
        // $middleware->web(append: [
        //         TestMiddleware::class,
        //          CheckRoleMiddleware::class
        //      ]);

        //alias middleware
        $middleware->alias([
            'checkRole' => CheckRoleMiddleware::class
        ]);
        

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
