<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h2>Crear una cuenta</h2>

    <!-- Mostrar mensajes de error si hay validaciones fallidas -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulario de Registro -->
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required><br>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="password_confirmation">Confirmar Contraseña:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required><br>

        <button type="submit">Registrar</button>
    </form>

    <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Iniciar sesión</a></p>
</body>
</html>
