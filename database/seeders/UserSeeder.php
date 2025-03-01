<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuairos = [
            'victor','diana'
        ];

        foreach ($usuairos as $usuario) {
            $user = new User();
            $user->name = $usuario;
            $user->email = "{$usuario}@vech.com";
            $user->password = bcrypt("123{$usuario}");
            $user->save();
        }

        //genra 10 datos de usuario de manera aleatoria, considera que teienes que 
        //seguir estructura de acuerdo a la convencion de laravel.
        User::factory(10)->create();
    }
}
