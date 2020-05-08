<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Email;
use App\Kategori;
use Faker\Generator as Faker;

$factory->define(Email::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->safeEmail,
        'subject' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'message' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'status' => $faker->randomElement(['read', 'unread']),
    ];
});
