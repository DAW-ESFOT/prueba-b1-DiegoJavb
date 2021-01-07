<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla
        User::truncate();
        $faker = \Faker\Factory::create();
        // Crear la misma clave para todos los usuarios
        // conviene hacerlo antes del for para que el seeder
        // no se vuelva lento.

        User::create([
            'name' => 'Administrador',
            'lastName' => 'Admin',
            'document' => 'admin@prueba.com',
        ]);

        // Generar algunos usuarios para nuestra aplicacion
        for ($i = 0; $i < 20; $i++) {
            User::create([
                'name' => $faker->name,
                'lastName' => $faker->lastName,
                'document' => $faker->email,
                ]);
        }
    }
}
