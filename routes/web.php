<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthController;
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
    return view('welcome');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    // Auth
    Route::group(['middleware' => 'guest', 'controller' => AuthController::class], function() {
        Route::get('login', 'login')->name('login');
        Route::post('login', 'loginStore')->name('login.store');
    });

    Route::group(['middleware' => 'auth'], function() {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });

});