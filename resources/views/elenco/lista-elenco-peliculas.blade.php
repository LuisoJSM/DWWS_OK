<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas de {{ $actor->nombre }} {{ $actor->apellido }}</title>
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
            margin-top: 50px;
        }
        table {
            width: 80%;
            margin: 50px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
            background-color: #f9f9f9;
        }
        tr:nth-child(even) td {
            background-color: #f1f1f1;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .pagination {
            text-align: center;
            margin-top: 20px;
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

    <h1>Películas de {{ $actor->nombre }} {{ $actor->apellido }}</h1>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Año de Estreno</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($peliculas as $pelicula)
                <tr>
                    <td>{{ $pelicula->titulo }}</td>
                    <td>{{ $pelicula->anio_estreno }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">Este actor no ha participado en ninguna película.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Paginar las películas -->
    <div class="pagination">
        {{ $peliculas->links() }}
    </div>

    <button><a href="{{ route('lista-elenco.lista') }}">Volver a la lista de Elenco</a></button>

</body>
</html>
