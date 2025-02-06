<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Películas</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #1e1e2e;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            color: white;
        }
        .container {
            background-color: #282a36;
            width: 90%;
            max-width: 1000px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 20px;
        }
        h2 {
            text-align: center;
            color: #ff79c6;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #44475a;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #6272a4;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #3b3f52;
        }
        tr:hover {
            background-color: #ff79c6;
            color: #282a36;
            cursor: pointer;
        }
        .trailer {
            width: 200px;
            text-align: center;
        }
        .trailer iframe {
            width: 100%;
            height: 100px;
            border: none;
            border-radius: 8px;
        }
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            table {
                font-size: 14px;
            }
            .trailer iframe {
                height: 80px;
            }
        }
    </style>
</head>
<body>

    @include('layouts.nav')

    <div class="container">
        <h2>Lista de Películas</h2>

        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Director</th>
                    <th>Año de Estreno</th>
                    <th>Tráiler</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($peliculas as $pelicula)
                <tr>
                    <td>{{ $pelicula->titulo }}</td>
                    <td>
                        @if ($pelicula->director)
                            {{ $pelicula->director->nombre }} {{ $pelicula->director->apellido }}
                        @else
                            Esta película no tiene director
                        @endif
                    </td>
                    <td>{{ $pelicula->anio_estreno }}</td>

                    @php
                        $embedUrl = $pelicula->trailer_url ? str_replace("watch?v=", "embed/", strtok($pelicula->trailer_url, "&")) : null;
                    @endphp

                    <td class="trailer">
                        @if ($embedUrl)
                            <iframe src="{{ $embedUrl }}" allowfullscreen></iframe>
                        @else
                            No disponible
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" style="text-align: center;">No hay películas disponibles.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>
</html>
