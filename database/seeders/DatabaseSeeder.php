<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        //los seders es la manera como ingresar datos a la base de datos por defecto 
        //a la hora de crear o importar la base de datos y tablas.

        $this->call(UserSeeder::class);

        //genera datso para la tabla posts de foram aleatoria y con datos ficticios
        //es un factori
        Post::factory(100)->create();

    }
}
