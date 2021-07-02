<?php

use Illuminate\Support\Facades\Route;
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
Route::get('/google', 'LoginController@google');
Route::get('/google/redirect', 'LoginController@googleRedirect');
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
    // Route::post('/message', 'UserMessageController@Sends');
    Route::get('/message', 'UserMessageController@ChatBox');
    Route::post('/message', function (Request $request) {
        event(
            new Message(
                $request->input('username'),
                $request->input('message')
            )
        );
        return ["success" => true];
    });
    // Route::get('/user/details/{id}', 'UserController@details')->name('user.details');
});



//business part

Route::get('/business/login', 'b_login_controller@login');
Route::post('/business/login', 'b_login_controller@verify');




Route::get('/business/home', 'b_home_controller@home')->middleware('b_s_f');
route::get('/business/create/post', 'b_post_controller@create_post');
route::post('/business/create/post', 'b_post_controller@insert_post');
route::get('/business/product/list', 'b_product_list_controller@list');
route::get('/business/product/delete/{id}', 'b_product_list_controller@delete');
route::get('/business/product/edit/{id}', 'b_product_list_controller@showdata');
route::post('/business/product/edit/{id}', 'b_product_list_controller@update_data');
route::get('/business/message', 'messagecontroller@index');
route::post('/business/message', 'messagecontroller@sendmessage');

route::get('/business/blogpost', 'b_blogpostcontroller@createblog');
route::post('/business/blogpost', 'b_blogpostcontroller@insertblog');
