<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Transactions\OrderController;
use App\Http\Controllers\Auth\LogHistoryController;

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


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('orders/create', [OrderController::class, 'store'])->name('orders.store');
Route::get('kontak', [DashboardController::class, 'contact'])->name('contact');
Route::get('about', [DashboardController::class, 'about'])->name('about');

// Route for admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    // Auth
    Route::group(['middleware' => 'guest', 'controller' => AuthController::class], function() {
        Route::get('login', 'login')->name('login');
        Route::post('login', 'loginStore')->name('login.store');
    });

    Route::group(['middleware' => 'auth'], function() {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('orders', OrderController::class)->names('orders');
        Route::resource('client', OrderController::class)->names('orders');
        Route::resource('product', OrderController::class)->names('orders');
        Route::resource('log-history', LogHistoryController::class)->names('loghistory');
    });

});