<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceTypeController;
use App\Http\Controllers\TransactionController;

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

Route::controller(CustomerController::class)->name('Customer')->group(function () {
    Route::get('/customer', 'getcustomer')->name('getcustomer');
    Route::get('/customer/tambahcustomer', 'tambahcustomer')->name('tambahcustomer');
    Route::post('/customer/addcustomer', 'addcustomer')->name('addcustomer');
});

Route::controller(ServiceTypeController::class)->name('Laundry')->group(function () {
    Route::get('/Laundry', 'getLaundry')->name('getLaundry');
    Route::get('/Laundry/tambahLaundry', 'tambahLaundry')->name('tambahLaundry');
    Route::post('/Laundry/addLaundry', 'addLaundry')->name('addLaundry');
});

Route::controller(TransactionController::class)->name('Transaksi')->group(function () {
    Route::get('/Transaksi', 'getTransaksi')->name('getTransaksi');
    Route::get('/Transaksi/tambahTransaksi', 'tambahTransaksi')->name('tambahTransaksi');
    Route::post('/Transaksi/addTransaksi', 'addTransaksi')->name('addTransaksi');
});