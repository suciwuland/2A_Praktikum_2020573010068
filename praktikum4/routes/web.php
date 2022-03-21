<?php

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
// Route::get('/mahasiswa', function () {
//     $nama='Suci Wulan Dari';
//     $nilai=75;
//     return view('mahasiswa',compact('nama','nilai'));
// });
// Route::get('/mahasiswa', function () {
//     $nama='<u>Suci Wulan Dari </u>';
//     $nilai=75;
//     return view('mahasiswa',compact('nama','nilai'));
// });
// Route::get('/mahasiswa', function () {
//     $nama='Suci Wulan Dari';
//     $nilai=75;
//     return view('mahasiswa',compact('nama','nilai'));
// });
// Route::get('/mahasiswa', function () {
//     $nama='Suci Wulan Dari';
//     $nilai=110;
//     return view('mahasiswa',compact('nama','nilai'));
// });
// Route::get('/mahasiswa', function () {
//     $nama='Suci Wulan Dari';
//     $nilai=75;
//     return view('mahasiswa',compact('nama','nilai'));
// });
// Route::get('/mahasiswa', function () {
//     $nama='Suci Wulan Dari';
//     $nilai=100;
//     return view('mahasiswa',compact('nama','nilai'));
// });
// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });
Route::get('/mahasiswa', function () {
    $nama='Vladimir Putin Harahap';
    $nilai=[80,64,30,76,95];
    return view('mahasiswa',compact('nama','nilai'));
});