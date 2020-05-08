<?php

/** @var Factory $factory */

use App\Kategori;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Kategori::class, function (Faker $faker) {
    return [
        'nama_kategori' => $faker->unique()->randomElement([
            'Art', 'Programming', 'Technology', 'Science', 'Mathematics', 'English', 'Indonesia', 'Novel', 'B.Sunda', 'KWH',
        ]),
    ];
});
