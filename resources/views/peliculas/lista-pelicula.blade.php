<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Películas</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #ffffff;
            width: 100%;
            max-width: 800px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        .btn-back {
            background-color: #e7e7e7;
            color: #333;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin-top: 20px;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        .btn-back:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Lista de Películas</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Director</th>
                <th>Año de Estreno</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($peliculas as $pelicula)
            <tr>
                <td>{{ $pelicula->id }}</td>
                <td>{{ $pelicula->titulo }}</td>
                <td>
                    @if ($pelicula->director)
                        {{ $pelicula->director->nombre }} {{ $pelicula->director->apellido }}
                    @else
                        Esta película no tiene director
                    @endif
                </td>
                <td>{{ $pelicula->anio_estreno }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4">No hay películas disponibles.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Botón para volver al panel de Admin -->
    <a href="{{ route('admin') }}" class="btn-back">Volver al Panel de Admin</a>
</div>

</body>
</html>
