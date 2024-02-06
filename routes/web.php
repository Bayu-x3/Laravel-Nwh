<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('template.master');
});

Route::get('/grafik', function () {
    return view('grafik');
});

// Bagian Spp
Route::get('/spp', [SppController::class, 'index'])->name('spp.index');
Route::get('/spp/create', [SppController::class, 'create'])->name('spp.create');
Route::post('/spp', [SppController::class, 'store'])->name('spp.store');

Route::get('/spp/{id}', [SppController::class, 'show'])->name('spp.show');

Route::get('/spp/{id}/edit', [SppController::class, 'edit'])->name('spp.edit');
Route::put('/spp/{id}', [SppController::class, 'update'])->name('spp.update');

Route::delete('/spp/{id}', [SppController::class, 'destroy'])->name('spp.destroy');
// End Spp

// Bagian Kelas
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');

Route::get('/kelas/{id}', [KelasController::class, 'show'])->name('kelas.show');

Route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
Route::put('/kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');

Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');
// End Kelas

//Bagian Petugas
Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.index');
Route::get('/petugas/create', [PetugasController::class, 'create'])->name('petugas.create');
Route::post('/petugas', [PetugasController::class, 'store'])->name('petugas.store');

Route::get('/petugas/{id}', [PetugasController::class, 'show'])->name('petugas.show');

Route::get('/petugas/{id}/edit', [PetugasController::class, 'edit'])->name('petugas.edit');
Route::put('/petugas/{id}', [PetugasController::class, 'update'])->name('petugas.update');

Route::delete('/petugas/{id}', [PetugasController::class, 'destroy'])->name('petugas.destroy');
//End Petugas

//Bagian Siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');