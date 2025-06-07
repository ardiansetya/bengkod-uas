<?php

use App\Http\Controllers\dokter\JadwalPeriksaController;
use App\Http\Controllers\dokter\PeriksaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // dokter
    Route::middleware(['role:dokter'])->prefix('dokter')->group(function () {
        Route::resource('/jadwal-periksa', controller: JadwalPeriksaController::class)->names(names: 'dokter.jadwal-periksa');

        Route::resource('/periksa', controller: PeriksaController::class)->names(names: 'dokter.periksa');
        // Route::resource('/periksa', PeriksaController::class)->names(names: 'dokter.periksa');
        // Route::resource('/riwayat', PeriksaController::class)->names(names: 'dokter.riwayat');

    });

    // pasien
    Route::middleware(['role:pasien'])->prefix('pasien')->group(function () {
        Route::get('/dashboard', function () {
            return view('pasien.dashboard');
        })->name('pasien.dashboard');
        // Route::resource('/periksa', PeriksaPasienController::class)->names(names: 'pasien.periksa');
        // Route::resource('/riwayat', RiwayatPasienController::class)->names(names: 'pasien.riwayat');
    });
});



// pasien


require __DIR__.'/auth.php';
