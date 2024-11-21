@extends('layouts.plantilla1')
@section('titulo', 'Clientes Registrados')
@section('contenido')

<body>
    {{-- Inicia tarjeta Cliente --}}

    <div class="container mt-5 col-md-8">

        @session('exito')
            <script>
                Swal.fire({
                    title: "Se han actualizado los datos!",
                    icon: "success"
                });
            </script>
        @endsession

        @if ($consultaClientes->isEmpty())
            <div class="alert alert-info text-center">
                {{ __('No hay clientes registrados.') }}
            </div>
        @else
            @foreach ($consultaClientes as $cliente)

                <div class="card text-justify font-monospace mb-3">

                    <div class="card-header fs-5 text-primary">
                        {{ $cliente->nombre }} {{ $cliente->apellido }}
                    </div>

                    <div class="card-body">
                        <h5 class="fw-bold">{{ $cliente->correo }}</h5>
                        <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
                        <p class="card-text fw-lighter">ID: {{ $cliente->id }}</p>
                    </div>

                    <div class="card-footer text-muted d-flex justify-content-between">
                        <form>
                            <a href="{{ route('rutaformularioclientes', ['id' => $cliente->id]) }}"
                                class="btn btn-warning btn-sm">
                                {{ __('Actualizar') }}
                            </a>
                        </form>
                        <form id="delatefom{{$cliente->id}}" action="{{ route('rutaeliminarcliente', ['id' => $cliente->id]) }}"
                            method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmarCliente({{$cliente->id}})">
                                {{ __('Eliminar') }}
                            </button>
                        </form>
                    </div>

                </div>

            @endforeach
        @endif

        {{-- Finaliza tarjeta Cliente --}}

    </div> {{-- divcontainer --}}
    <script>
        function confirmarCliente(clienteid) {
            Swal.fire({
                title: "Do you want to delete de user?",
                showCancelButton: true,
                confirmButtonText: "Save",
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delatefom${clienteid}`).submit();
                }
            });
        }
    </script>

</body>
@endsection

</html>