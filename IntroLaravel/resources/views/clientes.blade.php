@extends('layouts.plantilla1')
@section('titulo', 'Clientes Registrados')
@section('contenido')

<body>
    {{-- Inicia tarjetaCliente --}}

    <div class="container mt-5 col-md-8">

        @foreach ($consultaClientes as $cliente)

            <div class="card text-justify font-monospace">

                <div class="card-header fs-5 text-primary">
                    {{ $cliente->nombre }} {{$cliente->apellido }}
                </div>

                <div class="card-body">
                    <h5 class="fw-bold"> {{ $cliente->correo }}</h5>
                    <h5 class="fw-medium"> {{ $cliente->telefono }}</h5>
                    <p class="card-text fw-lighter"></p>

                </div>

                <div class="card-footer text-muted">
                    <a href="{{ route('rutaformularioclientes',$cliente->id) }}" class="btn btn-warning btn-sm">{{__('Actualizar')}}</a>
                    <a href="{{ route('rutaformularioclientes') }}" class="btn btn-danger btn-sm">{{__('Eliminar')}} </a>

                </div>

            </div>

        @endforeach

        {{-- Finaliza tarjeta Cliente --}}


    </div> {{-- divcontainer --}}

</body>
@endsection

</html>