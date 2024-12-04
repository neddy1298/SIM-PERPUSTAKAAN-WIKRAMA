<?php

use Illuminate\Database\Seeder;

class EtubeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etube')->insert([
            [
                'judul' => 'Android Development',
                'link' => 'Emr2q3DYlN0',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum error doloribus dolor libero.</p>',
                'author' => 'Imam Firmansyah',
                'created_at' => now(),
                'updated_at' => now(),
                'id_kategori' => '1',
                'views' => '405'
            ],
            [
                'judul' => 'Web Development',
                'link' => 'dQw4w9WgXcQ',
                'deskripsi' => '<p>Tutorial pengembangan web menggunakan teknologi modern.</p>',
                'author' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
                'id_kategori' => '6',
                'views' => '302'
            ],
            [
                'judul' => 'Data Science Basics',
                'link' => 'jK7r4VZ',
                'deskripsi' => '<p>Pengenalan dasar-dasar ilmu data dan analisis.</p>',
                'author' => 'Jane Smith',
                'created_at' => now(),
                'updated_at' => now(),
                'id_kategori' => '7',
                'views' => '253'
            ]
        ]);
    }
}
