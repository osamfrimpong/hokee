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

Route::get('/', 'HomeController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->namespace('Admin')->middleware('auth:admin')->name('admin.')->group(function(){
    Route::get('/home','AdminController@index')->name('home');
    Route::resource('services','ServicesController');
    Route::resource('requests','HookRequestController');
    Route::resource('messages','HookMessageController');
    Route::resource('users','UsersController');
});


 /****Admin Auth Routes*****/
Route::prefix('admin')->namespace('Auth\Admin')->name('admin.')->group(function(){
Route::get('login', 'LoginController@showLoginForm')->name('login');
Route::post('login', 'LoginController@login')->name('login');
Route::get('logout', 'LoginController@logout')->name('logout');

Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'RegisterController@register')->name('register');

});


  
Route::prefix('user')->middleware('auth')->name('user.')->group(function(){
    Route::get('/home','UserDashboardController@index')->name('home');
});
    
 