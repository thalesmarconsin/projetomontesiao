<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withProviders()
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php', // Uncomment this line to enable API routes
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Add your middleware configuration here
        $middleware->append(\App\Http\Middleware\MyMiddleware::class);   // Example of adding middleware
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Handle exceptions here
    })->create();