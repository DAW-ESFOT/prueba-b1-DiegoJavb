<?php

use App\Genre;
use App\Movie;
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
        //Vaciar la tabla.
        Movie::truncate();
        $faker = \Faker\Factory::create();

        $genres = App\Genre::all();
        foreach ($genres as $genre) {
            for ($i = 0; $i < 20; $i++) {
                Genre::create([
                    'name' => $faker->name,
                    'code' => $faker->word,
                    'year' => $faker->year,
                    'available' => $faker->boolean,
                ]);
            }
        }

    }
}
