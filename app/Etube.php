<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etube extends Model
{
    protected $foreignKey = 'id_kategori';
    protected $table = 'etube';
    protected $fillable = ['judul', 'link', 'deskripsi', 'author', 'id_kategori', 'views'];

    public function ketegori()
    {
        return $this->belongsTo('App\Kategori');
    }
}
