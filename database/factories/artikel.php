<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artikel;
use App\Kategori;
use App\User;
use Faker\Generator as Faker;

$factory->define(Artikel::class, function (Faker $faker) {
    $id_kategori = Kategori::pluck('id_kategori')->toArray();
    $user = User::pluck('name')->toArray();
    return [
        'judul' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'deskripsi' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'cover' => 'artikel' . $faker->randomElement(['1', '2', '3', '4', '5']) . '.jpg',
        'author' => $faker->randomElement($user),
        'views' => $faker->numberBetween(0, 8248),
        'id_kategori' => $faker->randomElement($id_kategori),
    ];
});
