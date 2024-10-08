@extends('layouts.plantilla1')
@section('titulo','Clientes Registrados')
@section('contenido')
<body>
    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">

        <div class="card text-justify font-monospace">

            <div class="card-header fs-5 text-primary">
                Gabriel Manzano Ruíz
            </div>

            <div class="card-body">
                <h5 class="fw-bold"> gabriel.mzn.r@gmail.com</h5>
                <h5 class="fw-medium"> 5564305252</h5>
                <p class="card-text fw-lighter"> </p>


            </div>

            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-warning btn-sm"> Actualizar</button>
                <button type="submit" class="btn btn-danger btn-sm"> Eliminar </button>
            
            </div>

        </div>
        {{-- Finaliza tarjeta Cliente --}}


    </div> {{-- divcontainer --}}

</body>
@endsection
</html>