<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductUint;
use Faker\Generator as Faker;

$factory->define(ProductUint::class, function (Faker $faker) {
    return [
        'id_unit' => "2",
        'price_buy' => $faker->randomFloat(2, 100, 500),
        'is_buy_tex' => $faker->boolean,
        'price_sell' => $faker->randomFloat(2, 100, 500),
        'is_sell_text' => $faker->boolean,
        'barcode' => $faker->ean13,
        'id_product' => "1",
        'counter_of_unit' => $faker->randomNumber(),
        'company_id' => $faker->randomNumber(),
    ];
});
