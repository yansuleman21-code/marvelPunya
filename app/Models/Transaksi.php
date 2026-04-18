<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Transaksi extends Model
{
    protected $fillable = [
        'kode_transaksi',
        'tanggal',
        'kendaraan',
        'plat_nomor',
        'tarif_id',
        'durasi_jam',
        'total_harga',
        'metode_bayar'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {

            DB::transaction(function () use ($model) {

                $tanggal = now()->format('Ymd');

                $last = DB::table('transaksis')
                    ->whereDate('created_at', now())
                    ->orderBy('id', 'desc')
                    ->lockForUpdate()
                    ->first();

                if ($last && $last->kode_transaksi) {
                    $lastNumber = (int) substr($last->kode_transaksi, -4);
                    $no = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
                } else {
                    $no = '0001';
                }

                $model->kode_transaksi = "TRX-$tanggal-$no";
            });
        });
    }
}