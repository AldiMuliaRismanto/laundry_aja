<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceTypeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ServiceController;

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

//Route::get('/', [HomeController::class, 'index'] );
Route::get('/', function () {
    return redirect()->to(route('Karyawan.getKaryawan'));
})->middleware('auth');

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
});
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

//Route Halaman Admin
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [AuthController::class, 'dashboard']);

    Route::controller(UserController::class)->name('Karyawan.')->group(function () {
        Route::get('/Karyawan', 'getKaryawan')->name('getKaryawan');
        Route::get('/Karyawan/tambahKaryawan', 'tambahKaryawan')->name('tambahkKaryawan');
        Route::post('/Karyawan/addKaryawan', 'addKaryawan')->name('addKaryawan');
        Route::delete('/Karyawan/deleteKaryawan/{user}', 'deleteKaryawan')->name('deleteKaryawan');
        Route::get('/Karyawan/editKaryawan/{user}', 'editKaryawan')->name('editKaryawan');
        Route::patch('/Karyawan/updateKaryawan/{user}', 'updateKaryawan')->name('updateKaryawan');
    });


    Route::controller(CustomerController::class)->name('Customer.')->group(function () {
        Route::get('/customer', 'getcustomer')->name('getcustomer');
        Route::get('/customer/tambahcustomer', 'tambahcustomer')->name('tambahcustomer');
        Route::post('/customer/addcustomer', 'addcustomer')->name('addcustomer');
        Route::delete('/customer/deletecustomer/{customer}', 'deletecustomer')->name('deletecustomer');
        Route::get('/customer/editcustomer/{customer}', 'editcustomer')->name('editcustomer');
        Route::patch('/customer/updatecustomer/{customer}', 'updatecustomer')->name('updatecustomer');
    });


    Route::controller(TransactionController::class)->name('Transaksi.')->group(function () {
        Route::get('/Transaksi', 'getTransaksi')->name('getTransaksi');
        Route::get('/Transaksi/tambahTransaksi', 'tambahTransaksi')->name('tambahTransaksi');
        Route::post('/Transaksi/addTransaksi', 'addTransaksi')->name('addTransaksi');
    });

    Route::controller(ServiceController::class)->name('Layanan.')->group(function () {
        Route::get('/Layanan', 'getLayanan')->name('getLayanan');
        Route::get('/Layanan/tambahLayanan', 'tambahLayanan')->name('tambahLayanan');
        Route::post('/Layanan/addLayanan', 'addLayanan')->name('addLayanan');
        Route::delete('Layanan/deleteLayanan/{service}', 'deleteLayanan')->name('deleteLayanan');
        Route::get('/Layanan/editLayanan/{service}', 'editLayanan')->name('editLayanan');
        Route::patch('/Layanan/updateLayanan/{service}', 'updateLayanan')->name('Layanan');
    });
});


//Route Halaman Kasir
