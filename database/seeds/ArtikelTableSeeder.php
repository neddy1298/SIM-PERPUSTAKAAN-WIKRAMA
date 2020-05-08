<?php

use Illuminate\Database\Seeder;

class ArtikelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->insert([
            [
                'judul' => 'Android',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum error doloribus dolor libero. Adipisci odio nemo quod omnis accusamus voluptatibus, repellat ab, ullam, voluptate delectus similique quidem eligendi suscipit aspernatur.</p>',
                'cover' => 'android.jpg',
                'author' => 'Imam Firmansyah',
                'created_at' => now(),
                'updated_at' => now(),
                'id_kategori' => '1',
                'views' => '359',
            ], [
                'judul' => 'Laravel',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum error doloribus dolor libero. Adipisci odio nemo quod omnis accusamus voluptatibus, repellat ab, ullam, voluptate delectus similique quidem eligendi suscipit aspernatur.</p>',
                'cover' => 'laravel.jpg',
                'author' => 'Neddy AP',
                'created_at' => now(),
                'updated_at' => now(),
                'id_kategori' => '2',
                'views' => '819',
            ],]);
        factory(\App\Artikel::class, 62)->create();
    }
}
