<?php

use Faker\Generator as Faker;

$factory->define(App\City::class, function (Faker $faker) {
    return [
        // 'country_id'=> $country,
        'city' => $faker->city,
    ];
});
