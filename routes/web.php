<?php

use App\Http\Controllers\UpdateController;
use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\registro;
use Illuminate\Support\Facades\Route;

// Ruta para la página principal
Route::get('/', [registro::class, 'index'])->name('index');

// Ruta para la vista inicial
Route::get('/inicio', [registro::class, 'inicio'])->name('inicio');

// Ruta para almacenar un nuevo registro
Route::post('/record', [RecordController::class, 'store'])->name('record.store');
Route::get('/busqueda', [BusquedaController::class, 'busqueda'])->name('busqueda');

Route::get('/record/{id}/edit', [UpdateController::class, 'edit'])->name('record.edit');
Route::put('/record/{id}', [UpdateController::class, 'update'])->name('record.update');