<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahsulotController;
use App\Http\Controllers\AdminController;
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

Route::get('booked', [MahsulotController::class, 'booked'])->name('booked')->middleware('auth');
Route::get('index', [MahsulotController::class, 'index'])->name('plus');
Route::get('search', [MahsulotController::class, 'bookedajax']);
Route::get('order', [Order_detailsController::class, 'getData'])->name('getData');
Route::get('target', [OrderController::class, 'myMethod']);



//Route::prefix('admin')->group(function () {
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {

    Route::get('/main', [AdminController::class, 'index'])->name('main');
    Route::resource('product', ProductController::class)->middleware('is_admin');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
