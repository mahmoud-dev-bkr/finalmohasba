<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name_ar' => $faker->word,
        'name_en' => $faker->word,
        // Ensure all fields are valid
        'id_unit' => "1",
        'id_des' => $faker->randomNumber(),
        'type' => "1",
        'barCode' => $faker->ean13,
        'price_of_sell' => $faker->randomFloat(2, 100, 500),
        'serial_number' => $faker->uuid,
        'Tex_Number' => $faker->randomNumber(),
        'is_sell' => $faker->boolean,
        'is_buy' => $faker->boolean,
        'is_store' => $faker->boolean,
        'Note' => $faker->sentence,
        'buy' => $faker->randomFloat(2, 100, 500),
        'sel' => $faker->randomFloat(2, 100, 500),
        'account_buy' => $faker->randomNumber(),
        'account_sel' => $faker->randomNumber(),
        'get_product_units' => $faker->randomNumber(),
        'archive' => $faker->boolean,
        'company_id' => "1",
    ];
});

