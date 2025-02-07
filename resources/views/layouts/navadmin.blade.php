<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #333;
            display: flex;
            justify-content: center;
            padding: 10px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-size: 16px;
            text-transform: uppercase;
            padding: 8px 16px;
            border-radius: 30px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        nav a:hover {
            background-color: #f5a623;
            transform: translateY(-3px);
        }
        nav a:active {
            background-color: #d88c1f;
            transform: translateY(0);
        }

        /* Estilos para el formulario de Cerrar Sesión */
        nav form {
            display: inline-block;
            margin-left: 20px; /* Para dar espacio entre los enlaces */
        }

        nav button {
            background-color: #ff5555;
            color: white;
            font-size: 16px;
            padding: 8px 20px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            display: flex;
            align-items: center;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        nav button i {
            margin-right: 8px; /* Espacio entre el icono y el texto */
        }

        nav button:hover {
            background-color: #ff4444;
            transform: scale(1.05);
        }

        nav button:active {
            background-color: #d94444;
            transform: scale(1);
        }
    </style>
    <title>Nav Bar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/kTcKq6MRJ+2H6HBZw2vFQ9/8O6f7z8wHqkT2n0RZqBb6SxZdX+n9VYJeM+u6z1RO5O30K5+X5X8ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Inicio</a>
        <a href="{{ route('admin') }}">Panel administración</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">
                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
            </button>
        </form>
    </nav>
</body>
</html>
