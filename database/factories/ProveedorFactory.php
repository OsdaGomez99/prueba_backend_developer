<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proveedor;
use Faker\Generator as Faker;

$factory->define(Proveedor::class, function (Faker $faker) {
    return [
        'rut_prov' => $faker->numberBetween(100000000, 999999999),
        'nombre_prov' => $faker->firstName,
        'dir_prov' => $faker->streetName .", ". $faker->buildingNumber .", ". $faker->secondaryAddress .", ". $faker->city,
        'tel_prov' => $faker->phoneNumber,
        'pagina_web' => $faker->domainName,
        'pais_prov' => $faker->country,
    ];
});
