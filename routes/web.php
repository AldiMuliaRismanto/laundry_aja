<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceTypeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Auth\AuthController;

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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');


Route::middleware('auth','admin')->group(function () {
    Route::get('dashboard', [AuthController::class, 'dashboard']);

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');




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
});

Route::controller(ServiceTypeController::class)->name('Laundry.')->group(function () {
    Route::get('/Laundry', 'getLaundry')->name('getLaundry');
    Route::get('/Laundry/tambahLaundry', 'tambahLaundry')->name('tambahLaundry');
    Route::post('/Laundry/addLaundry', 'addLaundry')->name('addLaundry');
});

Route::controller(TransactionController::class)->name('Transaksi.')->group(function () {
    Route::get('/Transaksi', 'getTransaksi')->name('getTransaksi');
    Route::get('/Transaksi/tambahTransaksi', 'tambahTransaksi')->name('tambahTransaksi');
    Route::post('/Transaksi/addTransaksi', 'addTransaksi')->name('addTransaksi');
});


});