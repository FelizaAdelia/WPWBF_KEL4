<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'pembelians';
    protected $primaryKey = 'id_pembelian';
    protected $fillable = [
        'id_user', 'id_ebook',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user', 'id_user');
    }

    public function ebook()
    {
        return $this->belongsTo('App\Ebook', 'id_ebook', 'id_ebook');
    }

    public function pembayaran()
    {
        return $this->hasOne('App\Pembayaran', 'id_pembelian', 'id_pembelian');
    }
}
