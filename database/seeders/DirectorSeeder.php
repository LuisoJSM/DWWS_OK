<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectorSeeder extends Seeder
{
    public function run()
    {
        $directores = [
            ['nombre' => 'Christopher', 'apellido' => 'Nolan'],
            ['nombre' => 'Steven', 'apellido' => 'Spielberg'],
            ['nombre' => 'Quentin', 'apellido' => 'Tarantino'],
            ['nombre' => 'Martin', 'apellido' => 'Scorsese'],
            ['nombre' => 'Sofia', 'apellido' => 'Coppola'],
            ['nombre' => 'Alfonso', 'apellido' => 'Cuarón'],
            ['nombre' => 'Wes', 'apellido' => 'Anderson'],
            ['nombre' => 'Greta', 'apellido' => 'Gerwig'],
            ['nombre' => 'Denis', 'apellido' => 'Villeneuve']
        ];

        DB::table('directores')->insert($directores);
    }
}
