<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Mi Aplicación')</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}"> 
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('busqueda') }}">Ver Registros</a></li>
            <!-- Enlace a la vista de edición -->
            <li><a href="#">Eliminar Info</a></li>
        </ul>
    </nav>

    <div class="content">
        @yield('contenido')
    </div>
</body>
</html>
