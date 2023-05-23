<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekKesehatanController;
use App\Http\Controllers\FormController;

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

Route::get('/kabar', function () {
    return view('Pertemuan8/kondisi');
});

Route::get('/nilai', function () {
    return view('Pertemuan8/nilai');
});

Route::get('/cekkesehatan', [CekKesehatanController::class, 'index']);
Route::get('/hasilcek', [CekKesehatanController::class, 'store']);

Route::get('/form', [FormController::class, 'index']);
Route::post('/hasil', [FormController::class, 'store']);
