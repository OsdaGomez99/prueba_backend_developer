<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vendedor;
use Faker\Generator as Faker;

$factory->define(Vendedor::class, function (Faker $faker) {
    return [
        'rut_ven' => $faker->numberBetween(100000000, 999999999),
        'nombre_ven' => $faker->firstName,
        'apellido_ven' => $faker->lastName,
        'dir_ven' => $faker->streetName .", ". $faker->buildingNumber .", ". $faker->secondaryAddress .", ". $faker->city,
        'tel_ven' => $faker->phoneNumber,
        'fecha_na_ven' => $faker->dateTime,
        'email_ven' => $faker->email,
        'pais_ven' => $faker->country,
    ];
});
