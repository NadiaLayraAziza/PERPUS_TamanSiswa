<?php

use App\Http\Controllers\KatalogController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('Admin.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('anggota', AnggotaController::class);
// Route::get('/cari', [AnggotaController::class,'cari'])->name('Anggota.cari');;
Route::resource('buku', BukuController::class);
Route::resource('transaksi', TransaksiController::class);
Route::prefix('siswa')->group(function () {
    Route::get('/{nis}', [SiswaController::class,'index'])->name('siswa.index');
    Route::get('/edit/{nis}', [SiswaController::class,'edit'])->name('siswa.edit');
    Route::put('/edit/{nis}', [SiswaController::class,'update'])->name('siswa.update');
    Route::get('/{nis}/riwayat', [SiswaController::class,'show'])->name('siswa.show');
    Route::get('/{nis}/katalog', [SiswaController::class, 'katalog'])->name('siswa.katalog');
});
// Route::get('/katalog', [KatalogController::class,'katalog']);

Route::prefix('laporan')->group(function () {
    Route::get('/', [LaporanController::class,'index']);
    // Route::get('/cetak_buku', function () {
    //     return view('admin.laporan.buku_pdf');
    // });
    Route::get('/cetak_buku', [LaporanController::class,'cetak_buku'])->name('laporan.buku');
    Route::get('/cetak_anggota', [LaporanController::class,'cetak_anggota'])->name('laporan.anggota');
    Route::get('/cetak_transaksi', [LaporanController::class,'cetak_transaksi'])->name('laporan.transaksi');
});

Route::get('/tambah', function () {
    return view('Admin.Anggota.tes');
});
