<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    @session('exito')
        <script>
            Swal.fire({
                title: "Respuesta del servidor!",
                text: '{{$value}}',
                icon: "success"
            });
        </script>
    @endsession

    <div class="container  col-md-4">

        <form action="/enviarUsuario" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">Correo: </label>
                <input type="text" class="form-control" name="txtcorreo" value="{{ old('txtcorreo') }}">
                <small class="text-danger">{{$errors->first('txtcorreo')}}</small>
            </div>

            <div class="mb-3">
                <label class="form-label">Contraseña: </label>
                <input type="text" class="form-control" name="txtpassword" value="{{ old('txtpassword') }}">
                <small class="text-danger">{{$errors->first('txtpassword')}}</small>
            </div>

            <div class="mb-3">
                <label class="form-label">Edad: </label>
                <input type="text" class="form-control" name="txtedad" value="{{ old('txtedad') }}">
                <small class="text-danger">{{$errors->first('txtedad')}}</small>
            </div>

            <button type="submit" class="btn btn-danger "> Guardar Usuario</button>

        </form>


    </div>


</body>

</html>