<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('movies')->insert([
                'name' => 'Polar',
                'director' => 'Jonas Åkerlund',
                'duration' => 119,
                'year' => 2019,
                'genre_id' => 1,
            ]);
            DB::table('movies')->insert([
                'name' => 'La cité de la peur',
                'director' => 'Alain Berbérian',
                'duration' => 93,
                'year' => 1994,
                'genre_id' => 2,
            ]);
            DB::table('movies')->insert([
                'name' => 'Avengers end game',
                'director' => 'Anthony & Joe Russo',
                'duration' => 181,
                'year' => 2019,
                'genre_id' => 3,
            ]);
            DB::table('movies')->insert([
                'name' => 'The Notebook',
                'director' => 'Nick Cassavetes',
                'duration' => 124,
                'year' => 2004,
                'genre_id' => 4,
            ]);
        }
    }
}
