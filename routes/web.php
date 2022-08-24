<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RiviewController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ManggaraController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\ManggaraiController;

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



Route::get('/', [FrontendController::class, 'index'] );
Route::get('/detail/{id}', [FrontendController::class, 'detail'] );
Route::post('tambah-riview', [RiviewController::class, 'insert'] );

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






Route::group(['middleware' => ['auth','isAdmin']], function () {
  
    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::get('tambah-kategori', [KategoriController::class, 'create']);
    Route::Post('insert-kategori', [KategoriController::class, 'store']);
 
    Route::get('wisata-manggarai', [ManggaraController::class, 'index']);
    Route::get('tambah-manggarai', [ManggaraController::class, 'create']);
    Route::Post('insert-manggarai', [ManggaraController::class, 'store']);
    Route::get('edit-manggarai/{id}', [ManggaraController::class, 'edit']);
    Route::put('update-manggarai/{id}', [ManggaraController::class, 'update']);
    Route::get('hapus-manggarai/{id}', [ManggaraController::class, 'hapus']);
  
    Route::get('/lihat-komentar/{id}', [RiviewController::class, 'lihatkomentar'] );
    Route::get('/hapus-komen/{id}', [RiviewController::class, 'hapuskomen'] );



 });