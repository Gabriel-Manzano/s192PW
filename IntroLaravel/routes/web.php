<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/',[controladorVistas::class,'home'])->name('rutainicio');
Route::get('/form',[controladorVistas::class,'formulario'])->name('rutaform');
Route::get('/clientes',[controladorVistas::class,'consulta'])->name('rutaclientes');
Route::get('/componentes',[controladorVistas::class,'component'])->name('rutacomponenetes');


/* Route::get('/', function () {
    return view('welcome');
}); */

//Ruta de tipo VIEW
/* Route::view('/','inicio')->name('rutainicio');
Route::view('/form','formulario')->name('rutaform');
Route::view('/clientes','clientes')->name('rutaclientes');
Route::view('/componentes','componentes')->name('rutacomponentes'); */