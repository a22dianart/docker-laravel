<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Cliente\CitaController;
use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', function () {
    return auth()->check() ? redirect()->route('dashboard') : view('welcome');
});

// Ruta al dashboard (protegida por autenticación y verificación de correo)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    // Perfil de usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas para el manejo de citas (resource controller)
    Route::resource('citas', CitaController::class);
});

// Requiere las rutas de autenticación generadas automáticamente por Laravel
require __DIR__.'/auth.php';
