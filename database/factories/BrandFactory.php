<?php

use Faker\Generator as Faker;

$factory->define(Nrn\Brand::class, function (Faker $faker) {

    return [
        'slug'=>strtolower($faker->unique()->word),
        'name'=>'Brand '. random_int(1,100),
        'description'=>$faker->unique()->paragraph,
    ];
});
