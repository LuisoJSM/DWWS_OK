<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Película</title>
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
        .card {
            background-color: #ffffff;
            width: 100%;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
        }
        .card-header {
            background-color: #4CAF50;
            padding: 15px;
            border-radius: 8px;
            color: white;
            text-align: center;
        }
        .card-body {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }
        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
        }
        input:focus, select:focus {
            border-color: #4CAF50;
            outline: none;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .form-control::placeholder {
            color: #bbb;
        }
        .success-message {
            color: green;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        /* Estilo para el botón de volver */
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

<div class="card">
    @if (session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    <form action="{{ route('formulario-pelicula.agregar') }}" method="POST">
        @csrf
        <div class="card-header">
            <h3>Agregar Película</h3>
        </div>

        <div class="card-body">
            <!-- Título -->
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Ingrese el título de la película" required>
            </div>

            <!-- Nombre del Director -->
            <div class="form-group">
                <label for="nombre_director">Nombre del Director:</label>
                <input type="text" id="nombre_director" name="nombre_director" class="form-control" placeholder="Ingrese el nombre del director" required>
            </div>

            <!-- Apellido del Director -->
            <div class="form-group">
                <label for="apellido_director">Apellido del Director:</label>
                <input type="text" id="apellido_director" name="apellido_director" class="form-control" placeholder="Ingrese el apellido del director" required>
            </div>

            <!-- Año de Estreno -->
            <div class="form-group">
                <label for="anio_estreno">Año de Estreno:</label>
                <input type="number" id="anio_estreno" name="anio_estreno" class="form-control" placeholder="Ingrese el año de estreno" required>
            </div>

            <!-- ISRC -->
            <div class="form-group">
                <label for="isrc">ISRC:</label>
                <input type="text" id="isrc" name="isrc" class="form-control" placeholder="Ingrese el código ISRC" required>
            </div>

            <!-- Tipo -->
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <select id="tipo" name="tipo" class="form-control" required>
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="pelicula">Película</option>
                    <option value="cortometraje">Cortometraje</option>
                    <option value="documental">Documental</option>
                    <option value="serie">Serie</option>
                </select>
            </div>
        </div>

        <div class="card-footer" style="text-align: center;">
            <button type="submit" class="btn">Guardar</button>
        </div>
    </form>

    <!-- Botón para volver al panel de Admin -->
    <a href="{{ route('admin') }}" class="btn-back">Volver al Panel de Admin</a>
</div>

</body>
</html>
