<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido'];

    // Especificar el nombre de la tabla
    protected $table = 'directores';

    public function peliculas()
    {
        return $this->hasMany(Pelicula::class, 'director_id');
    }
}
