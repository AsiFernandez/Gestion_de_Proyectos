<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proyecto;
use Faker\Generator as Faker;

$factory->define(Proyecto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->domainWord,
        'titulo'=>$faker->company                 ,
        'fechainicio' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = '-5 years', $timezone = null) ,
        'fechafin' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = '+5 years', $timezone = null),
        'horasestimadas' => $faker->randomDigit,
        'empleado_id' => $faker->numberBetween($min = 1, $max = 5)

    ];
});
