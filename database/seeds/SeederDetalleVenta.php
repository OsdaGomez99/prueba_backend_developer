<?php

use Illuminate\Database\Seeder;

class SeederDetalleVenta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DetalleVenta::class, 1000)->create();
    }
}
