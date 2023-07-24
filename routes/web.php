<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index'] );

Route::controller(UserController::class)->name('Karyawan.')->group(function () {
    Route::get('/Karyawan', 'getKaryawan')->name('getKaryawan');
    Route::get('/Karyawan/tambahKaryawan', 'tambahKaryawan')->name('tambahkKaryawan');
    Route::post('/Karyawan/addKaryawan', 'addKaryawan')->name('addKaryawan');

});

    



