<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function(){
    return '<h1> Aqui esta o ursuário</h1>';
});