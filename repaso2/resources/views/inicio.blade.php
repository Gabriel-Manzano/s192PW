@extends('layouts.plantilla1')
@section('titulo', 'Inicio')
@section('contenido')

<body>

    <center>

        <br>
        <br>
        <br>
        <div class="card border-info mb-3" style="max-width: 18rem;">
            <div class="card-header">{{__('¡¡¡Noticia Literaria del día!!!')}}</div>
            <div class="card-body">
                <h5 class="card-title">{{__('Manuel Rivas gana el Premio Nacional de las Letras 2024')}}</h5>
                <p class="card-text">
                    {{__('El escritor gallego Manuel Rivas (A Coruña, 67 años) ha sido galardonado hoy martes con el Premio Nacional de las Letras Españolas 2024.')}}
                </p>
                <img src="{{ asset('images/rivas.jpg') }}" style="width: 100%; height: auto;">
            </div>
        </div>
    </center>
    <div>
    </div>
</body>

</html>
@endsection