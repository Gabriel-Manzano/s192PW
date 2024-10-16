<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/', [controladorVistas::class,'home'])->name('rutainicio');

Route::get('/repaso1',[controladorVistas::class,'repaso'])->name('rutarepaso1');