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
Route::get('/mahasiswa', [MahasiswaController::class,'mhs']);
Route::get('/dosen',  [MahasiswaController::class,'dosen']);
Route::get('/gallery',[MahasiswaController::class,'gallery']);
Route::get('informasi/{jurusan}/{prodi}', [MahasiswaController::class,'informasi'])->name('info');