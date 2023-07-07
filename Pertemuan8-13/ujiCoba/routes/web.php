<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekKesehatanController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ForminputController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProdukLaravelController;
use App\Http\Controllers\PesananLaravelController;
use App\Http\Controllers\KategoriLaravelController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/after_register', function() {
    return view('after_register');
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

//Pertemuan11-12
// Route::prefix('adminla')->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'indexla'])->name('dashboard');
//     Route::get('/produk', [ProdukLaravelController::class, 'index'])->name('produk');
//     Route::prefix('produk')->group(function () {
//         Route::get('/create', [ProdukLaravelController::class, 'create'])->name('produk/create');
//         Route::post('/store', [ProdukLaravelController::class, 'store'])->name('produk/store');
//         Route::get('/edit/{id}', [ProdukLaravelController::class, 'edit'])->name('produk/edit');
//         Route::post('/update', [ProdukLaravelController::class, 'update'])->name('produk/update');
//         Route::get('/delete/{id}', [ProdukLaravelController::class, 'destroy'])->name('produk/delete');
//     });
//     Route::get('/kategori', [KategoriLaravelController::class, 'index'])->name('kategori');
//     Route::prefix('kategori')->group(function () {
//         Route::get('/create', [KategoriLaravelController::class, 'create'])->name('produk/create');
//         Route::post('/store', [KategoriLaravelController::class, 'store'])->name('produk/store');
//         Route::get('/edit/{id}', [KategoriLaravelController::class, 'edit'])->name('produk/edit');
//         Route::post('/update', [KategoriLaravelController::class, 'update'])->name('produk/update');
//         Route::get('/delete/{id}', [KategoriLaravelController::class, 'destroy'])->name('produk/delete');
//     });
//     Route::get('/pesanan', [PesananLaravelController::class, 'index'])->name('pesanan');
// });

//Pertemuan 13
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'peran:admin-manager']], function(){
    Route::prefix('adminla')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'indexla'])->name('dashboard');
        Route::get('/produk', [ProdukLaravelController::class, 'index'])->name('produk');
        Route::prefix('produk')->group(function () {
            Route::get('/create', [ProdukLaravelController::class, 'create'])->name('produk/create');
            Route::post('/store', [ProdukLaravelController::class, 'store'])->name('produk/store');
            Route::get('/edit/{id}', [ProdukLaravelController::class, 'edit'])->name('produk/edit');
            Route::post('/update', [ProdukLaravelController::class, 'update'])->name('produk/update');
            Route::get('/delete/{id}', [ProdukLaravelController::class, 'destroy'])->name('produk/delete');
        });
        Route::get('/kategori', [KategoriLaravelController::class, 'index'])->name('kategori');
        Route::prefix('kategori')->group(function () {
            Route::get('/create', [KategoriLaravelController::class, 'create'])->name('produk/create');
            Route::post('/store', [KategoriLaravelController::class, 'store'])->name('produk/store');
            Route::get('/edit/{id}', [KategoriLaravelController::class, 'edit'])->name('produk/edit');
            Route::post('/update', [KategoriLaravelController::class, 'update'])->name('produk/update');
            Route::get('/delete/{id}', [KategoriLaravelController::class, 'destroy'])->name('produk/delete');
        });
        Route::get('/pesanan', [PesananLaravelController::class, 'index'])->name('pesanan');
    });
});