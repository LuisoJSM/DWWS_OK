<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElencoPeliculaSeeder extends Seeder
{
    public function run()
    {
        $elencoPelicula = [
            ['id_elenco' => 1, 'id_pelicula' => 1],
            ['id_elenco' => 1, 'id_pelicula' => 2],
            ['id_elenco' => 2, 'id_pelicula' => 3],
            ['id_elenco' => 2, 'id_pelicula' => 4],
            ['id_elenco' => 3, 'id_pelicula' => 5],
            ['id_elenco' => 3, 'id_pelicula' => 6],
            ['id_elenco' => 4, 'id_pelicula' => 7],
            ['id_elenco' => 4, 'id_pelicula' => 8],
            ['id_elenco' => 5, 'id_pelicula' => 9],
            ['id_elenco' => 5, 'id_pelicula' => 1],
            ['id_elenco' => 6, 'id_pelicula' => 2],
            ['id_elenco' => 6, 'id_pelicula' => 3],
            ['id_elenco' => 7, 'id_pelicula' => 4],
            ['id_elenco' => 7, 'id_pelicula' => 5],
            ['id_elenco' => 8, 'id_pelicula' => 6],
            ['id_elenco' => 8, 'id_pelicula' => 7],
            ['id_elenco' => 9, 'id_pelicula' => 8],
            ['id_elenco' => 9, 'id_pelicula' => 9],
        ];

        DB::table('elenco_pelicula')->insert($elencoPelicula);
    }
}
