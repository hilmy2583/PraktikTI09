<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekKesehatanController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ForminputController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProdukLaravelController;

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
    return view('welcome');
});

//Pertemuan8
Route::get('/kabar', function () {
    return view('Pertemuan8/kondisi');
});

Route::get('/nilai', function () {
    return view('Pertemuan8/nilai');
});

Route::get('/cekkesehatan', [CekKesehatanController::class, 'index']);
Route::get('/hasilcek', [CekKesehatanController::class, 'store']);

//Pertemuan9
Route::get('/form', [FormController::class, 'index']);
Route::post('/hasil', [FormController::class, 'store']);

Route::get('/input', [ForminputController::class, 'index']);
Route::get('/input', [ForminputController::class, 'array']);
Route::post('/tes', [ForminputController::class, 'store']);

//Pertemuan10
//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //buat route produk
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
});

Route::prefix('frontend')->group(function () {
    Route::get('/home', [FrontendController::class, 'index'])->name('home');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
});

//Pertemuan11
Route::prefix('adminla')->group(function () {
    Route::get('/produk', [ProdukLaravelController::class, 'index'])->name('produk');
    Route::get('/kategori', [KategoriLaravelController::class, 'index'])->name('kategori');
});