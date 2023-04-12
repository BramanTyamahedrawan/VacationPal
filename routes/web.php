<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\LunasController;
use App\Http\Controllers\BayarDitempatController;
use App\Http\Controllers\BatalController;


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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pesan_tiket', function () {
    return view('pesan_tiket');
})->name('pesan_tiket');

Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');

Route::get('/tiket', [TiketController::class, 'index'])->name('tiket');

Route::get('/lunas', [LunasController::class, 'index'])->name('lunas');

Route::get('/bayar_ditempat', [BayarDitempatController::class, 'index'])->name('bayar_ditempat');

Route::get('/batal', [BatalController::class, 'index'])->name('batal');
