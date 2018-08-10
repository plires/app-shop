<?php

use Faker\Generator as Faker;
use App\UserImage;

$factory->define(UserImage::class, function (Faker $faker) {
    return [
      'image' => $faker->imageUrl(300, 300),
      'user_id' => $faker->numberBetween(1, 10)
    ];
});
