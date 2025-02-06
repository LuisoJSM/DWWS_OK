<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DirectorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\ElencoController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Facade;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;




Route::get('/', function () {
    return view('home');
});



//RUTAS AUTENTICAR



Route::get('/login', function () {
    return view('login'); // Mostramos la vista de login
});

Route::post('/login', LoginController::class)->middleware('guest:sanctum'); // Ruta POST para procesar el login





Route::post('/logout', function (Request $request) {
    $request->user()->currentAccessToken()->delete();
    return redirect('/login');
})->middleware('auth:sanctum');









//Ruta Front End

Route::get('/catalogo', action: [FrontEndController::class, "catalogo"])->name('catalogo');
Route::get('/home', action: [FrontEndController::class, "home"])->name('home');



//Rutas admin VISTA GENERAL
Route::get('/admin', action: [AdminController::class, "admin"])->name('admin');




//Rutas administración de PELICULAS
Route::get("formulario-peliculas", [PeliculasController::class, "formulario"])->name("formulario-pelicula.formulario");

Route::get('lista-pelicula', [PeliculasController::class, 'listaPelicula'])->name('lista-pelicula.lista');

Route::post("formulario-peliculas", [PeliculasController::class,"agregarPelicula"])->name("formulario-pelicula.agregar");






//Ruta para ver directores
Route::get("lista-director", [DirectorController::class, 'listaDirector'])->name('lista-director.lista');
//Ruta paa ver películas por el ID del director
Route::get('lista-director-pelicula/{id}', [DirectorController::class, 'listaDirectorPelicula'])->name('lista-director-pelicula.lista');



//Ruta para ver Elenco
Route::get('lista-elenco', [ElencoController::class,"listaElenco"])->name("lista-elenco.lista");

Route::get("formulario-elenco", [ElencoController::class, "formulario"])->name("formulario-elenco.formulario");

Route::post("formulario-elenco",[ElencoController::class,"agregarElenco"])->name("formulario-elenco.agregar");

Route::get('elenco/{id}/peliculas', [ElencoController::class, 'listaElencoPeliculas'])->name('elenco.lista-elenco-peliculas');
