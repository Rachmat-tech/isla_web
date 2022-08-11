<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JumbotronController;


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
    return redirect()->route('jumbotron');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/jumbotron', [JumbotronController::class, 'index'])->name('jumbotron');
    
    Route::get('/tambahdata', [JumbotronController::class, 'create'])->name('tambahdatajumbotron');
});

// route::get('/login', [admincontroler::class, 'login'])->name('login');