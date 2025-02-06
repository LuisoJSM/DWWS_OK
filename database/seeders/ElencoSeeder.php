<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElencoSeeder extends Seeder
{
    public function run()
    {
        $elenco = [
            ['nombre' => 'Leonardo', 'apellido' => 'DiCaprio', 'fecha_nacimiento' => '1974-11-11'],
            ['nombre' => 'Meryl', 'apellido' => 'Streep', 'fecha_nacimiento' => '1949-06-22'],
            ['nombre' => 'Tom', 'apellido' => 'Hanks', 'fecha_nacimiento' => '1956-07-09'],
            ['nombre' => 'Scarlett', 'apellido' => 'Johansson', 'fecha_nacimiento' => '1984-11-22'],
            ['nombre' => 'Brad', 'apellido' => 'Pitt', 'fecha_nacimiento' => '1963-12-18'],
            ['nombre' => 'Matt', 'apellido' => 'Damon', 'fecha_nacimiento' => '1970-10-08'],
            ['nombre' => 'Natalie', 'apellido' => 'Portman', 'fecha_nacimiento' => '1981-06-09'],
            ['nombre' => 'Ryan', 'apellido' => 'Gosling', 'fecha_nacimiento' => '1980-11-12'],
            ['nombre' => 'Emily', 'apellido' => 'Blunt', 'fecha_nacimiento' => '1983-02-23'],
        ];

        DB::table('elenco')->insert($elenco);
    }
}
