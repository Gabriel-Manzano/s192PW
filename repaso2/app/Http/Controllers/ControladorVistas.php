<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function inicio(){
        return view('Inicio');
    }
    public function Registro(){
        return view('Registro');
    }
}
