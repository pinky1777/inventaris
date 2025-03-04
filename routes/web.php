<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//ROUTE BARANG
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index'); // Menambahkan route untuk index barang 
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create'); // Menambahkan route untuk create barang
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store'); // Menambahkan route untuk store barang
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit'); // Menambahkan route untuk edit barang 
Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');     // Menambahkan route untuk update barang
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy'); // Menambahkan route untuk delete barang
Route::get('/barang/{id}', [BarangController::class, 'show'])->name('barang.show'); // Menambahkan route untuk show barang