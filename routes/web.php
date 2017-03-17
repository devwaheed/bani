<?php

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
    return redirect('admin/login');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin','middleware' => 'auth'], function () {
    
    
    Route::patch('bank/{id}/update', 'BankController@update');
    Route::get('dashboard', 'DashboardController@home');

    Route::resource('user', 'UserController');
    Route::resource('role', 'RoleController');
    Route::resource('bank', 'BankController');
    Route::resource('subscription', 'SubscriptionController');
    Route::resource('dsr', 'DSRController');
    
    Route::resource('interest', 'InterestController');
    
});

Route::group(['prefix' => 'admin'], function(){
    Auth::routes();
});


Route::get('/home', 'HomeController@index');
