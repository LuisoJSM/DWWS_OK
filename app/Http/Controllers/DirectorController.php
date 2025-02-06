<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Director;
use App\Models\Pelicula;
use Illuminate\Support\Facades\DB;


class DirectorController extends Controller
{
   
    public function listaDirector()
    {
        // Recuperar todos los directores con paginación
        $directores = Director::paginate(10);
        
        // Retornar la vista 'lista-directores' con los directores
        return view('directores.lista-director', [
            'directores' => $directores
        ]);
    }
    
    
    public function listaDirectorPelicula($id)
    {
        // Buscar al director por su ID
        $director = Director::findOrFail($id);
    
        // Obtener las películas asociadas al director con paginación (5 por página)
        $peliculas = $director->peliculas()->paginate(5);
    
        // Retornar la vista 'lista-directores-peliculas' con el director y sus películas
        return view('directores.lista-director-pelicula', [
            'director' => $director,
            'peliculas' => $peliculas
        ]);
    }
    
    



}
