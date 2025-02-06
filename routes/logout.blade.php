<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar sesión</title>
</head>
<body>
    <h2>¿Seguro que deseas cerrar sesión?</h2>

    <form method="POST" action="{{ url('/logout') }}">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
</body>
</html>
