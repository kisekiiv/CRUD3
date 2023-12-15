<?php

use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\EkspektasiController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\KondisiKlinisController;
use App\Http\Controllers\KriteriaHasilController;
use App\Http\Controllers\LuaranController;
use App\Http\Controllers\PenyebabController;

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
Route::get('/', function () {
    return view('layouts.home');
});
Route::get('/home', function () {
    return view('layouts.home');
});
Route::get('/contact', function () {
    return view('layouts.contact');
});
Route::get('/about', function () {
    return view('layouts.about');
});
Route::get('/login', function () {
    return view('komponen.login');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard',["title"=>"Dashboard"]);
});

// Input Data
Route::get('diagnosa/tambah', function () {
    return view('diagnosa.tambah',["title"=>"Tambah Data"]);
});
Route::get('gejala/tambah', function () {
    return view('gejala.tambah',["title"=>"Tambah Data"]);
});
Route::get('penyebab/tambah', function () {
    return view('penyebab.tambah',["title"=>"Tambah Data"]);
});
Route::get('kondisiKlinis/tambah', function () {
    return view('kondisi_klinis.tambah',["title"=>"Tambah Data"]);
});
Route::get('luaran/tambah', function () {
    return view('luaran.tambah',["title"=>"Tambah Data"]);
});
Route::get('ekspektasi/tambah', function () {
    return view('ekspektasi.tambah',["title"=>"Tambah Data"]);
});
Route::get('kriteriaHasil/tambah', function () {
    return view('kriteria_hasil.tambah',["title"=>"Tambah Data"]);
});
Route::resource('diagnosa',DiagnosaController::class);
Route::resource('gejala',GejalaController::class);
Route::resource('penyebab',PenyebabController::class);
Route::resource('kondisiKlinis',KondisiKlinisController::class);
Route::resource('luaran',LuaranController::class);
Route::resource('ekspektasi',EkspektasiController::class);
Route::resource('kriteriaHasil',KriteriaHasilController::class);
