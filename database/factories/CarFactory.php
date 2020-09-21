<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'vin' => $faker->randomNumber(9),
        'car_model_id' => \App\Models\CarModel::inRandomOrder()->first()->id,
        'year' => random_int(2000, 2020),
    ];
});
