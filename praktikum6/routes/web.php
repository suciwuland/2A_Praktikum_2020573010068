<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [App\Http\Controllers\PageController::class,'index']);
// Route::get('/', [App\Http\Controllers\PageController::class,'tampil']);
// Route::get('/', [PageController::class,'index']);
// Route::get('/mahasiswa', [PageController::class,'tampil']);

// Route::get('/', [App\Http\Controllers\Admin\PageController::class,'index']);
// Route::get('/', [App\Http\Controllers\Admin\PageController::class,'tampil']);
Route::get('/', [PageController::class,'index']);
Route::get('/mahasiswa', [PageController::class,'tampil']);
Route::get('/coba-facade', [PageController::class,'cobaFacade']);
Route::get('/coba-class', [PageController::class,'cobaClass']);