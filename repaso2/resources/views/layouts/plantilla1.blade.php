<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>@yield('titulo')</title>
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('rutaregistro') }}">Registro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('rutainicio')}}">Inicio</a>
            </li>
        </ul>
    </nav>
    @yield('contenido')
</body>

</html>