<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahsulotController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Auth::routes();

Route::get('booked', [MahsulotController::class, 'booked'])->name('booked')->middleware('auth');
Route::get('index', [MahsulotController::class, 'index']);
Route::get('search', [MahsulotController::class, 'bookedajax']);


//Route::prefix('admin')->group(function () {
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/main', [AdminController::class, 'index'])->name('main');
    Route::resource('product', ProductController::class)->middleware('auth');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
