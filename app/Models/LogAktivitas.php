<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogAktivitas extends Model
{
    protected $table = 'log_aktivitas'; // Pastikan nama tabel benar
    protected $fillable = ['user_id', 'aktivitas', 'waktu'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}