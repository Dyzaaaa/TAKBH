<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Apt\DataKunjunganController;
use App\Http\Controllers\Apt\InventarisController;
use App\Http\Controllers\Apt\KasirController;
use App\Http\Controllers\Apt\KeuanganController;
use App\Http\Controllers\Dok\JadwalController;
use App\Http\Controllers\Dok\DataPasienController;

Route::get('/', [AuthController::class, 'showLoginForm']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/apoteker/dashboard',[DashboardController::class,'apotekerDashboard']);
Route::get('/dokter/dashboard',[DashboardController::class,'dokterDashboard']);

Route::get('/dokter/data',[DataKunjunganController::class,'dokDataKunjungan']);
Route::get('/dokter/data/resep/{pasien_id}',[DataKunjunganController::class,'resepDokter'])->name('dokter.dakun-resep');

Route::prefix('apoteker/data')->group(function(){
    Route::get('/',[DataKunjunganController::class,'aptDataKunjungan'])->name('apoteker.data');
    Route::get('/data-tambah',[DataKunjunganController::class,'aptDaKunCreate'])->name('apoteker.dakun-tambah');
    Route::post('/',[DataKunjunganController::class,'aptDaKunStore'])->name('apoteker.aptDaKunStore');
    Route::get('/data-edit/{pasien_id}', [DataKunjunganController::class, 'aptDaKunEdit'])->name('apoteker.dakun-edit');
    Route::put('/data-edit/update/{pasien_id}', [DataKunjunganController::class, 'aptDaKunUpdate'])->name('apoteker.aptDaKunUpdate');
    Route::delete('/data-edit/delete/{pasien_id}', [DataKunjunganController::class, 'aptDaKunDelete'])->name('apoteker.aptDaKunDelete');
    Route::get('/checklist-resep/{pasien_id}',[DataKunjunganController::class,'resepKunjungan'])->name('apoteker.dakun-resep');
});

Route::prefix('apoteker/inventaris')->group(function(){
    Route::get('/',[InventarisController::class,'inventaris'])->name('apoteker.inventaris');
    Route::get('/inven-tambah',[InventarisController::class,'aptDaBatCreate'])->name('apoteker.inven-tambah');
    Route::post('/',[InventarisController::class,'aptDaBatStore'])->name('apoteker.aptDaBatStore');
    Route::get('/inven-edit/{obat_id}',[InventarisController::class, 'aptDaBatEdit'])->name('apoteker.inven-edit');
    Route::put('/inven-edit/update/{obat_id}',[InventarisController::class, 'aptDaBatUpdate'])->name('apoteker.aptDaBatUpdate');
    Route::delete('/inven-edit/delete/{obat_id}',[InventarisController::class, 'aptDaBatDelete'])->name('apoteker.aptDaBatDelete');
});

Route::prefix('apoteker/kasir')->group(function(){
    Route::get('/',[KasirController::class,'Kasir'])->name('apoteker.kasir');
    Route::get('/kasir-tambah',[KasirController::class,'kasirCreate'])->name('apoteker.kasir-tambah');
    Route::post('/',[KasirController::class,'kasirStore'])->name('apoteker.kasirStore');
    Route::get('/kasir-edit/{order_id}', [KasirController::class, 'kasirEdit'])->name('apoteker.kasir-edit');
    Route::put('/kasir-edit/update/{order_id}', [KasirController::class, 'kasirUpdate'])->name('apoteker.kasirUpdate');
    Route::delete('/delete/{order_id}',[KasirController::class, 'kasirDelete'])->name('apoteker.kasirDelete');
});

Route::get('/apoteker/keuangan',[KeuanganController::class,'keuangan']);
Route::get('/dokter/jadwal',[JadwalDokterController::class,'jadwal']);
Route::get('/dokter/datapasien',[DataPasienController::class,'dataPasien']);

Route::get('/dokter/jadwal', function () {
    return view('dokter.jadwal');
})->name('dokter.jadwal');

Route::get('/dokter/rekammedis', function () {
    return view('dokter.rekammedis');
})->name('dokter.rekammedis');

Route::get('/dokter/resep', function () {
    return view('dokter.resep');
})->name('dokter.resep');

Route::get('/apoteker/pembelian', function () {
    return view('apoteker.pembelian');
})->name('apoteker.pembelian');

Route::get('/apoteker/pemesanan', function () {
    return view('apoteker.pemesanan');
})->name('apoteker.pemesanan');

Route::get('/apoteker/tabelpemasukan', function () {
    return view('apoteker.tabelpemasukan');
})->name('apoteker.tabelpemasukan');

Route::get('/apoteker/tabelpengeluaran', function () {
    return view('apoteker.tabelpengeluaran');
})->name('apoteker.tabelpengeluaran');

Route::get('/apoteker/tambahpemasukan', function () {
    return view('apoteker.tambahpemasukan');
})->name('apoteker.tambahpemasukan');

Route::get('/apoteker/tambahpengeluaran', function () {
    return view('apoteker.tambahpengeluaran');
})->name('apoteker.tambahpengeluaran');
