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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('index');
});

//company login
Route::get('/login', 'companiesController@login')->name('companies.login');
Route::post('/login', 'companiesController@verify')->name('companies.verify');

//company register
Route::get('/register', 'companiesController@register')->name('companies.register');
Route::post('/register','companiesController@create')->name('companies.register');

Route::group(['middleware'=>'checkcompany'],function(){

//company Home
Route::get('/home', 'companiesController@show')->name('companies.home');
Route::post('/home','companiesController@show')->name('companies.home');

//company Home
Route::get('/home', 'companiesController@home')->name('companies.home');
Route::post('/home','companiesController@home')->name('companies.home');


//company Job Post
Route::get('/jobpost', 'companiesController@jobpost')->name('companies.jobpost');
Route::post('/jobpost','companiesController@post')->name('companies.jobpost');

//company View Job
Route::get('/applicantinfo', 'companiesController@applicantinfo')->name('companies.applicantinfo');
Route::post('/applicantinfo','companiesController@applicantinfo')->name('companies.applicantinfo');

});

//applicant Login
Route::get('/applicantlogin', 'applicantController@login')->name('applicant.login');
Route::post('/applicantlogin', 'applicantController@verify')->name('applicant.verify');

Route::group(['middleware'=>'session'],function(){

//applicant Home
Route::get('/applicanthome', 'applicantController@show')->name('applicant.home');
Route::post('/applicanthome','applicantController@show')->name('applicant.home');



//Applicant View Job
Route::get('/viewjob', 'applicantController@viewjob')->name('applicant.viewjob');
Route::post('/viewjob','applicantController@viewjob')->name('applicant.viewjob');

//Applicant Apply
Route::get('/apply/{id}','applicantController@apply')->name('applicant.apply');

//Applicant Profile
Route::get('/applicantprofile', 'applicantController@profile')->name('applicant.profile');
Route::post('/applicantprofile','applicantController@profile')->name('applicant.profile');

//Applicant Profile Update
Route::get('/applicantprofile/update/{id}', 'applicantController@profileUpdate')->name('applicant.update');
Route::post('/applicantprofile/update/{id}','applicantController@updatedProfile')->name('applicant.update');

//Applicant Log Out
Route::get('/logout','logoutController@index')->name('logout.index');

});

//Applicant register
Route::get('/applicantregister', 'applicantController@register')->name('applicant.register');
Route::post('/applicantregister','applicantController@create')->name('applicant.register');



