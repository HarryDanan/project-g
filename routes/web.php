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
    return view('index');
});

Route::get('/latihan', function () {
    return view('latihan');
});
Route::get('/latihanbesar', function () {
    return view('latihanbesar');
});

Route::get('/latihan_kecil', function () {
    return view('latihan_kecil');
});
Route::get('/latihan_angka', function () {
    return view('latihan_angka');
});
Route::get('/menu', function () {
    return view('menu');
});

Route::get('/ujian', function () {
    return view('ujian');
});

Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('/instruksi', function () {
    return view('instruksi');
});