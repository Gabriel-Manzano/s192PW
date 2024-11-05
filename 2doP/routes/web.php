<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('/', [ControladorVistas::class, 'formularioUsers'])->name('forUsu');
Route::post('/enviarUsuario', [ControladorVistas::class, 'procesarUsuario'])->name('rutaenviar');