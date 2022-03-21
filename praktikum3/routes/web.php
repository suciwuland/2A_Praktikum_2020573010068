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
// Route::get('/mahasiswa', function () {
//     return view('kampus.mahasiswa',["mahasiswa01"=> "Maulana Sultansyah"]);
// });
// Route::get('/mahasiswa', function () {
//     return view('kampus.mahasiswa',
//     [
//         "mahasiswa01"=> "Indra Kenz",
//         "mahasiswa02"=> "Dodi Salmanan",
//         "mahasiswa03"=> "Ulfi Rizkia",
//         "mahasiswa04"=> "Deliana Putri",
//     ]);
// });
// Route::get('/mahasiswa', function () {
//     $arrMahasiswa=[
//         "mahasiswa01"=> "Indra Kenz",
//         "mahasiswa02"=> "Dodi Salmanan",
//         "mahasiswa03"=> "Ulfi Rizkia",
//         "mahasiswa04"=> "Deliana Putri",
//     ];
//     return view('kampus.mahasiswa');
// });
// Route::get('/mahasiswa', function () {
//     $arrMahasiswa=["Doni Sadikin","Syadzwina Sahara","Deliana Putri","Indra Kenz"
//     ];
//     return view('kampus.mahasiswa',['mahasiswa'=>$arrMahasiswa]);
// });
// Route::get('/mahasiswa', function () {
//     return view('kampus.mahasiswa')->with('mahasiswa01',"Risa Lestari");
// });
// Route::get('/mahasiswa', function () {
//     $arrMahasiswa=["Doni Sadikin","Syadzwina Sahara","Deliana Putri","Indra Kenz"
//     ];
//     return view('kampus.mahasiswa')->with('mahasiswa',$arrMahasiswa);
// });
// Route::get('/mahasiswa', function () {
   
//     return view('kampus.mahasiswa')
//     ->with('mahasiswa01','Doni Sadikin')
//     ->with('mahasiswa02','Syadzwina Sahara')
//     ->with('mahasiswa03','Deliana Putri');
// });
// Route::get('/mahasiswa', function () {
   
//     return view('kampus.mahasiswa')
//     ->withmahasiswa01('Doni Sadikin')
//     ->withmahasiswa02('Syadzwina Sahara')
//     ->withmahasiswa03('Deliana Putri');
// });
Route::get('/mahasiswa', function () {
        $mahasiswa01 = ("Indra Kenz");
        $mahasiswa02 =  ("Dodi Salmanan");
        $mahasiswa03 = ("Ulfi Rizkia");
        $mahasiswa04 =  ("Deliana Putri");
    return view('kampus.mahasiswa',compact("mahasiswa01","mahasiswa02","mahasiswa03","mahasiswa04"));
});