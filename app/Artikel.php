<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $foreignKey = 'id_kategori';
    protected $table = 'artikel';
    protected $fillable = ['judul', 'deskripsi', 'cover', 'imgsatu', 'imgdua', 'author', 'views', 'id_kategori'];

    public function ketegori()
    {
        return $this->belongsTo('App\Kategori');
    }
}
