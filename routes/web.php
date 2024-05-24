<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\OngAuthController;
use App\Http\Controllers\Ong\DashboardController;
use App\Http\Controllers\Ong\PetController;

Route::prefix('ong')->group(function () {
    Route::get('login', [OngAuthController::class, 'showLoginForm'])->name('ong.login');
    Route::post('login', [OngAuthController::class, 'login'])->name('ong.login.submit');
    Route::post('logout', [OngAuthController::class, 'logout'])->name('ong.logout');

    Route::middleware(['auth:ong'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('ong.dashboard');
        
        // Rotas CRUD para Pets
        Route::resource('pets', PetController::class);
    });
});



Route::get('/', [PetController::class, 'welcome'])->name('pets.welcome');


Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/adotar', [PetController::class, 'indexWithOngs'])->name('pets.indexWithOngs');

Route::get('/cadastro/cuidador', function () {
    return view('cadastroCuidador');
});

Route::resource('ong', 'App\Http\Controllers\OngController');
