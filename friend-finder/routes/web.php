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
    // Route::get('/user/details/{id}', 'UserController@details')->name('user.details');
});



//business part

Route::get('/business/login','b_login_controller@login');
Route::post('/business/login','b_login_controller@verify');


Route::group(['middleware'=>['b_s_f']],function (){
    
    Route::get('/business/home','b_home_controller@home');
    route::get('/business/create/post','b_post_controller@create_post');
    route::post('/business/create/post','b_post_controller@insert_post');
    route::get('/business/product/list','b_product_list_controller@list');
    route::get('/business/product/delete/{id}','b_product_list_controller@delete');


});



