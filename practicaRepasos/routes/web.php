<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/repaso1',[controladorVistas::class,'repaso'])->name('rutarepaso1');