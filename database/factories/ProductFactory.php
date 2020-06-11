<?php

use Faker\Generator as Faker;

$factory->define(Nrn\Product::class, function (Faker $faker) {
    $data= ['shirt', 'pant', 'tshirt'];
    return [
        'name'=>$faker->name(['female']). ' '. array_random($data),
        'slug'=>$faker->unique()->word,
        'image'=>$faker->imageUrl(),
        'short_description'=>$faker->sentence,
        'price'=>$faker->numberBetween(500,600),
        'on_sale'=>$faker->boolean,
        'on_stock'=>$faker->numberBetween(0,600),
        'description'=>$faker->paragraph,

    ];
});
