<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'price' => $faker->numberBetween(100, 1000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(2, 30)
    ];
});
