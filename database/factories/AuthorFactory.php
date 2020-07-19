<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'age' => $faker->numberBetween(30, 60),
        'experience' => $faker->randomDigit,
    ];
});
