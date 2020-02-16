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

// Route::get('/score', function () {
//     return view('scoreboard');
// });

Route::get('/menu_ujian', function () {
    return view('menu_ujian');
});

Route::get('/ujian_besar', function () {
    return view('ujian_besar');
});

Route::get('/ujian_kecil', function () {
    return view('ujian_kecil');
});

Route::get('/ujian_angka', function () {
    return view('ujian_angka');
});

Route::get('/menu_utama', function () {
    return view('menu_utama');
});



Route::get('/score','score@index');
Route::post('/score/store','score@store');


