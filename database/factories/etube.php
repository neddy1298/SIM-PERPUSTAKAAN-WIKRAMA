<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Etube;
use App\Kategori;
use Faker\Generator as Faker;

$factory->define(Etube::class, function (Faker $faker) {
    $id_kategori = Kategori::pluck('id_kategori')->toArray();
    return [
        'judul' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'link' => '#',
        'deskripsi' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'author' => $faker->name,
        'views' => $faker->numberBetween(0, 8248),
        'id_kategori' => $faker->randomElement($id_kategori),
    ];
});
