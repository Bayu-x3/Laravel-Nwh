<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SessionController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('template.master');
});

Route::get('/grafik', function () {
    return view('grafik');
});

Route::resource('spp', SppController::class)->middleware('isLogin')->parameters([
    'spp' => 'spp'
]);

Route::resource('kelas', KelasController::class)->middleware('isLogin')->parameters([
    'kelas' => 'kelas'
]);

Route::resource('petugas', PetugasController::class)->middleware('isLogin')->parameters([
    'petugas' => 'petugas'
]);

Route::resource('siswa', SiswaController::class)->middleware('isLogin')->parameters([
    'siswa' => 'siswa'
]);

Route::resource('pembayaran', PembayaranController::class)->middleware('isLogin')->parameters([
    'pembayaran' => 'pembayaran'
]);

Route::get('/sesi', [SessionController::class, 'index'])->middleware('isUsers');
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::post('/sesi/login', [SessionController::class, 'login'])->middleware('isUsers');
Route::get('/sesi/register', [SessionController::class, 'register'])->middleware('isUsers');
Route::post('/sesi/create', [SessionController::class, 'create'])->middleware('isUsers');