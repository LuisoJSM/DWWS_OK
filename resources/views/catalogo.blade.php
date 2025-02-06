<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @include('layouts.nav')
    <table>
    <thead>
        <tr>

            <th>Título</th>
            <th>Director</th>
            <th>Año de Estreno</th>
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
        </tr>
        @empty
        <tr>
            <td colspan="4">No hay películas disponibles.</td>
        </tr>
        @endforelse
    </tbody>
</table>

</body>
</html>
