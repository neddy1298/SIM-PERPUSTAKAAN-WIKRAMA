<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['nama_kategori' => 'Buku Pelajaran'],
            ['nama_kategori' => 'Novel'],
            ['nama_kategori' => 'Komik'],
            ['nama_kategori' => 'Biografi'],
            ['nama_kategori' => 'Sejarah'],
            ['nama_kategori' => 'Teknologi'],
            ['nama_kategori' => 'Sains'],
            ['nama_kategori' => 'Sastra'],
            ['nama_kategori' => 'Agama'],
            ['nama_kategori' => 'Umum']
        ];

        foreach ($categories as $category) {
            \App\Kategori::create($category);
        }
    }
}
