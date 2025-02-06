<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Directores</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        table {
            width: 80%;
            margin: 50px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        td {
            background-color: #fff;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        h1 {
            text-align: center;
            margin: 30px;
            color: #333;
        }

        button {
            display: block;
            margin: 30px auto;
            padding: 10px 20px;
            background-color: #f5a623;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        button:hover {
            background-color: #d88e1a;
        }

    </style>
</head>
<body>

    <h1>Lista de Directores</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($directores as $director)
            <tr>
                <td>{{ $director->id }}</td>
                <td>{{ $director->nombre }} {{ $director->apellido }}</td>
                <td>
                    <a href="{{ route('lista-director-pelicula.lista', $director->id) }}">Consultar películas</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <button><a href="{{ route('admin') }}">Volver a panel de Admin</a></button>


</body>
</html>
