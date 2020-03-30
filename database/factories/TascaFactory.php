<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tasca;
use Faker\Generator as Faker;

$factory->define(Tasca::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'slug' => $faker->slug,
        'completada' => $faker->boolean(),
        'descripcio' => $faker->paragraph,
        'projecte_id' => function () {
            return factory(App\Projecte::class)->create()->id;
            // Genere un id de projecte relacionat
        },
    ];
});
