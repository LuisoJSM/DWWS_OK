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
            [
                'titulo' => 'Inception',
                'anio_estreno' => 2010,
                'director_id' => 1,
                'trailer_url' => 'https://www.youtube.com/watch?v=YoHD9XEInc0',
            ],
            [
                'titulo' => 'Interstellar',
                'anio_estreno' => 2014,
                'director_id' => 1,
                'trailer_url' => 'https://www.youtube.com/watch?v=zSWdZVtXT7E',
            ],
            [
                'titulo' => 'The Dark Knight',
                'anio_estreno' => 2008,
                'director_id' => 1,
                'trailer_url' => 'https://www.youtube.com/watch?v=EXeTwQWrcwY',
            ],
            [
                'titulo' => 'Memento',
                'anio_estreno' => 2000,
                'director_id' => 1,
                'trailer_url' => 'https://www.youtube.com/watch?v=0vS0E9bBSL0',
            ],
            [
                'titulo' => 'Tenet',
                'anio_estreno' => 2020,
                'director_id' => 1,
                'trailer_url' => 'https://www.youtube.com/watch?v=L3pk_TBkihU',
            ],

            // Steven Spielberg
            [
                'titulo' => 'Jurassic Park',
                'anio_estreno' => 1993,
                'director_id' => 2,
                'trailer_url' => 'https://www.youtube.com/watch?v=lc0UehYemQA',
            ],
            [
                'titulo' => 'E.T.',
                'anio_estreno' => 1982,
                'director_id' => 2,
                'trailer_url' => 'https://www.youtube.com/watch?v=qYAETtIIClk',
            ],
            [
                'titulo' => 'Jaws',
                'anio_estreno' => 1975,
                'director_id' => 2,
                'trailer_url' => 'https://www.youtube.com/watch?v=U1fu_sA7XhE',
            ],
            [
                'titulo' => 'Schindler’s List',
                'anio_estreno' => 1993,
                'director_id' => 2,
                'trailer_url' => 'https://www.youtube.com/watch?v=gG22XNhtnoY',
            ],
            [
                'titulo' => 'Saving Private Ryan',
                'anio_estreno' => 1998,
                'director_id' => 2,
                'trailer_url' => 'https://www.youtube.com/watch?v=9CiW_DgxCnQ',
            ],

            // Quentin Tarantino
            [
                'titulo' => 'Pulp Fiction',
                'anio_estreno' => 1994,
                'director_id' => 3,
                'trailer_url' => 'https://www.youtube.com/watch?v=s7EdQ4FqbhY',
            ],
            [
                'titulo' => 'Kill Bill Vol. 1',
                'anio_estreno' => 2003,
                'director_id' => 3,
                'trailer_url' => 'https://www.youtube.com/watch?v=7kSuas6mRpk',
            ],
            [
                'titulo' => 'Kill Bill Vol. 2',
                'anio_estreno' => 2004,
                'director_id' => 3,
                'trailer_url' => 'https://www.youtube.com/watch?v=WTt8cCIvGYI',
            ],
            [
                'titulo' => 'Django Unchained',
                'anio_estreno' => 2012,
                'director_id' => 3,
                'trailer_url' => 'https://www.youtube.com/watch?v=_iH0UBYDI4g',
            ],
            [
                'titulo' => 'Inglourious Basterds',
                'anio_estreno' => 2009,
                'director_id' => 3,
                'trailer_url' => 'https://www.youtube.com/watch?v=KnrRy6kSFF0',
            ],

            // Martin Scorsese
            [
                'titulo' => 'The Irishman',
                'anio_estreno' => 2019,
                'director_id' => 4,
                'trailer_url' => 'https://www.youtube.com/watch?v=WHXxVmeGQUc',
            ],
            [
                'titulo' => 'Goodfellas',
                'anio_estreno' => 1990,
                'director_id' => 4,
                'trailer_url' => 'https://www.youtube.com/watch?v=2ilzidi_J8Q',
            ],
            [
                'titulo' => 'Taxi Driver',
                'anio_estreno' => 1976,
                'director_id' => 4,
                'trailer_url' => 'https://www.youtube.com/watch?v=T5IligQP7Fo',
            ],
            [
                'titulo' => 'The Wolf of Wall Street',
                'anio_estreno' => 2013,
                'director_id' => 4,
                'trailer_url' => 'https://www.youtube.com/watch?v=iszwuX1AK6A',
            ],
            [
                'titulo' => 'Casino',
                'anio_estreno' => 1995,
                'director_id' => 4,
                'trailer_url' => 'https://www.youtube.com/watch?v=EJXDMwGWhoA',
            ],

                // Sofia Coppola
                [
                    'titulo' => 'Lost in Translation',
                    'anio_estreno' => 2003,
                    'director_id' => 5,
                    'trailer_url' => 'https://www.youtube.com/watch?v=5T8H3HvKeBg'
                ],
                [
                    'titulo' => 'Marie Antoinette',
                    'anio_estreno' => 2006,
                    'director_id' => 5,
                    'trailer_url' => 'https://www.youtube.com/watch?v=1WjsqV7P9HU'
                ],
                [
                    'titulo' => 'The Virgin Suicides',
                    'anio_estreno' => 1999,
                    'director_id' => 5,
                    'trailer_url' => 'https://www.youtube.com/watch?v=K3Bz4I7pAcA'
                ],
                [
                    'titulo' => 'Somewhere',
                    'anio_estreno' => 2010,
                    'director_id' => 5,
                    'trailer_url' => 'https://www.youtube.com/watch?v=8qP79rRzzmA'
                ],
                [
                    'titulo' => 'On the Rocks',
                    'anio_estreno' => 2020,
                    'director_id' => 5,
                    'trailer_url' => 'https://www.youtube.com/watch?v=Xn3sK4WiviA'
                ],

                // Alfonso Cuarón
                [
                    'titulo' => 'Roma',
                    'anio_estreno' => 2018,
                    'director_id' => 6,
                    'trailer_url' => 'https://www.youtube.com/watch?v=6BS27ngZtxg'
                ],
                [
                    'titulo' => 'Gravity',
                    'anio_estreno' => 2013,
                    'director_id' => 6,
                    'trailer_url' => 'https://www.youtube.com/watch?v=OiTiKOy59o4'
                ],
                [
                    'titulo' => 'Children of Men',
                    'anio_estreno' => 2006,
                    'director_id' => 6,
                    'trailer_url' => 'https://www.youtube.com/watch?v=2VT2apoX90o'
                ],
                [
                    'titulo' => 'Y Tu Mamá También',
                    'anio_estreno' => 2001,
                    'director_id' => 6,
                    'trailer_url' => 'https://www.youtube.com/watch?v=8nTFjVm9sTQ'
                ],
                [
                    'titulo' => 'Harry Potter and the Prisoner of Azkaban',
                    'anio_estreno' => 2004,
                    'director_id' => 6,
                    'trailer_url' => 'https://www.youtube.com/watch?v=lAxgztbYDbs'
                ],

                // Wes Anderson
                [
                    'titulo' => 'The Grand Budapest Hotel',
                    'anio_estreno' => 2014,
                    'director_id' => 7,
                    'trailer_url' => 'https://www.youtube.com/watch?v=1Fg5iWmQjwk'
                ],
                [
                    'titulo' => 'Moonrise Kingdom',
                    'anio_estreno' => 2012,
                    'director_id' => 7,
                    'trailer_url' => 'https://www.youtube.com/watch?v=7N8wkVA4_8s'
                ],
                [
                    'titulo' => 'Fantastic Mr. Fox',
                    'anio_estreno' => 2009,
                    'director_id' => 7,
                    'trailer_url' => 'https://www.youtube.com/watch?v=n2igjYFojUo'
                ],
                [
                    'titulo' => 'The French Dispatch',
                    'anio_estreno' => 2021,
                    'director_id' => 7,
                    'trailer_url' => 'https://www.youtube.com/watch?v=TcPk2p0Zaw4'
                ],
                [
                    'titulo' => 'The Royal Tenenbaums',
                    'anio_estreno' => 2001,
                    'director_id' => 7,
                    'trailer_url' => 'https://www.youtube.com/watch?v=8Eg6yIwP2vs'
                ],

                // Greta Gerwig
                [
                    'titulo' => 'Lady Bird',
                    'anio_estreno' => 2017,
                    'director_id' => 8,
                    'trailer_url' => 'https://www.youtube.com/watch?v=cNi_HC839Wo'
                ],
                [
                    'titulo' => 'Little Women',
                    'anio_estreno' => 2019,
                    'director_id' => 8,
                    'trailer_url' => 'https://www.youtube.com/watch?v=AST2-4db4ic'
                ],

                // Denis Villeneuve
                [
                    'titulo' => 'Dune',
                    'anio_estreno' => 2021,
                    'director_id' => 9,
                    'trailer_url' => 'https://www.youtube.com/watch?v=8g18jFHCLXk'
                ],
                [
                    'titulo' => 'Arrival',
                    'anio_estreno' => 2016,
                    'director_id' => 9,
                    'trailer_url' => 'https://www.youtube.com/watch?v=tFMo3UJ4B4g'
                ],
                [
                    'titulo' => 'Blade Runner 2049',
                    'anio_estreno' => 2017,
                    'director_id' => 9,
                    'trailer_url' => 'https://www.youtube.com/watch?v=gCcx85zbxz4'
                ],
                [
                    'titulo' => 'Sicario',
                    'anio_estreno' => 2015,
                    'director_id' => 9,
                    'trailer_url' => 'https://www.youtube.com/watch?v=G8tlEcnrGnU'
                ],
                [
                    'titulo' => 'Enemy',
                    'anio_estreno' => 2013,
                    'director_id' => 9,
                    'trailer_url' => 'https://www.youtube.com/watch?v=FJuaAWrgoUY'
                ],
            ];

        DB::table('peliculas')->insert($peliculas);
    }
}
