<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahsulotController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Order_detailsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Models\Order_details;
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

Route::get('booked', [MahsulotController::class, 'booked'])->middleware('auth')->name('booked');
Route::get('search', [MahsulotController::class, 'bookedajax'])->middleware('auth');
Route::get('order', [Order_detailsController::class, 'getData'])->name('getData')->middleware('auth');
Route::get('target', [OrderController::class, 'myMethod'])->middleware('auth');
Route::get('index', [MahsulotController::class, 'index'])->name('plus');




//Route::prefix('admin')->group(function () {
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {

    Route::get('/main', [AdminController::class, 'index'])->name('main')->middleware('is_admin');
    Route::resource('product', ProductController::class)->middleware('is_admin');
});


Route::get('pdf', [AdminController::class, 'getPdf'])->name('pdf');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
