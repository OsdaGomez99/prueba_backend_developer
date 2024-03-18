<?php

use Illuminate\Database\Seeder;

class SeederProducto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Producto::class, 1000)->create();
    }
}
