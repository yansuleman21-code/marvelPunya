<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    // public function transaksi()
    // {
    //     return $this->hasMany(Transaksi::class);
    // }

    protected $fillable = [
        'jenis_kendaraan',
        'harga'
    ];
}
