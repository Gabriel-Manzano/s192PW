<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidadorUsuarios;
use Iluminate\Http\Request;

class ControladorVistas extends Controller{
    public function formularioUsers(){
        return view('FormUsuarios');
    }

    public function procesarUsuario(ValidadorUsuarios $validacion){
        session()->flash('exito');
        return to_route('forUsu');
    }
}