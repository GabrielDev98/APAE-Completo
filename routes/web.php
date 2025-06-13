<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\NFController;

Route::get('/', [AuthController::class, 'showLoginForm']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

// Rotas protegidas (requerem autenticação)
Route::middleware(['auth'])->group(function () {

    Route::get('/Main', function () {
        return view('main');
    })->name('Main');

    Route::get('/recursos', function () {
        return view('recursos');
    })->name('recursos');

    Route::get('/fale-conosco', function () {
        return view('fale-conosco');
    })->name('fale-conosco');

    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
    Route::get('/registro', [RegisterController::class, 'showRegistrationForm'])->name('registro');
    Route::post('/salva-conta', [RegisterController::class, 'register'])->name('salva-conta');

    // Rotas de clientes
    Route::prefix('clientes')->group(function () {
        Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
        Route::get('/criar', [ClienteController::class, 'criar'])->name('clientes.criar');
        Route::post('/', [ClienteController::class, 'store'])->name('clientes.store');
        Route::get('/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
        Route::put('/{id}', [ClienteController::class, 'update'])->name('clientes.update');
        Route::delete('/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
    });

    // Rotas de notas fiscais
    Route::prefix('notas')->group(function () {
        Route::get('/', [NFController::class, 'index'])->name('notas.index');
        Route::get('/criar', [NFController::class, 'criar'])->name('notas.criar');
        Route::post('/', [NFController::class, 'store'])->name('notas.store');
        Route::get('/{id}/edit', [NFController::class, 'edit'])->name('notas.edit');
        Route::put('/{id}', [NFController::class, 'update'])->name('notas.update');
        Route::delete('/{id}', [NFController::class, 'destroy'])->name('notas.destroy');
    });

    // Rota de logout
    Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
    
});
