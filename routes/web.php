<?php
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layouts.front');
   });

Auth::routes();


   Route::get('tes', function () {
    return view('layouts.front');
   });

Route::group(['prefix' => 'admin', 'middleware' => ['auth', isAdmin::class]], function () {
    Route::get('admin', function () {
        return view('layouts.admin');
    });


Route::resource('kategori', App\Http\Controllers\KategoriController::class);
Route::resource('produk', App\Http\Controllers\ProdukController::class);
Route::resource('order_item', App\Http\Controllers\OrderitemController::class);
Route::resource('user', App\Http\Controllers\UserController::class);
Route::resource('order', App\Http\Controllers\OrderController::class);
Route::resource('transaksi', App\Http\Controllers\TransaksiController::class);



});
