<?php

use App\Http\Controllers\ControladorVistas;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControladorVistas::class, 'Inicio'])->name('rutainicio');
Route::get('/Registro', [ControladorVistas::class,'Registro'])->name('rutaregistro');