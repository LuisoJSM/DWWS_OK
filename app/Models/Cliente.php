<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Cliente extends Model
{
    use HasFactory;

    // Modelo cliente con sus correspondientes atributos
    protected $fillable = [
        'nombre',
        'apellido',
        'edad',
    ];
}
