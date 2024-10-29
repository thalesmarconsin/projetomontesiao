<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Tymon\JWTAuth\Http\Middleware\Authenticate as JWTAuthenticate;

// Rotas de registro e login

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);

// Rota para obter o usuário autenticado
Route::middleware('auth:api')->get('/user', [AuthController::class, 'user']);
