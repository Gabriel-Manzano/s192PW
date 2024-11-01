<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>@yield('titulo')</title>
    <link rel="stylesheet" src="{{ asset('css\styles.css')}}">
    <style>
        footer {
            width: 100%;
            height: 100px;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        form {
            width: 100%;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <ul class="nav nav-pills">

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('rutaregistro') ? '' : 'active'}} " aria-current="page"
                    href="{{ route('rutainicio')}}">{{__('Inicio')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('rutainicio') ? '' : 'active'}} " aria-current="page"
                    href="{{ route('rutaregistro') }}">{{__('Registro')}}</a>
            </li>

        </ul>
    </nav>
    @yield('contenido')
    <div id="footer">
        <footer id="footer" class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item">
                    <p class="text-center text-muted">©2024 Bibliotecas Sapientia. {{__('Todos los derechos reservados.')}}</p>
                </li>
            </ul>
            <p class="text-center text-muted">31/10/2024</p>
        </footer>
    </div>
</body>

</html>