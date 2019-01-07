<?php

use Faker\Generator as Faker;
use App\Models\Product as Product;

$factory->define(App\Models\Review::class, function (Faker $faker) {
    return [
        'product_id' => Product::all()->random(),
        'customer' => $faker->name,
        'review' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        'star' => $faker->numberBetween(0, 5)
    ];
});
