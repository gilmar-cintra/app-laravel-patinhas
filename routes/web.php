<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\OngAuthController;

Route::get('ong/login', [OngAuthController::class, 'showLoginForm'])->name('ong.login');
Route::post('ong/login', [OngAuthController::class, 'login'])->name('ong.login.submit');
Route::post('ong/logout', [OngAuthController::class, 'logout'])->name('ong.logout');

Route::get('/', function () {
    return view('welcome');
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
