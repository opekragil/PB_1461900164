<?php

use App\Http\Controllers\MahasiswaController;
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
    return view('home0164');
});

Route::get('/artikel', function () {
    return view('artikel0164');
});

Route::get('/kontak', function () {
    return view('kontak0164');
});
Route::resource('mahasiswa', MahasiswaController::class);