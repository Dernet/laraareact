<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
        'description' => $faker->word(5),
        'image' => 'https://picsum.photos/200/300',
        'price' => $faker->randomDigit,
        'category_id' => $faker->numberBetween(1, 3),
    ];
});
