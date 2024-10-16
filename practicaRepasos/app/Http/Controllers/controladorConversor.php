<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorConversor extends Controller
{
    public function seleccion(Request $request)
    {
        $valor = $request->input('valor');
        $tipoConversion = $request->input('SeleccionUnidad');
        $resultado = null;

        switch ($tipoConversion) {
            case 'MbGb':
                $resultado = $this->MbGb($valor);
                break;
            case 'GbMb':
                $resultado = $this->GbMb($valor);
                break;
            case 'GbTb':
                $resultado = $this->GbTb($valor);
                break;
            case 'TbGb':
                $resultado = $this->TbGb($valor);
                break;
        }

        return view('repaso1', ['resultado' => $resultado, 'valor' => $valor, 'tipoConversion' => $tipoConversion]);
    }

    public function MbGb($valor)
    {
        return $valor / 1024;
    }

    public function GbMb($valor)
    {
        return $valor * 1024;
    }

    public function GbTb($valor)
    {
        return $valor / 1024;
    }

    public function TbGb($valor)
    {
        return $valor * 1024;
    }
}

