<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeliculaSeeder extends Seeder
{
    public function run()
    {
        $peliculas = [
            // Christopher Nolan
            ['titulo' => 'Inception', 'anio_estreno' => 2010, 'director_id' => 1],
            ['titulo' => 'Interstellar', 'anio_estreno' => 2014, 'director_id' => 1],
            ['titulo' => 'The Dark Knight', 'anio_estreno' => 2008, 'director_id' => 1],
            ['titulo' => 'Memento', 'anio_estreno' => 2000, 'director_id' => 1],
            ['titulo' => 'Tenet', 'anio_estreno' => 2020, 'director_id' => 1],

            // Steven Spielberg
            ['titulo' => 'Jurassic Park', 'anio_estreno' => 1993, 'director_id' => 2],
            ['titulo' => 'E.T.', 'anio_estreno' => 1982, 'director_id' => 2],
            ['titulo' => 'Jaws', 'anio_estreno' => 1975, 'director_id' => 2],
            ['titulo' => 'Schindler’s List', 'anio_estreno' => 1993, 'director_id' => 2],
            ['titulo' => 'Saving Private Ryan', 'anio_estreno' => 1998, 'director_id' => 2],

            // Quentin Tarantino
            ['titulo' => 'Pulp Fiction', 'anio_estreno' => 1994, 'director_id' => 3],
            ['titulo' => 'Kill Bill Vol. 1', 'anio_estreno' => 2003, 'director_id' => 3],
            ['titulo' => 'Kill Bill Vol. 2', 'anio_estreno' => 2004, 'director_id' => 3],
            ['titulo' => 'Django Unchained', 'anio_estreno' => 2012, 'director_id' => 3],
            ['titulo' => 'Inglourious Basterds', 'anio_estreno' => 2009, 'director_id' => 3],

            // Martin Scorsese
            ['titulo' => 'The Irishman', 'anio_estreno' => 2019, 'director_id' => 4],
            ['titulo' => 'Goodfellas', 'anio_estreno' => 1990, 'director_id' => 4],
            ['titulo' => 'Taxi Driver', 'anio_estreno' => 1976, 'director_id' => 4],
            ['titulo' => 'The Wolf of Wall Street', 'anio_estreno' => 2013, 'director_id' => 4],
            ['titulo' => 'Casino', 'anio_estreno' => 1995, 'director_id' => 4],

            // Sofia Coppola
            ['titulo' => 'Lost in Translation', 'anio_estreno' => 2003, 'director_id' => 5],
            ['titulo' => 'Marie Antoinette', 'anio_estreno' => 2006, 'director_id' => 5],
            ['titulo' => 'The Virgin Suicides', 'anio_estreno' => 1999, 'director_id' => 5],
            ['titulo' => 'Somewhere', 'anio_estreno' => 2010, 'director_id' => 5],
            ['titulo' => 'On the Rocks', 'anio_estreno' => 2020, 'director_id' => 5],

            // Alfonso Cuarón
            ['titulo' => 'Roma', 'anio_estreno' => 2018, 'director_id' => 6],
            ['titulo' => 'Gravity', 'anio_estreno' => 2013, 'director_id' => 6],
            ['titulo' => 'Children of Men', 'anio_estreno' => 2006, 'director_id' => 6],
            ['titulo' => 'Y Tu Mamá También', 'anio_estreno' => 2001, 'director_id' => 6],
            ['titulo' => 'Harry Potter and the Prisoner of Azkaban', 'anio_estreno' => 2004, 'director_id' => 6],

            // Wes Anderson
            ['titulo' => 'The Grand Budapest Hotel', 'anio_estreno' => 2014, 'director_id' => 7],
            ['titulo' => 'Moonrise Kingdom', 'anio_estreno' => 2012, 'director_id' => 7],
            ['titulo' => 'Fantastic Mr. Fox', 'anio_estreno' => 2009, 'director_id' => 7],
            ['titulo' => 'The French Dispatch', 'anio_estreno' => 2021, 'director_id' => 7],
            ['titulo' => 'The Royal Tenenbaums', 'anio_estreno' => 2001, 'director_id' => 7],

            // Greta Gerwig
            ['titulo' => 'Lady Bird', 'anio_estreno' => 2017, 'director_id' => 8],
            ['titulo' => 'Little Women', 'anio_estreno' => 2019, 'director_id' => 8],

            // Denis Villeneuve
            ['titulo' => 'Dune', 'anio_estreno' => 2021, 'director_id' => 9],
            ['titulo' => 'Arrival', 'anio_estreno' => 2016, 'director_id' => 9],
            ['titulo' => 'Blade Runner 2049', 'anio_estreno' => 2017, 'director_id' => 9],
            ['titulo' => 'Sicario', 'anio_estreno' => 2015, 'director_id' => 9],
            ['titulo' => 'Enemy', 'anio_estreno' => 2013, 'director_id' => 9],
        ];

        DB::table('peliculas')->insert($peliculas);
    }
}
