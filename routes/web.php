<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SnakeGameController;

Route::get('/', [HomeController::class, 'home']);
Route::get('/menu', [MenuController::class, 'index']);
Route::get('/order', [OrderController::class, 'create']);
Route::post('/order', [OrderController::class, 'store']);
Route::get('/snake', [SnakeGameController::class, 'index']);