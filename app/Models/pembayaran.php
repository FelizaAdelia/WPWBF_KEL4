<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayarans';
    protected $primaryKey = 'id_bayar';
    protected $fillable = [
        'id_user', 'id_pembelian', 'waktu_bayar', 'status_bayar',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user', 'id_user');
    }

    public function pembelian()
    {
        return $this->belongsTo('App\Pembelian', 'id_pembelian', 'id_pembelian');
    }
}
