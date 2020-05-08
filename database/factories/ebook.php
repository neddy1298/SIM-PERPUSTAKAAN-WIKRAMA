<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ebook;
use App\Kategori;
use Faker\Generator as Faker;

$factory->define(Ebook::class, function (Faker $faker) {
    $id_kategori = Kategori::pluck('id_kategori')->toArray();
    return [
        'judul' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'isbn' => $faker->numerify('1170####'),
        'pengarang' => $faker->name,
        'penerbit' => $faker->company,
        'jumlah_halaman' => $faker->numberBetween(20, 500),
        'tahun_terbit' => $faker->year(),
        'deskripsi' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'link' => '#',
        'cover' => 'book' . $faker->randomElement(['1', '2', '3', '4', '5']) . '.jpg',
        'views' => $faker->numberBetween(0, 8248),
        'id_kategori' => $faker->randomElement($id_kategori),
    ];
});
