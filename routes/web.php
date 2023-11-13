<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminzController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FotoProdukController;
use App\Http\Controllers\FotoTentangController;
use App\Http\Controllers\FotoUnggulanController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingController::class, 'index'])->name('landing.index');

// Route Admin->untuk tes halaman saja
// Route::get('/unggulan', [AdminController::class, 'unggulan'])->name('unggulan');
// Route::get('/tentang', [AdminController::class, 'tentang'])->name('tentang');
// Route::get('/form', [AdminController::class, 'form'])->name('form');


// Route Unggulan
Route::get('/unggulan', [FotoUnggulanController::class, 'index'])->name('unggulan.index');
Route::Post('/unggulan', [FotoUnggulanController::class, 'store'])->name('unggulan.store');
Route::get('/hapus.unggulan/{id}', [FotoUnggulanController::class, 'destroy'])->name('hapus.unggulan');

// Route Tentang
Route::get('/tentang', [FotoTentangController::class, 'index'])->name('tentang.index');
Route::Post('/tentang', [FotoTentangController::class, 'store'])->name('tentang.store');
Route::get('/delete-gambar/{id}', [FotoTentangController::class, 'destroy'])->name('delete-gambar');

// Route Form
route::Post('/', [FormController::class, 'store'])->name('form.store');
route::get('/form', [FormController::class, 'index'])->name('form.index');
route::get('/hapus/{id}', [FormController::class, 'destroy'])->name('hapus');

// Route Produk
route::Post('/produk', [FotoProdukController::class, 'store'])->name('produk.store');
route::get('/produk', [FotoProdukController::class, 'index'])->name('produk.index');
route::get('/hapus.produk/{id}', [FotoProdukController::class, 'destroy'])->name('hapus.produk');

// Route Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::Post('/login', [AuthController::class, 'login']);
Route::Post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/tentang', [FotoTentangController::class, 'index'])->name('tentang.index');
        route::get('/produk', [FotoProdukController::class, 'index'])->name('produk.index');
        Route::get('/unggulan', [FotoUnggulanController::class, 'index'])->name('unggulan.index');
        route::get('/form', [FormController::class, 'index'])->name('form.index');
    });
});
