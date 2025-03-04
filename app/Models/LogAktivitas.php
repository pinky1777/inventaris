<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogAktivitas extends Model
{
    use HasFactory;
    protected $table = 'log_aktivitas';
    protected $fillable = ['karyawan_id', 'aktivitas'];

    public function karyawan() {
        return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }
}
