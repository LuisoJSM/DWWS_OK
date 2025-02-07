<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Películas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 50px;
        }
        .card {
            background-color: #007bff;
            color: white;
            width: 250px;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease, background-color 0.3s ease;
            font-size: 20px;
        }
        .card a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        .card:hover {
            transform: translateY(-5px);
            background-color: #0056b3;
        }
        h1 {
            text-align: center;
            color: #333;
            font-size: 36px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <h1>Bienvenido a la Administración de Películas</h1>

    <div class="container">
        <div class="card">
            <a href="{{ route('lista-director.lista') }}">Ver Directores</a>
        </div>
        <div class="card">
            <a href="{{ route('lista-elenco.lista') }}">Ver Elenco</a>
        </div>

        <div class="card">
            <a href="{{ route('formulario-pelicula.formulario') }}">Formulario Película</a>
        </div>
        <div class="card">
            <a href="{{ route('lista-pelicula.lista') }}">Lista de Películas</a>
        </div>
        <div class="card">
            <a href="{{ route('formulario-elenco.formulario') }}">Formulario Elenco</a>
        </div>
    </div>


    @if (Auth::check())
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Cerrar Sesión</button>
    </form>
@endif

</body>
</html>
