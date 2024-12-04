# SIM PERPUSTAKAAN WIKRAMA

Sistem Informasi Manajemen Perpustakaan untuk SMK Wikrama. Aplikasi ini memungkinkan pengelolaan buku, e-book, video pembelajaran, dan artikel perpustakaan secara digital.

## Persyaratan Sistem

-   PHP >= 7.2.5
-   MySQL/MariaDB
-   Composer
-   Node.js & NPM (untuk asset compilation)
-   Git

## Cara Instalasi

1. Clone repository ini

```bash
git clone https://github.com/yourusername/SIM-PERPUSTAKAAN-WIKRAMA.git
cd SIM-PERPUSTAKAAN-WIKRAMA
```

2. Install dependensi PHP menggunakan Composer

```bash
composer install
```

3. Salin file .env.example menjadi .env

```bash
cp .env.example .env
```

4. Generate application key

```bash
php artisan key:generate
```

5. Konfigurasi database di file .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=username_database
DB_PASSWORD=password_database
```

6. Jalankan migrasi dan seeder database

```bash
php artisan migrate:fresh --seed
```

7. Jalankan development server

```bash
php artisan serve
```

## Fitur Aplikasi

-   Manajemen Buku dan E-book
-   Video Pembelajaran (E-tube)
-   Artikel Perpustakaan
-   Sistem Kategori
-   Manajemen User
-   Statistik Pengunjung

## Akun Default

Setelah menjalankan seeder, Anda dapat login menggunakan akun default:

-   Email: admin@gmail.com
-   Password: (sesuai yang ada di UsersTableSeeder)

## Struktur Database

Aplikasi ini menggunakan beberapa tabel utama:

-   users: Menyimpan data pengguna
-   kategoris: Kategori untuk buku dan konten
-   ebook: Koleksi e-book
-   etube: Video pembelajaran
-   artikel: Artikel perpustakaan
-   email: Pesan masuk/kontak

## Kontribusi

Jika Anda ingin berkontribusi pada project ini, silakan buat pull request atau laporkan issue yang Anda temukan.

## Lisensi

[MIT License](LICENSE)

## Kontak

Jika Anda memiliki pertanyaan, silakan hubungi:

-   Email: neddy1298@gmail.com

![Screenshot (84)](https://user-images.githubusercontent.com/45587433/73154356-b6773c00-4109-11ea-967a-b21424587eb4.png)
![Dashboard](https://user-images.githubusercontent.com/45587433/73154370-c131d100-4109-11ea-94af-ee889fcf36af.png)
