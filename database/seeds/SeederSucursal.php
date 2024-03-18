<?php

use App\Sucursal;
use Illuminate\Database\Seeder;

class SeederSucursal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sucursal::create([
            'id' => 1,
            'pais' => 'Argentina',
            'moneda' => 'ARS',
        ]);

        Sucursal::create([
            'id' => 2,
            'pais' => 'Bolivia',
            'moneda' => 'BOB',
        ]);

        Sucursal::create([
            'id' => 3,
            'pais' => 'Brasil',
            'moneda' => 'R$',
        ]);

        Sucursal::create([
            'id' => 4,
            'pais' => 'Colombia',
            'moneda' => 'COP',
        ]);

        Sucursal::create([
            'id' => 5,
            'pais' => 'Chile',
            'moneda' => 'CLP',
        ]);

        Sucursal::create([
            'id' => 6,
            'pais' => 'México',
            'moneda' => 'MXN',
        ]);

        Sucursal::create([
            'id' => 7,
            'pais' => 'Paraguay',
            'moneda' => 'PYG',
        ]);

        Sucursal::create([
            'id' => 8,
            'pais' => 'Perú',
            'moneda' => 'PEN',
        ]);

        Sucursal::create([
            'id' => 9,
            'pais' => 'Uruguay',
            'moneda' => 'UYU',
        ]);

        Sucursal::create([
            'id' => 10,
            'pais' => 'Venezuela',
            'moneda' => 'VES',
        ]);
    }
}
