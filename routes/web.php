<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\LunasController;
use App\Http\Controllers\BayarDitempatController;
use App\Http\Controllers\BatalController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\BayarDitempatAdminController;
use App\Http\Controllers\LunasAdminController;
use App\Http\Controllers\BatalAdminController;
use App\Http\Controllers\PesanTiketController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\RegisterController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Illuminate\Auth\Events\Registered;
use Laravel\Fortify\Features;
use Illuminate\Support\Facades\RateLimiter;
use Laravel\Fortify\Fortify;

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

// Auth::routes();
// Auth::routes();

Route::get('/', function () {
    return view('home');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');
    Route::get('/forgot-password', function () {
        return view('auth.passwords.email');
    })->name('password.request');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home_admin', [HomeAdminController::class, 'index'])->name('home_admin');
    Route::get('/batal_admin', [BatalAdminController::class, 'index'])->name('batal_admin');
    Route::delete('/batal_admin/{id}', [BatalAdminController::class, 'destroy'])->name('batal_admin.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/pesan_tiket', [PesanTiketController::class, 'index'])->name('pesan_tiket');
    Route::post('/pesan_tiket', [PesanTiketController::class, 'store'])->name('pesan_tiket.store');
    Route::get('/tiket', [TiketController::class, 'index'])->name('tiket');
    Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');
    Route::get('/lunas', [LunasController::class, 'index'])->name('lunas');
    Route::get('/bayar_ditempat', [BayarDitempatController::class, 'index'])->name('bayar_ditempat');
    Route::get('/batal', [BatalController::class, 'index'])->name('batal');
    Route::delete('/batal/{id}', [BatalController::class, 'destroy'])->name('batal.destroy');
    Route::get('/request', [RequestController::class, 'index'])->name('request');
    Route::get('/bayar_ditempat_admin', [BayarDitempatAdminController::class, 'index'])->name('bayar_ditempat_admin');
    Route::get('/lunas_admin', [LunasAdminController::class, 'index'])->name('lunas_admin');
    Route::get('/cek_tiket', function () {
        return view('cek_tiket');
    })->name('cek_tiket');
    Route::get('/detail', [DetailController::class, 'index'])->name('detail.index');
    Route::get('/detail/{id}', [DetailController::class, 'show'])->name('detail.show');
});
