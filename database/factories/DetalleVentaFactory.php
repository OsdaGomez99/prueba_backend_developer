<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DetalleVenta;
use Faker\Generator as Faker;

$factory->define(DetalleVenta::class, function (Faker $faker) {
    return [
        'id_venta' => $faker->numberBetween(1, 100),
        'id_producto' => $faker->numberBetween(1, 1000),
        'cantidad' => $faker->numberBetween(1, 1000),
        'precio_unitario' => $faker->numberBetween(1.0, 999.99),
        'subtotal' => $faker->numberBetween(1.0, 99999.99)
    ];
});
