<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Author::class, function (Faker $faker) {
    return [
      'name' => $faker->firstName,
      'lastname' => $faker->lastname,
      'username' => $faker->unique()->username,
      'birthday' => $faker->date,
      'registration_date' => $faker->dateTimeThisDecade
    ];
});
