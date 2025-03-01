<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    {{-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> --}}

</head>
<body>
    <header></header>

    {{-- el componenetes de blade es una forma de agregar contenido a un layout, esta ves usamos @slot('') --}}
        
    {{-- @endslot --}}
    {{ $slot }}

    <footer></footer>


</body>
</html>