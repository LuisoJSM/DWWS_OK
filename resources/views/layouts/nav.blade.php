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

        .language-dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            min-width: 100px;
            z-index: 1000;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px 0;
        }

        .dropdown-item {
            display: block;
            padding: 8px 12px;
            text-decoration: none;
            color: black;
        }

        .dropdown-item:hover {
            background-color: #f1f1f1;
        }

        /* Mostrar menú al pasar el mouse */
        .language-dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
    <title>Nav Bar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/kTcKq6MRJ+2H6HBZw2vFQ9/8O6f7z8wHqkT2n0RZqBb6SxZdX+n9VYJeM+u6z1RO5O30K5+X5X8ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">@lang('messages.home')</a>
        <a href="{{ route('catalogo') }}">@lang('messages.catalog')</a>

        <!-- Mostrar el enlace al panel de administración solo si el usuario está logueado -->
        @if (Auth::check())
            <a href="{{ route('admin') }}">Panel de administración</a>
        @endif

        <!-- Enlaces para Login y Registro -->
        @if (!Auth::check())
            <a href="{{ route('login') }}">@lang('messages.login')</a>
            <a href="{{ route('register') }}">@lang('messages.register')</a>
        @endif

        <!-- Mostrar el formulario de cerrar sesión solo si el usuario está logueado -->
        @if (Auth::check())
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">
                    <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                </button>
            </form>
        @endif


        <div class="language-dropdown">
            <a href="#" class="dropdown-toggle">🌐 Language</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/locale/en">English</a></li>
                <li><a class="dropdown-item" href="/locale/es">Español</a></li>
            </ul>
        </div>
    

    </nav>
</body>
</html>



