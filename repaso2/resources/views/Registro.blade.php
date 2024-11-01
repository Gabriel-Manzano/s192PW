@extends('layouts.plantilla1')
@section('titulo', 'Registro')
@section('contenido')

<body>
    <br>
    <br>
    <center>
        <h1>REGISTRAR LIBRO</h1>
        <br>
        <form class="row g-3" id="form">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">ISBN</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Título</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Autor</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Páginas</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Año</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Editorial</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <center>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Email de editorial</label>
                    <input type="password" class="form-control" id="inputPassword4">
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