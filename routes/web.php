<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/ongs', function () {
    return view('ongs');
});

Route::get('/adotar', function () {
    return view('adotar');
});

Route::get('/cadastro/ongs', function () {
    return view('cadastroONG');
});

Route::get('/cadastro/cuidador', function () {
    return view('cadastroCuidador');
});
