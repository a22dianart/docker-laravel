<?php

use App\Http\Controllers\Cliente\CitaController as ClienteCita;
use App\Http\Controllers\Taller\CitaController as TallerCita;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {

    Route::middleware('role:cliente')->prefix('cliente')->name('cliente.')->group(function () {
        Route::resource('citas', ClienteCita::class)->only(['index', 'create', 'store', 'show']);
    });

    Route::middleware('role:taller')->prefix('taller')->name('taller.')->group(function () {
        Route::get('citas/pendientes', [TallerCita::class, 'pendientes'])->name('citas.pendientes');
        Route::resource('citas', TallerCita::class);
    });
});
