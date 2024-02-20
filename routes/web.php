<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\SiswaController;
// use App\Http\Controllers\PembayaranController;
// use App\Http\Controllers\SessionController;

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

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'create')->name('register.create');
    Route::post('/register', 'store')->name('register.store');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login.login');
    Route::post('/authenticate', 'authenticate')->name('login.authenticate');
    Route::post('/logout', 'logout')->name('login.logout');
});

// Route::controller(DashboardController::class)->group(function () {
//     Route::get('/dashboard/petugas', 'petugas')->name('dashboard.petugas');
//     Route::get('/dashboard/admin', 'admin')->name('dashboard.admin');
// });

Route::middleware(['can:manage_petugas'])->group(function () {
    Route::get('/dashboard/petugas', [DashboardController::class, 'petugas'])->name('dashboard.petugas');
});

Route::middleware(['can:manage_admin'])->group(function () {
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');

    Route::resource('spp', SppController::class)->parameters([
        'spp' => 'spp'
    ]);

    Route::resource('kelas', KelasController::class)->parameters([
        'kelas' => 'kelas'
    ]);
    
    Route::resource('petugas', PetugasController::class)->parameters([
        'petugas' => 'petugas'
    ]);
});