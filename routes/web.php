<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function(){
    return '<h1> Aqui esta o ursuário</h1>';
});

Route::get('/injetion', function(Request $request){
    return var_dump($request);
});
Route::match(['get', 'post'], function(Request $request){
    return var_dump($request);
    //aceita get e post
});
Route::any('/any', function(Request $request){
     return var_dump($request);
     //aceita qualquer HTTP reverb
});
Route::redirect('/saltar', '/'); // redireciona para a rota raiz status:302
Route::permanentRedirect('/saltar2', '/'); // redireciona para rota raiz status:301
ROute::view('/view', 'home'); // redirecionamento para uma view