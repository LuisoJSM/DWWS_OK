<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Videoclub</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1e1e2e, #282a36);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            color: white;
            text-align: center;
        }

        .container {
            background-color: #282a36;
            width: 90%;
            max-width: 800px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            padding: 30px;
            margin: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        /* Animación */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            font-size: 2.5em;
            color: #ff79c6;
        }

        p {
            font-size: 1.2em;
            margin-top: 10px;
            color: #f8f8f2;
        }

        .btn {
            display: inline-block;
            background-color: #50fa7b;
            color: #282a36;
            padding: 12px 25px;
            font-size: 1.2em;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s ease, transform 0.2s ease;
            margin-top: 20px;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #40d674;
            transform: scale(1.05);
        }

        /* Responsive */
        @media (max-width: 768px) {
            h1 {
                font-size: 2em;
            }
            p {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>

    @include('layouts.nav')

    <div class="container">
        <h1>🎬 DWWStreaming 🍿</h1>
        <p>Para ver películas con trailer, ve al catálogo</p>
        <a href="{{ route('catalogo') }}" class="btn">🎥 Explorar Películas</a>
    </div>

</body>
</html>
