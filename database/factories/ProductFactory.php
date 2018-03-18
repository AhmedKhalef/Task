<?php

use Faker\Generator as Faker;

$factory->define(App\Products::class, function (Faker $faker) {
    return [
        // 'city_id' => $city,
        'name' => $faker->word,
        'details' => $faker->sentence,
        'price' => $faker->randomNumber(2),
    ];
});
