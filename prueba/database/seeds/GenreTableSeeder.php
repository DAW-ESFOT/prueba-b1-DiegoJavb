<?php

use App\Genre;
use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Genre::truncate();
        $faker = \Faker\Factory::create();
        // Crear generos ficticios en la tabla
        for($i = 0; $i < 20; $i++) {
            Genre::create([
                'name'=> $faker->name,
            ]);
        }
    }
}
