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

Route::get('/', function () {
    return view('welcome');
});

Route::get('testmodel', function () {
    $a=App\produk::all();
    $c=App\pengguna::all();
    $b=App\Pengaturan::all();
    return $a .'</br></br>'. $c.'</br></br>'. $b;
});

Route::get('produk', function () {
    $a=App\produk::all();
    return $a;
});

Route::get('pengguna', function () {
    $a=App\pengguna::all();
    return $a;
});

Route::get('pengaturan', function () {
    $b=App\Pengaturan::all();
    return $b;
});

Route::get('/test','MyController@percobaan');

Route::get('/test2','MyController@percobaan2');

Route::get('/test3','MyController@percobaan3');

Route::get('/test4','MyController@percobaan4');