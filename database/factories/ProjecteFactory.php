<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Projecte;
use Faker\Generator as Faker;

$factory->define(Projecte::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'slug' => $faker->slug,
    ];
});