<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidadorLibros;
use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function inicio(){
        return view('Inicio');
    }
    public function Registro(){
        return view('Registro');
    }
    public function procesarLibros(ValidadorLibros $validacion){
        $libro = $validacion->input('txttitulo');
        session()->Flash('exito', 'Todo correcto: Libro "'.$libro.'" guardado');
        return to_route('rutaregistro');
    }
}
