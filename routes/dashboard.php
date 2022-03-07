<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register dashboard routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "dashboard" middleware group. Now create something great!
|
*/

// Dashboard Authentication Routes
Route::group([
    'namespace'  => 'Dashboard\Auth',
    'prefix'     => 'dashboard',
], function(){
    // register routes
    Route::get('/register', 'RegisterController@index')->middleware('guest')->name('register');
    Route::post('/register', 'RegisterController@store')->middleware('guest')->name('dashboard-register');

    // login routes
    Route::get('/login', 'LoginController@index')->middleware('guest')->name('login');
    Route::post('/login', 'LoginController@store')->middleware('guest')->name('dashboard-login');

    // logout routes
    Route::post('logout', 'LogoutController@index')->middleware('auth')->name('logout');

});

// Dashboard Routes
Route::group([
    'namespace'  => 'Dashboard',
    'prefix'     => 'dashboard',
    'middleware' => 'auth',
], function(){
    // dashboard home page
    Route::get('/', 'DashboardController@index')->name('dashboard');

});
