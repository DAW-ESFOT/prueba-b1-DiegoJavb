<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        $this->call(GenreTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MovieTableSeeder::class);
        Schema::enableForeignKeyConstraints();

    }
}
