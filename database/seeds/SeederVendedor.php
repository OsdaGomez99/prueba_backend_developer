<?php

use Illuminate\Database\Seeder;

class SeederVendedor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Vendedor::class, 20)->create();
    }
}
