<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $fillable = [
        'nama_kategori'
    ];

    public function artikel()
    {
        return $this->hasMany('App\Artikel');
    }

    public function etube()
    {
        return $this->hasMany('App\Etube');
    }

    public function ebook()
    {
        return $this->hasMany('App\Ebook');
    }
}
