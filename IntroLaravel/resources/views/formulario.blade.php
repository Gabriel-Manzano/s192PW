@extends('layouts.plantilla1')
@section('titulo', 'Formulario')
@section('contenido')
{{-- inicia Tarjeta con formulario --}}

<div class="container mt-5 col-md-6">

    @if (session('exito'))
        <x-Alert tipo="info"> {{session('exito')}} </x-Alert>
    @endif

    @session('exito')
        <x-Alert tipo="success"> {{$value}} </x-Alert>
    @endsession


    <div class="card font-monospace">

        <div class="card-header fs-5 text-center text-primary">
            Registro de Clientes
        </div>

        <div class="card-body text-justify">

            <form action="/enviarCliente" method="POST">

                @csrf 

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre: </label>
                    <input type="text" class="form-control" name="txtnombre">
                    <small class="fst-italic text-danger">{{$errors->first('txtnombre')}}</small>
                </div>
                <div class="mb-3">
                    <label for="Apellido" class="form-label">Apellido: </label>
                    <input type="text" class="form-control" name="txtapellido">
                    <small class="fst-italic text-danger">{{$errors->first('txtapellido')}}</small>
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo: </label>
                    <input type="text" class="form-control" name="txtcorreo">
                    <small class="fst-italic text-danger">{{$errors->first('txtcorreo')}}</small>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono: </label>
                    <input type="text" class="form-control" name="txttelefono">
                    <small class="fst-italic text-danger">{{$errors->first('txttelefono')}}</small>
                </div>
        </div>

        <div class="card-footer text-muted">

            <div class="d-grid gap-2 mt-2 mb-1">
                <button type="submit" class="btn btn-success btn-sm"> Guardar Cliente </button>
            </div>
            </form>
        </div>
    </div>
</div> {{-- divcontainer --}}
{{-- Finaliza Tarjeta con formulario --}}

@endsection