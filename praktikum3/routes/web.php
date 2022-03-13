<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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
Route::get('/home', function () {
    return view('halaman_home');
});
/*Route::get('/mahasiswa', function () {
    return view::make('mahasiswa');
});*/
/*Route::get('/mahasiswa', function () {
    return view('kampus.mahasiswa');
});*/
Route::get('/mahasiswa', function () {
    return view('kampus.mahasiswa',["mahasiswa01"=> "Maulana Sultansyah"]);
});