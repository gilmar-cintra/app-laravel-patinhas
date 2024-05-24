<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/adotar', function () {
    return view('adotar');
});

Route::get('/cadastro/cuidador', function () {
    return view('cadastroCuidador');
});

Route::resource('ong', 'App\Http\Controllers\OngController');
