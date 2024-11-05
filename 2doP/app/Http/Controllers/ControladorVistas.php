<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidadorUsuarios;
use Iluminate\Http\Request;

class ControladorVistas extends Controller{
    public function formularioUsers(){
        return view('FormUsuarios');
    }

    public function procesarUsuario(ValidadorUsuarios $validacion){
        $usuario = $validacion->input('txtcorreo');
        session()->flash('exito', 'Todo correcto se ha guardado el usuario.');
        return to_route('forUsu');
    }
}