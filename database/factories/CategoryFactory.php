<?php

use Faker\Generator as Faker;
use App\Category;

$factory->define(Category::class, function (Faker $faker) {
    return [
    	'name' => ucfirst($faker->word),
    	'description' => $faker->sentence(10),
    	'slug' => $faker->slug(),
    	'image' => $faker->imageUrl(250, 250)
    ];
});
