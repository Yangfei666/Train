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

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'question' => $faker->sentence(6),
        'answer' => $faker->paragraph(5),
    ];
});
