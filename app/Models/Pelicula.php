<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    // Atributos que pueden ser asignados masivamente


    protected $fillable = ['titulo', 'anio_estreno', 'director_id', 'id_isrc', 'trailer_url'];



    // Relación con el modelo Director
    public function director()
    {
        return $this->belongsTo(Director::class, 'director_id');
    }

    //Relación entre isrc y película
    public function isrc(){
        return $this->belongsTo(Isrc::class);
    }


// Pelicula.php
public function elenco()
{
    return $this->belongsToMany(Elenco::class, 'elenco_pelicula', 'id_pelicula', 'id_elenco');
}



}
