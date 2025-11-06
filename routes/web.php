<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/valor/{value}', [MainController::class, 'mostrarValor']);
Route::get('/valor/{value1}/{value2}', [MainController::class, 'mostrarValores']);
Route::get('/valorop/{vx?}', [MainController::class, 'mostrarValorOpcional']);