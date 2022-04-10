<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [App\Http\Controllers\PageController::class,'index']);
// Route::get('/', [App\Http\Controllers\PageController::class,'tampil']);
// Route::get('/', [PageController::class,'index']);
// Route::get('/mahasiswa', [PageController::class,'tampil']);

// Route::get('/', [App\Http\Controllers\Admin\PageController::class,'index']);
// Route::get('/', [App\Http\Controllers\Admin\PageController::class,'tampil']);

// Route::get('/', [PageController::class,'index']);
// Route::get('/mahasiswa', [PageController::class,'tampil']);
// Route::get('/coba-facade', [PageController::class,'cobaFacade']);
// Route::get('/coba-class', [PageController::class,'cobaClass']);
// Route::get('/mahasiswa', 'MahasiswaController@mahasiswa')->name('mahasiswa');

Route::get('/mahasiswa','MahasiswaController@mahasiswa')->name('mahasiswa');
Route::get('/dosen','MahasiswaController@dosen')->name('dosen');
Route::get('/gallery','MahasiswaController@gallery')->name('gallery');
Route::get('/info/{jurusan}/{prodi}','MahasiswaController@info')->name('info');