<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    public function transaksi ()
    {
        return $this->hasMany(Transaksi::class);
    }
    protected $fillable = [
        'no_polisi',
        'jenis',
        'warna'
    ];
}