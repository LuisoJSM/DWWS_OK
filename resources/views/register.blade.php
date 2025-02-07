<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Videoclub</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1e1e2e, #282a36);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            color: white;
            text-align: center;
        }

        .container {
            background-color: #282a36;
            width: 90%;
            max-width: 400px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            padding: 30px;
            margin: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        /* Animación */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            font-size: 2em;
            color: #ff79c6;
            margin-bottom: 20px;
        }

        label {
            font-size: 1.1em;
            color: #f8f8f2;
            margin-bottom: 10px;
        }

        input {
            padding: 12px;
            margin-bottom: 20px;
            width: 100%;
            border-radius: 8px;
            border: none;
            background-color: #44475a;
            color: white;
            font-size: 1em;
            transition: background 0.3s ease;
        }

        input:focus {
            background-color: #6272a4;
            outline: none;
        }

        button {
            display: inline-block;
            background-color: #50fa7b;
            color: #282a36;
            padding: 12px 25px;
            font-size: 1.2em;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
            margin-top: 20px;
            font-weight: bold;
        }

        button:hover {
            background-color: #40d674;
            transform: scale(1.05);
        }

        .error-messages {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .error-messages ul {
            list-style-type: none;
            padding-left: 0;
        }

        .error-messages li {
            margin: 5px 0;
        }

        .login-link {
            margin-top: 15px;
            font-size: 1.1em;
        }

        .login-link a {
            color: #50fa7b;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 768px) {
            h2 {
                font-size: 1.8em;
            }
            label {
                font-size: 1em;
            }
            input, button {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>

    @include('layouts.nav')
    <div class="container">
        <h2>Crear una cuenta</h2>

        <!-- Muestro mensajes de error si hay validaciones fallidas -->
        @if ($errors->any())
            <div class="error-messages">
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

        <div class="login-link">
            <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Iniciar sesión</a></p>
        </div>
    </div>

</body>
</html>
