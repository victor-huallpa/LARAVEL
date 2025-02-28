<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL 11 | @yield('titulo')</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    {{-- tener encuenta que stack se puede referenciar varias vaces de donde provenga su contenido --}}
    @stack('styles')
</head>
<body>
    <header></header>

    {{-- yeald solo se puede referenciar una vez del docuemnteo de procedencia --}}
    @yield('content')

    <footer></footer>


</body>
</html>