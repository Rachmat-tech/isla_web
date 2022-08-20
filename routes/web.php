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
    return view('index');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/pimpinan', function () {
    return view('pimpinan');
});

Route::get('/organisasi', function () {
    return view('organisasi');
});

Route::get('/mpo', function () {
    return view('mpo');
});

Route::get('/wilayah', function () {
    return view('wilayah');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/opini', function () {
    return view('opini');
});

Route::get('/loker', function () {
    return view('loker');
});

Route::get('/loker-detail', function () {
    return view('loker-detail');
});

Route::get('/blog-detail', function () {
    return view('blog-detail');
});

Route::get('/proker-nasional', function () {
    return view('proker-nasional');
});

Route::get('/proker-regional', function () {
    return view('proker-regional');
});

Route::get('/alumni', function () {
    return view('alumni');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/kemitraan', function () {
    return view('kemitraan');
});

Route::get('/formulir', function () {
    return view('formulir');
});

Route::get('/document', function () {
    return view('document');
});

Route::get('/contact', function () {
    return view('contact');
});