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

Route::get('/', 'LoginController@index');
Route::post('/', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');
Route::get('/registration', 'RegiController@index');
Route::post('/registration', 'RegiController@create');

Route::group(['middleware' => ['session']], function () {
    // Routes for admin
    Route::get('admin/home', 'AdminController@index')->middleware('session')->name('admin.home');
    Route::post('/home', 'HomeController@index')->middleware('session');
    Route::get('/admin/businesses', 'BusinessController@index')->middleware('session');
});

// Admin panel routes
// Edit User's Information

Route::get('/admin/user/edit/{id}', 'UserController@edit');
Route::post('/admin/user/edit/{id}', 'UserController@update');
Route::get('/admin/user/delete/{id}', 'UserController@destroy');
Route::get('/admin/user/action/{id}', 'UserController@action');
Route::get('/admin/user/message/{id}', 'UserController@messageIndex');
Route::post('/admin/user/message/{id}', 'UserController@message');
// Business Information
Route::get('/admin/business/edit/{id}', 'BusinessController@edit');
Route::post('/admin/business/edit/{id}', 'BusinessController@update');
Route::get('/admin/business/delete/{id}', 'BusinessController@destroy');
Route::get('/admin/business/profit/{id}', 'BusinessController@show');
// Community Routes
Route::get('/admin/communities/action/{id}', 'AdminController@verify');
Route::get('/admin/communities', 'AdminController@show');
Route::get('admin/community', 'AdminController@community')->name('admin.community');
// Route::post('/admin/home', 'UserController@index');
// Privacy Policy
Route::get('/admin/privacy', 'PrivacyController@index');
Route::post('/admin/privacy', 'PrivacyController@update');
