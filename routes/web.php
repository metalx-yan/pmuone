<?php

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


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:administrator']], function() {

    Route::get('/', function () {

        return view('admin.index');
    });

    Route::resource('order', 'OrderController');
    Route::resource('supplier', 'SupplierController');
    Route::resource('bahanbaku', 'BahanBakuController');
    Route::resource('pembelian', 'PembelianController');
    Route::resource('transaksi', 'TransaksiController');
});

Route::group(['prefix' => 'purchasing', 'middleware' => ['auth', 'role:purchasing']], function() {

    Route::get('/', function () {
        return view('purchasing.indux');
    });

});

Route::group(['prefix' => 'manager', 'middleware' => ['auth', 'role:manager']], function() {

    Route::get('/', function () {
        return view('manager.index');
    });
});


Route::get('/', function () {

    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



