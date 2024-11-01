@extends('layouts.plantilla1')
@section('titulo', 'Registro')
@section('contenido')

<body>
    <br>
    <center>
        <h1>REGISTRAR LIBRO</h1>
        <script src="https://cdn.rawgit.com/alertifyjs/alertify.js/v1.0.10/dist/js/alertify.js"></script>

        @if(session('exito'))
            <script>
                alertify.success("{{ session('exito') }}");
            </script>
        @endif

        <form action="/enviarLibro" method="POST" class="row g-3" id="form">

            @csrf

            <div class="col-md-6">
                <label class="form-label">ISBN</label>
                <input type="text" class="form-control" name="txtISBN" value="{{ old('txtISBN') }}">
                <small class="text-danger">{{$errors->first('txtISBN')}}</small>
            </div>
            <div class="col-md-6">
                <label class="form-label">Título</label>
                <input type="text" class="form-control" name="txttitulo" value="{{ old('txttitulo') }}">
                <small class="text-danger">{{$errors->first('txttitulo')}}</small>
            </div>
            <div class="col-md-6">
                <label class="form-label">Autor</label>
                <input type="text" class="form-control" name="txtautor" value="{{ old('txtautor') }}">
                <small class="text-danger">{{$errors->first('txtautor')}}</small>
            </div>
            <div class="col-md-6">
                <label class="form-label">Páginas</label>
                <input type="text" class="form-control" name="txtpaginas" value="{{ old('txtpaginas') }}">
                <small class="text-danger">{{$errors->first('txtpaginas')}}</small>
            </div>
            <div class="col-md-6">
                <label class="form-label">Año</label>
                <input type="text" class="form-control" name="txtaño" value="{{ old('txtaño') }}">
                <small class="text-danger">{{$errors->first('txtaño')}}</small>
            </div>
            <div class="col-md-6">
                <label class="form-label">Editorial</label>
                <input type="text" class="form-control" name="txteditorial" value="{{ old('txteditorial') }}">
                <small class="text-danger">{{$errors->first('txteditorial')}}</small>
            </div>
            <center>
                <div class="col-md-6">
                    <label class="form-label">Email de editorial</label>
                    <input type="text" class="form-control" name="txtemail" value="{{ old('txtemail') }}">
                    <small class="text-danger">{{$errors->first('txtemail')}}</small>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Registrar libro</button>
                </div>
            </center>
        </form>
    </center>

</body>
@endsection