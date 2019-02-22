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



    //delivery routes
    Route::get('/productOrders', 'AdminDeliveryController@orders')->name('admin.product_orders');
    Route::get('/getNewOrders', 'AdminDeliveryController@getNewOrders');
    Route::get('/setStatus', 'AdminDeliveryController@setStatus');
    Route::get('/test', 'AdminDeliveryController@test');



    //Product routes
    Route::get('/insert/products', 'AdminProductController@index');
    Route::get('/product/create', 'AdminProductController@create');
    Route::post('/product', 'AdminProductController@store');
    Route::get('/product/{id}/edit', 'AdminProductController@edit');
    Route::put('/product/{id}', 'AdminProductController@update');




    //Page routes
    Route::get('/page/{p}', 'AdminCreatePageController@index');
    Route::get('/pages/create', 'AdminCreatePageController@create');
    Route::get('/pages', 'AdminCreatePageController@all');
    Route::get('/page/{p}/edit', 'AdminCreatePageController@edit');
    Route::post('/pages', 'AdminCreatePageController@store');
    Route::put('/page/{id}', 'AdminCreatePageController@update');
    Route::delete('/page/{id}', 'AdminCreatePageController@delete');
    Route::delete('/pages/delete', 'AdminCreatePageController@truncate');


    // Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
