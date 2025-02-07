<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Elenco</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 30px;
            color: #333;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            color: #333;
        }
        input[type="text"], input[type="date"], select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #218838;
        }
        .success-message {
            color: green;
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>
@include('layouts.navadmin')

<body>

    <h1>Formulario de Elenco</h1>

    @if (session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    <div class="form-container">
        <form action="{{ route('formulario-elenco.agregar') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" placeholder="Ingrese el apellido" required>
            </div>
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>
            <div class="form-group">
                <label for="pelicula">Película:</label>
                <select id="pelicula" name="pelicula" required>
                    <option value="" disabled selected>Seleccione una película</option>
                    @foreach($peliculas as $pelicula)
                        <option value="{{ $pelicula->id }}">{{ $pelicula->titulo }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Agregar Elenco</button>
        </form>
    </div>

</body>
</html>
