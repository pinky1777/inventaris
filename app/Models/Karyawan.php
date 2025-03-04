<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $fillable = ['nama', 'jenis_kelamin', 'alamat', 'tanggal_lahir', 'posisi', 'gaji', 'tanggal_masuk'];

    public function divisi() {
        return $this->belongsTo(Divisi::class, 'posisi');
    }

    public function peminjaman() {
        return $this->hasMany(Peminjaman::class, 'karyawan_id');
    }

    public function maintenance() {
        return $this->hasMany(Maintenance::class, 'teknisi_id');
    }

    public function logAktivitas() {
        return $this->hasMany(LogAktivitas::class, 'karyawan_id');
    }
}
