<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Vehiculo;

class VehiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehiculos')->insert([
            [
                'patente' => 'ABC123',
                'anio' => 2020,
                'tipo_vehiculo' => 'Sedan',
                'disponibilidad' => true,
                'modelo' => 'Toyota Corolla',
                'imagen' => 'images/Mc.jpg'
            ],
            [
                'patente' => 'DEF456',
                'anio' => 2019,
                'tipo_vehiculo' => 'Coupe',
                'disponibilidad' => false,
                'modelo' => 'Toyota Supra',
                'imagen' => 'images/supra.jpg'
            ],
            // Agrega más datos según sea necesario
        ]);
    }
}

