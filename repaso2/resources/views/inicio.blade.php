@extends('layouts.plantilla1')
@section('titulo')
@section('contenido')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])

    <title>Inicio</title>
</head>

<body>

    <center>
        <h1>Hola mundo</h1>
        <button type="button" class="btn btn-outline-info">Info</button>
    </center>
</body>

</html>
@endsection