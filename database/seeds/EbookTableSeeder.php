<?php

use Illuminate\Database\Seeder;

class EbookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ebook')->insert([
            [
                'judul' => 'Pemrograman Android',
                'isbn' => '11706106',
                'pengarang' => 'Imam Firmansyah',
                'penerbit' => 'Gramedia',
                'jumlah_halaman' => '300',
                'tahun_terbit' => '2023',
                'cover' => 'android.jpg',
                'deskripsi' => '<p>Buku lengkap tentang pemrograman Android untuk pemula hingga mahir.</p>',
                'link' => 'android.pdf',
                'id_kategori' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                'views' => '919'
            ],
            [
                'judul' => 'Web Development dengan Laravel',
                'isbn' => '11706107',
                'pengarang' => 'John Doe',
                'penerbit' => 'Elex Media',
                'jumlah_halaman' => '450',
                'tahun_terbit' => '2023',
                'cover' => 'laravel.jpg',
                'deskripsi' => '<p>Panduan lengkap pengembangan web menggunakan framework Laravel.</p>',
                'link' => 'laravel.pdf',
                'id_kategori' => '6',
                'created_at' => now(),
                'updated_at' => now(),
                'views' => '756'
            ],
            [
                'judul' => 'Machine Learning Basics',
                'isbn' => '11706108',
                'pengarang' => 'Jane Smith',
                'penerbit' => 'Informatika',
                'jumlah_halaman' => '280',
                'tahun_terbit' => '2023',
                'cover' => 'ml.jpg',
                'deskripsi' => '<p>Pengenalan dasar machine learning dan implementasinya.</p>',
                'link' => 'ml.pdf',
                'id_kategori' => '7',
                'created_at' => now(),
                'updated_at' => now(),
                'views' => '634'
            ],
            [
                'judul' => 'Database Design',
                'isbn' => '11706109',
                'pengarang' => 'David Wilson',
                'penerbit' => 'Andi Publisher',
                'jumlah_halaman' => '320',
                'tahun_terbit' => '2023',
                'cover' => 'database.jpg',
                'deskripsi' => '<p>Teknik perancangan database yang efektif dan optimal.</p>',
                'link' => 'database.pdf',
                'id_kategori' => '6',
                'created_at' => now(),
                'updated_at' => now(),
                'views' => '528'
            ]
        ]);
    }
}
