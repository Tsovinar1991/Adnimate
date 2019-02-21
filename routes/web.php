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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/productOrders', 'AdminDeliveryController@orders')->name('admin.product_orders');
    Route::get('/getNewOrders', 'AdminDeliveryController@getNewOrders');
    Route::get('/setStatus', 'AdminDeliveryController@setStatus');
    Route::get('/test', 'AdminDeliveryController@test');


      //About routes
    Route::get('/insert/aboutUs', 'AdminAboutUsController@index');
    Route::get('/about/create', 'AdminAboutUsController@create');
    Route::delete('/about/{id}', 'AdminAboutUsController@delete');
    Route::post('/about', 'AdminAboutUsController@store');
    Route::get('/about/{id}/edit', 'AdminAboutUsController@edit');
    Route::put('/about/{id}', 'AdminAboutUsController@update');


    //Product routes
    Route::get('/insert/products', 'AdminProductController@index');
    Route::get('/product/create', 'AdminProductController@create');





    // Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
