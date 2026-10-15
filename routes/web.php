<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index']);

Route::get('/users/create', [UserController::class, 'create']);

Route::post('/users', [UserController::class, 'store']);

Route::get('/users/{id}', [UserController::class, 'show']);

Route::get('/users/{id}/edit', [UserController::class, 'edit']);

Route::put('/users/{id}', [UserController::class, 'update']);

Route::delete('/users/{id}', [UserController::class, 'destroy']);
