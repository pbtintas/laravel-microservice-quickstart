<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Montadora;
use Faker\Generator as Faker;

$factory->define(Montadora::class, function (Faker $faker) {
    return [
        'name'=> $faker->country,
        'abr'=> $faker->city
    ];
});
