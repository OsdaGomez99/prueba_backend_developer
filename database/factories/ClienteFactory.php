<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'rut_cliente' => $faker->numberBetween(100000000, 999999999),
        'nombre_cliente' => $faker->firstName,
        'apellido_cliente' => $faker->lastName,
        'dir_cliente' => $faker->streetName .", ". $faker->buildingNumber .", ". $faker->secondaryAddress .", ". $faker->city,
        'tel_cliente' => $faker->phoneNumber,
        'pais_cliente' => $faker->country
    ];
});
