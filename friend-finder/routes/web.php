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

    Route::get('/home', 'HomeController@index');
    Route::get('/profile', 'UserController@profile');
    Route::post('/profile', 'UserController@post');
    Route::get('/about', 'UserController@about');
    Route::get('/edit', 'UserController@edit');
    Route::post('/edit', 'UserController@update');
    Route::get('/contact', 'UserController@contact');
    Route::get('/message', 'UserController@message');
    Route::post('/message', 'UserController@send');
    // Route::get('/user/details/{id}', 'UserController@details')->name('user.details');
});
