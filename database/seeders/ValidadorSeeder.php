<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValidadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Aquí puedes agregar la lógica para crear un validador
        // Por ejemplo, crear un usuario con el rol de validador
        \App\Models\User::create([
            'name' => 'Validador',
            'email' => 'validador@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
