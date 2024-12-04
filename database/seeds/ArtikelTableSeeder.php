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
            ],
            [
                'judul' => 'Pentingnya Literasi Digital',
                'deskripsi' => '<p>Memahami pentingnya literasi digital di era modern dan bagaimana meningkatkannya.</p>',
                'cover' => 'literasi.jpg',
                'author' => 'Imam Firmansyah',
                'created_at' => now(),
                'updated_at' => now(),
                'id_kategori' => '6',
                'views' => '819'
            ],
            [
                'judul' => 'Teknologi AI dalam Pendidikan',
                'deskripsi' => '<p>Pemanfaatan kecerdasan buatan dalam meningkatkan kualitas pendidikan.</p>',
                'cover' => 'ai-edu.jpg',
                'author' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
                'id_kategori' => '6',
                'views' => '654'
            ],
            [
                'judul' => 'Manfaat Membaca Buku',
                'deskripsi' => '<p>Mengapa membaca buku penting untuk pengembangan diri dan pengetahuan.</p>',
                'cover' => 'reading.jpg',
                'author' => 'Jane Smith',
                'created_at' => now(),
                'updated_at' => now(),
                'id_kategori' => '1',
                'views' => '732'
            ],
            [
                'judul' => 'Perpustakaan Digital Modern',
                'deskripsi' => '<p>Transformasi perpustakaan di era digital dan manfaatnya.</p>',
                'cover' => 'digital-library.jpg',
                'author' => 'David Wilson',
                'created_at' => now(),
                'updated_at' => now(),
                'id_kategori' => '6',
                'views' => '567'
            ]
        ]);
    }
}
