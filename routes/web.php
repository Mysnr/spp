<?php

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
    return redirect()->route('login');
});

Route::get('/home', function () {
    return redirect()->route('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/siswa', \App\Http\Controllers\SiswaController::class);
    Route::resource('/kelas', \App\Http\Controllers\KelasController::class);
    Route::resource('/spp', \App\Http\Controllers\SppController::class);
    Route::resource('/pembayaran', \App\Http\Controllers\PembayaranController::class);
});
