<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Venta;
use Faker\Generator as Faker;

$factory->define(Venta::class, function (Faker $faker) {
    return [
        'id_vendedor' => $faker->numberBetween(1, 20),
        'id_cliente' => $faker->numberBetween(1, 100),
        'id_sucursal' => $faker->numberBetween(1, 10),
        'fecha_venta' => $faker->dateTime,
        'monto_total' => $faker->numberBetween(1.00, 99999.99)
    ];
});
