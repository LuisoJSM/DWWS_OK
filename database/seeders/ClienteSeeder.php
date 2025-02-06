<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    public function run()
    {
        $clientes = [
            ['nombre' => 'Juan', 'apellido' => 'Pérez', 'edad' => 30],
            ['nombre' => 'Ana', 'apellido' => 'García', 'edad' => 25],
            ['nombre' => 'Luis', 'apellido' => 'Martínez', 'edad' => 40],
            ['nombre' => 'Marta', 'apellido' => 'Rodríguez', 'edad' => 35],
            ['nombre' => 'Carlos', 'apellido' => 'López', 'edad' => 50],
        ];

        DB::table('clientes')->insert($clientes);
    }
}
