<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@home');
Route::get('/about', 'AboutController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/products', 'ProductController@index');

// Route untuk menampilkan form registrasi
Route::get('/registrasi', function () {
    return view('registrasi');
})->name('registrasi.form');

// Route untuk menangani proses registrasi (Anda harus menambahkan logika penyimpanan data pengguna di sini)
 Route::post('/registrasi', 'Auth\RegisterController@register')->name('register');

// Route untuk menampilkan form login
Route::get('/login', function () {
    return view('login');
})->name('login.form');

// Route untuk menangani proses login (Anda harus menambahkan logika autentikasi di sini)
 Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/single-product', function () {
    return view('single');
});

Route::get('/kids', function () {
    return view('pages.kids');
});

Route::get('/mens', function () {
    return view('pages.fiksi');
});

Route::get('/womens', function () {
    return view('pages.womens');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/login', function () {
    return view('login');
});