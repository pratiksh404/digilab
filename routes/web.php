<?php

use Illuminate\Support\Facades\Auth;
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
    return view('frontend.index');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth', 'activity', 'role:admin']], function () {
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/plugin', function () {
        return view('admin.plugin');
    });
});
