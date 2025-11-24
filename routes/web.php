<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains all of your web routes. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route baru untuk halaman Login/Register
Route::get('/auth', function () {
    return view('auth');
})->name('auth'); // Memberi nama route 'auth'

// Pastikan route 'login' dari nav-button mengarah ke sini
// Jika Anda sebelumnya memiliki Route::get('/login', ...), ubah menjadi ini
Route::get('/login', function () {
    return view('auth');
})->name('login');

// Jika Anda menggunakan Laravel Breeze atau Jetstream,
// route ini mungkin sudah ada dan Anda bisa menyesuaikan file blade-nya.