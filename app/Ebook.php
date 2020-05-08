<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    protected $foreignKey = 'id_kategori';
    protected $table = 'ebook';
    protected $fillable = ['judul', 'isbn', 'pengarang', 'penerbit', 'jumlah_halaman', 'deskripsi', 'cover', 'tahun_terbit', 'id_kategori', 'views'];

    public function ketegori()
    {
        return $this->belongsTo('App\Kategori');
    }
}
