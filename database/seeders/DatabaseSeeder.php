<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            DirectorSeeder::class,
            PeliculaSeeder::class,
            ClienteSeeder::class,
            ElencoSeeder::class,
            ElencoPeliculaSeeder::class,
        ]);
    }
}
