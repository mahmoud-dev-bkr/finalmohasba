<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductUintPrices;
use Faker\Generator as Faker;

$factory->define(ProductUintPrices::class, function (Faker $faker) {
    return [
        'unit_id' => factory(App\ProductUint::class), // Link to ProductUint factory
        'product_id' => "1", // Link to Product factory
        'site_id' => "1",
        'price' => $faker->randomFloat(2, 100, 500),
        'counter_of_unit' => $faker->randomNumber(),
    ];
});
