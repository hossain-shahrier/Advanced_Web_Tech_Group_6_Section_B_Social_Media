<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecruiterController;

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

//Route::get('/recruiter/header', 'RecruiterController@index');
//Route::get('/layouts/master', 'RecruiterController@index');

Route::get('/recruiter/jobhome', 'RecruiterController@home')->name('recruiter.home');

Route::get('/recruiter/jobpost', 'RecruiterController@jobindex');
Route::post('/recruiter/jobpost', 'RecruiterController@postjob');

Route::get('/recruiter/joblist', 'RecruiterController@joblist')->name('recruiter.joblist');

Route::get('/recruiter/jobupdate/{id}', 'RecruiterController@jobedit');
Route::post('/recruiter/jobupdate/{id}', 'RecruiterController@jobupdate');

Route::get('/recruiter/jobsearch', 'RecruiterController@jobfind');
Route::post('/recruiter/jobsearch', 'RecruiterController@jobsearch');

Route::get('/recruiter/jobapply/{id}', 'RecruiterController@jobget');
Route::post('/recruiter/jobapply/{id}', 'RecruiterController@jobapply');

Route::get('/recruiter/applicantlist', 'RecruiterController@jobapplicants');

Route::get('/recruiter/applicantview/{id}', 'RecruiterController@viewapplicantdetails');

Route::get('/recruiter/viewfiles/{id}', 'RecruiterController@viewfiles');
Route::get('/recruiter/download/{file}', 'RecruiterController@download');

// Route::get('/recruiter/viewdocument/{id}', 'RecruiterController@viewdocument');
// Route::get('/recruiter/downloaddocument/{document}', 'RecruiterController@downloaddocument');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
