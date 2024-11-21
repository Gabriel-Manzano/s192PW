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
Route::get('/componentes',[controladorVistas::class,'component'])->name('rutacomponenetes');
Route::post('/enviarCliente',[controladorVistas::class,'procesarCliente'])->name('rutaenviar');

// Controlador Cliente

Route::get('/Registro',[ClienteController::class,'create'])->name('rutaform');

Route::post('/Enviar', [ClienteController::class,'store'])->name('enviaCliente');

Route::get('/clientes',[ClienteController::class,'index'])->name('rutaclientes');

Route::get('/clientes/{id}/edit',[ClienteController::class,'edit'])->name('rutaformularioclientes');

Route::post('/clientes', [ClienteController::class, 'store'])->name('enviaCliente');

Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('rutaactualizarcliente');

Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('rutaeliminarcliente');