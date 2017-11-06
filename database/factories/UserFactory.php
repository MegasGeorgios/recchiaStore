<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(App\citas::class, function (Faker $faker) {
        return [
            'nombre' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'telefono' => rand(1111111, 9999999),
            'prenda' => $faker->title,
            'fecha' => $faker->date,
            'buscar' => $faker->name.$faker->unique()->safeEmail.$faker->title.$faker->date,

        ];
});
