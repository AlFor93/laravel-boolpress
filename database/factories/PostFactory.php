<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
      'title' => $faker->sentence(4,true),
      'content' => $faker->paragraph(2, true),
      'publication_date' => $faker->dateTimeThisDecade,
    ];
});
