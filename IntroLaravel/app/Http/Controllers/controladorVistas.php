<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function formulario(){
        return view('formulario');
    }

    public function consulta(){
        return view('clientes');
    }

    public function component(){
        return view('componentes');
    }

    public function procesarCliente(Request $peticion){
        //return 'La información del cliente llegó al controlador';

        //Devuelve todo lo que contiene la petición
        //return $peticion->all();

        //Envía la ruta desde donde se hizo la petición
        //return $peticion->path(); 

        //Devulve la URL completa desde donde se hizo la petición
        //return $peticion->url(); 

        //Devuelve la ip desde dónde se hizo la petición
        //return $peticion->ip();
        
        return $peticion->ip();

    }
}