<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Películas</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 40px;
            font-size: 2.5rem;
        }

        table {
            width: 80%;
            margin: 40px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
            font-weight: bold;
        }

        td {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
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

        @media screen and (max-width: 768px) {
            table {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <h1>Lista de Películas</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Año de Estreno</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peliculas as $pelicula)
                <tr>
                    <td>{{ $pelicula->id }}</td>
                    <td>{{ $pelicula->titulo }}</td>
                    <td>{{ $pelicula->anio_estreno }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <button><a href="{{ route('lista-director.lista') }}">Volver a la lista de Directores</a></button>

</body>
</html>
