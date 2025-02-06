<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PeliculasController;
use Illuminate\Support\Facades\DB;

use App\Models\Pelicula;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{

    public function catalogo(){
    // Obtengo las películas con su director usando Eager Loading
    $peliculas = Pelicula::with('director')->get();

    // Retorna la vista con las películas y sus directores
    return view('catalogo', ['peliculas' => $peliculas]);
    }


    public function home(){
        return view ('home');
    }




}
