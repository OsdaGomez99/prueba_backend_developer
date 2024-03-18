<?php

use Illuminate\Database\Seeder;

class SeederProveedor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Proveedor::class, 100)->create();
    }
}
