<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'nama_user', 'email_user', 'email_verified_at', 'password_user',
    ];

    public function pembelians()
    {
        return $this->hasMany('App\Pembelian', 'id_user', 'id_user');
    }

    public function pembayarans()
    {
        return $this->hasMany('App\Pembayaran', 'id_user', 'id_user');
    }
}
