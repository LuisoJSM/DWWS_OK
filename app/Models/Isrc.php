<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isrc extends Model
{

    use HasFactory;

    protected $table = 'isrc';

    // Modelo isrc con sus correspondientes atributos
    protected $fillable = [
        'isrc',
        'tipo',
    ];

    //Relación entre isrc y película
    public function pelicula(){
        return $this->belongsTo(Pelicula::class);
    }

}
