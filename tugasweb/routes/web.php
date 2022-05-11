<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'PageController@home')->name('home');
Route::get('/profile', 'PageController@profile')->name('profile');
Route::get('/product', 'PageController@product')->name('product');
Route::get('/contact', 'PageController@contact')->name('contact');
