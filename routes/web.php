<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikeController;

// HALAMAN BERANDA
Route::get('/', function () {
    return view('welcome');
})->name('home');

// HALAMAN DAFTAR SEPEDA
Route::get('/bikes', [BikeController::class, 'index'])
    ->name('bikes.index');

// HALAMAN DETAIL SEPEDA
Route::get('/bikes/{bike}', [BikeController::class, 'show'])
    ->name('bikes.show');
