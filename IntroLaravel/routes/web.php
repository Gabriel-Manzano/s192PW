<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\ClienteController;

/* Route::get('/', function () {
    return view('welcome');
}); */

//Ruta de tipo VIEW
/* Route::view('/','inicio')->name('rutainicio');
Route::view('/form','formulario')->name('rutaform');
Route::view('/clientes','clientes')->name('rutaclientes');
Route::view('/componentes','componentes')->name('rutacomponentes'); */

// Controlador vistas

Route::get('/',[controladorVistas::class,'home'])->name('rutainicio');
Route::get('/clientes',[controladorVistas::class,'consulta'])->name('rutaclientes');
Route::get('/componentes',[controladorVistas::class,'component'])->name('rutacomponenetes');
Route::post('/enviarCliente',[controladorVistas::class,'procesarCliente'])->name('rutaenviar');

// Controlador Cliente

Route::get('/cliente/create',[ClienteController::class,'create'])->name('rutaform');

Route::post('/cliente', [ClienteController::class,'store'])->name('enviaCliente');