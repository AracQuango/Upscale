<?php

use Faker\Generator as Faker;


$factory->define(\Upscale\Modules\Products\Models\Product::class, function (Faker $faker) {

    return [
        'name' => $faker->jobTitle,
        'slug' => "onpoint-hoodie",
        'sku' => "OPCA-1",
        'info' => $faker->sentence,
        'price' => $faker->randomFloat(2),
        'excerpt' => "Lorem ipsum dolor...",
        'description' => "Lorem ipsum dolor sit amet.",
        'ext_title' => "Onpoint hoodie",
        'meta_keywords' => "onpoint, hoodie, sweater, soft",
        'meta_description' => "Lorem ipsum dolor sit amet.",
        'options' => "{\"size\": [\"small\", \"medium\", \"large\"]}",
    ];
});
