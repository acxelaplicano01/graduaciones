<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Graduando;
use App\Models\Invitacion;

class GraduandosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $graduandos = [
            [
                'carrera' => 'Ingeniería en Sistemas',
                'nombre' => 'Ana García López',
                'telefono' => '555-0101',
                'cantidad_invitados' => 2
            ],
            [
                'carrera' => 'Ingeniería en Sistemas',
                'nombre' => 'Carlos Rodríguez Martín',
                'telefono' => '555-0102',
                'cantidad_invitados' => 1
            ],
            [
                'carrera' => 'Administración de Empresas',
                'nombre' => 'María Elena Fernández',
                'telefono' => '555-0103',
                'cantidad_invitados' => 2
            ],
            [
                'carrera' => 'Administración de Empresas',
                'nombre' => 'José Luis Morales',
                'telefono' => '555-0104',
                'cantidad_invitados' => 1
            ],
            [
                'carrera' => 'Psicología',
                'nombre' => 'Laura Patricia Jiménez',
                'telefono' => '555-0105',
                'cantidad_invitados' => 2
            ],
            [
                'carrera' => 'Derecho',
                'nombre' => 'Roberto Sánchez Herrera',
                'telefono' => '555-0106',
                'cantidad_invitados' => 1
            ]
        ];

        foreach ($graduandos as $graduandoData) {
            $graduando = Graduando::create($graduandoData);

            // Crear las invitaciones para cada graduando
            for ($i = 0; $i < $graduando->cantidad_invitados; $i++) {
                $invitacion = Invitacion::create([
                    'fecha' => now()->addDays(30),
                ]);
                
                $graduando->invitaciones()->attach($invitacion->id);
            }
        }
    }
}
