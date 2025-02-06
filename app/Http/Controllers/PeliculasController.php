<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pelicula;

class PeliculasController extends Controller
{


    //METODO DE LA NUEVA APLICACION
    public function formulario(){
        return view("peliculas.formulario-pelicula");
    }





    //METODO DE LA NUEVA APLICACION

    public function listaPelicula()
    {
        // Obtengo las películas con su director usando Eager Loading
        $peliculas = Pelicula::with('director')->get();

        // Retorna la vista con las películas y sus directores
        return view('peliculas.lista-pelicula', ['peliculas' => $peliculas]);
    }









    public function agregarPelicula(Request $request)
    {
        // Validar los datos enviados desde el formulario
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'nombre_director' => 'required|string|max:255',
            'apellido_director' => 'required|string|max:255',
            'anio_estreno' => 'required|integer|min:1800|max:' . date('Y'),
            'isrc' => 'required|string|max:15',
            'tipo' => 'required|string|in:pelicula,cortometraje,documental,serie',
            'trailer_url' => ['nullable', 'url', 'regex:/^(https?:\/\/)?(www\.)?(youtube\.com\/watch\?v=|youtu\.be\/)[\w-]+/i'],
        ]);

        // Buscar o crear el director
        $director = \App\Models\Director::firstOrCreate([
            'nombre' => $validated['nombre_director'],
            'apellido' => $validated['apellido_director']
        ]);

        // Buscar o crear ISRC
        $isrc = \App\Models\Isrc::firstOrCreate(
            ['isrc' => $validated['isrc']],
            ['tipo' => $validated['tipo']]
        );

        // Crear la película en la base de datos
        $pelicula = Pelicula::create([
            'titulo' => $validated['titulo'],
            'director_id' => $director->id,
            'anio_estreno' => $validated['anio_estreno'],
            'id_isrc' => $isrc->id,
            'trailer_url' => $validated['trailer_url'], // Ahora se usa correctamente
        ]);

        // Ruta del archivo JSON donde se almacenarán las películas
        $rutaJSON = storage_path('app/peliculas.json');

        // Leer y decodificar el contenido del archivo JSON si existe
        $peliculas = file_exists($rutaJSON) ? json_decode(file_get_contents($rutaJSON), true) : [];

        // Añadir la nueva película al array
        $peliculas[] = [
            'titulo' => $pelicula->titulo,
            'director' => $director->nombre . ' ' . $director->apellido,
            'anio_estreno' => $pelicula->anio_estreno,
            'isrc' => $isrc->isrc,
            'trailer_url' => $pelicula->trailer_url, // Se mantiene en JSON
            'fecha_ingreso' => now()->toDateTimeString(),
        ];

        // Escribir el array actualizado en el archivo JSON
        file_put_contents($rutaJSON, json_encode($peliculas, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        // Redirigir a la vista de admin con un mensaje de éxito
        return redirect()->route('formulario-pelicula.formulario')->with('success', 'Has añadido una película.');
    }


}
