<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])

    <title>Inicio</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutainicio') ? 'text-info' : '' }} && {{ request()->routeIs('/') ? 'text-info' : '' }}"
                            aria-current="page" href="{{ route('rutainicio') }}"> Portada </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('rutarepaso1') ? 'text-info' : '' }} && {{ request()->routeIs('rutavalores') ? 'text-info' : '' }}"
                            aria-current="page" href="{{ route('rutarepaso1') }}"> Conversor </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <center>
        <br>
        <h1>Universidad Politécnica de Querétaro</h1>
        <br>
        <h2>Ingeniería en Sistemas Computacionales</h2>
        <br>
        <h2>Materia</h2>
        <br>
        <h3>Programación Web</h3>
        <br>
        <h2>Tema</h2>
        <br>
        <h3>Repaso 1 Laravel</h3>
        <br>
        <h2>Alumno</h2>
        <br>
        <h3>Manzano Ruíz Gabriel</h3>
        <br>
        <a href="{{ route('rutarepaso1') }}" class="btn btn-primary">Repaso 1</a>
        <br>
        <br>
        <h4>16/10/2024</h4>
    </center>
</body>

</html>