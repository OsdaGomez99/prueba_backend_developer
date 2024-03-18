<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SeederSucursal::class,
            SeederCliente::class,
            SeederVendedor::class,
            SeederProveedor::class,
            SeederProducto::class,
            SeederVenta::class,
            SeederDetalleVenta::class

        ]);
    }
}
