<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SatuController;
use App\Http\Controllers\DuaController;
use App\Http\Controllers\TigaController;
use App\Http\Controllers\EmpatController;
use App\Http\Controllers\LimaController;
use App\Http\Controllers\EnamController;
use App\Http\Controllers\TujuhController;
use App\Http\Controllers\DelapanController;
use App\Http\Controllers\SembilanController;
use App\Http\Controllers\SepuluhController;

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
    return view('welcome');
});

// Route::get('/profil', function () {
//     echo 'halo, nama saya wiwit';
// });

Route::get('/profil', [ProfileController::class, 'awal']);

//=============>10 ROUTE TANPA CONTROLLER<==============
//route 1
Route::get('/home', function () {
    echo 'halo, selamat datang';
});

//route 2
Route::get('biodata', function () {
    echo 'Ini halaman biodata';
});

//route 3
Route::get('/biodata/nama', function () {
    echo 'Nama saya Wiwit Selasti :)';
});

//route 4
Route::get('/biodata/npm', function () {
    echo 'NPM saya G1A020025';
});

//route 5
Route::get('/biodata/kelas', function () {
    echo 'Saya kelas A';
});

//route 6
Route::get('/biodata/hobi', function () {
    echo 'Saya hobinya turu hhh';
});

//route 7
Route::get('/biodata/alamat', function () {
    echo 'Rumah orang tua :D';
});

//route 8
Route::get('/biodata/ttl', function () {
    echo 'Lupa :(';
});

//route 9
Route::get('/biodata/makanan-favorit', function () {
    echo 'Nasi';
});

//route 10
Route::get('/route-10', function () {
    echo 'ini route terakhir';
});


//MENGHUBUNGKAN CONTROLLER KE ROUTE Web.php
Route::get('/controller-1', [SatuController::class, 'w']);
Route::get('/controller-2', [DuaController::class, 'w']);
Route::get('/controller-3', [TigaController::class, 'w']);
Route::get('/controller-4', [EmpatController::class, 'w']);
Route::get('/controller-5', [LimaController::class, 'w']);
Route::get('/controller-6', [EnamController::class, 'w']);
Route::get('/controller-7', [TujuhController::class, 'w']);
Route::get('/controller-8', [DelapanController::class, 'w']);
Route::get('/controller-9', [SembilanController::class, 'w']);
Route::get('/controller-10', [SepuluhController::class, 'w']);
