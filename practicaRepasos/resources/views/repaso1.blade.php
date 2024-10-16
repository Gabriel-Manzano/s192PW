<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])

    <title>Repaso 1</title>
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
        <form action="/enviarValores" method="POST">
            @csrf
            <label class="form-label">Seleccione el tipo de conversión que quiere realizar:</label>
            <br>
            <br>
            <select name="SeleccionUnidad" class="form-select form-select-sm">
                <option value="MbGb">MB a GB</option>
                <option value="GbMb">GB a MB</option>
                <option value="GbTb">GB a TB</option>
                <option value="TbGb">TB a GB</option>
            </select>
            <br>
            <label class="form-label">Ingrese la cantidad a convertir (Máximo 4 decimales):</label>
            <div class="mb-3">
                <input type="number" class="form-control" min="0" step="0.0001" name="valor">
            </div>
            <br>
            <div class="d-grid gap-2 mt-2 mb-1">
                <button type="submit" class="btn btn-info btn-sm"> Convertir Unidades </button>
            </div>
            <br>
            @if(isset($resultado))
                <div class="alert alert-success mt-3">
                    Resultado: {{ $resultado }}
                </div>
            @endif
        </form>
    </center>
</body>

</html>