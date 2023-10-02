<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriEbook extends Model
{
    protected $table = 'kategori_ebooks';
    protected $primaryKey = 'id_kategori';
    protected $fillable = [
        'nama_kategori',
    ];

    public function ebooks()
    {
        return $this->hasMany('App\Ebook', 'id_kategori', 'id_kategori');
    }
}
