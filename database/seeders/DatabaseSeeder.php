<?php

namespace Database\Seeders;
//use Illuminate\Database\Seeder;
use App\Models\Kategori;
use App\Models\Divisi;
use App\Models\Karyawan;
use App\Models\Barang;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Maintenance;
use App\Models\LogAktivitas;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Buat data dummy
        //Kategori::factory(5)->create();
        Divisi::factory(3)->create();
        Karyawan::factory(10)->create();
        Barang::factory(20)->create();
        Peminjaman::factory(15)->create();
        Pengembalian::factory(10)->create();
       // Maintenance::factory(8)->create();
        LogAktivitas::factory(30)->create();
    }
}
