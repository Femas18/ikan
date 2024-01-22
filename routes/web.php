<?php

use App\Http\Controllers\mainikan;
use App\Http\Controllers\Kontak; 
use Illuminate\Support\Facades\Request;
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
    return view('welcome');
});

//kontak
// Gantilah dengan nama controller yang sesuai

Route::get('kontak', [Kontak::class, 'kontak']);
//barang
Route::get('tambah_ikan', [mainikan::class, 'tambah_ikan']);

Route::get('formikan', function(){
    return view('formikan');
});

Route::post('tambahformikan', [mainikan::class, 'tambah_ikan']);

Route::get('lihat_ikan', [mainikan::class, 'lihat_ikan'])->middleware("auth");
Route::get('hapus_ikan/{id}', [mainikan::class, 'hapus_ikan']);
Route::get('update_ikan/{id}', [mainikan::class, 'edit_ikan']);
Route::post('update_ikan/{id}', [mainikan::class, 'update_ikan']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
