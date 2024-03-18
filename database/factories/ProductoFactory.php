<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre_pro' => $faker->sentence(4),
        'precio_pro' => $faker->numberBetween(1.00, 999.99),
        'stock_pro' => $faker->numberBetween(0, 1000),
        'id_sucursal' => $faker->numberBetween(1, 10),
        'id_proveedor' => $faker->numberBetween(1, 100)
    ];
});
