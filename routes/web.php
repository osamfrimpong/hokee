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


Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about','HomeController@about')->name('about');
Route::get('/hotels','HomeController@hotels')->name('hotels');
Route::get('/enhancers','HomeController@enhancers')->name('enhancers');
Route::get('/contactUs','HomeController@contactUs')->name('contactUs');
Route::get('/roomRentals','HomeController@roomRentals')->name('roomRentals');




Route::prefix('admin')->namespace('Admin')->middleware('auth:admin')->name('admin.')->group(function(){
    Route::get('/home','AdminController@index')->name('home');
    Route::resource('services','ServicesController');
    Route::get('requests','HookRequestController@index')->name('requests.index');
    Route::get('requests/publish/{request_id}','HookRequestController@publish')->name('requests.publish');
    Route::post('requests/publish/{request_id}','HookRequestController@doPublish')->name('requests.dopublish');
    Route::get('requests/booking/{request_id}','HookRequestController@viewBooking')->name('requests.viewbooking');
    Route::post('requests/match','HookRequestController@matchHook')->name('requests.matchhook');
    Route::get('payments','HookPaymentController@index')->name('payments');
    // Route::resource('messages','HookMessageController');
    Route::resource('userratings','UserRatingsController');
    Route::resource('users','UsersController');
    Route::resource('locations','LocationController');
    Route::resource('occupations','OccupationController');
    Route::resource('settings','SettingsController');
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
    Route::get('/checkouts','UserDashboardController@checkout')->name('checkout');
    Route::get('userprofile','UserProfileController@index')->name('userprofile');
    Route::post('updateprofile','UserProfileController@update')->name('updateprofile');
    Route::get('upgrade','UserProfileController@upgradeAccount')->name('upgrade');
    Route::get('upgrade/checkout','UserProfileController@checkout')->name('upgradecheckout');
    Route::get('ratings','UserDashboardController@ratings')->name('ratings');
    Route::get('requesthook','UserDashboardController@requesthook')->name('requesthook');
    Route::post('addrequest','UserDashboardController@addrequest')->name('addrequest');
    Route::post('rate','UserDashboardController@rate')->name('rate');
    Route::resource('book','BookingController');
    Route::get('bookrequest/{request_id}','BookingController@bookrequest')->name('bookrequest');
    Route::get('booking/checkout','BookingController@checkout')->name('bookingcheckout');
    Route::get('request/view/{request_id}','UserDashboardController@viewRequest')->name('viewrequest');
    Route::get('requests/service/{service_id}','UserDashboardController@getServiceRequests')->name('service.requests');

});
    
// Route::get('/checkouts','UserDashboardController@checkout')->name('checkout');

Route::post('/pay', 'RaveController@initialize')->name('pay');
Route::get('/rave/callback', 'RaveController@callback')->name('callback');

// Route::get('/testpay','RaveController@testpay')->name('testpay');