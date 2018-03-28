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
Route::get('/tutor_register','Frontend\TutorRegisterController@index')->name('frontend.tutorRegister');
Route::post('/tutor_register','Frontend\TutorRegisterController@store')->name('tutor.submit');


Route::get('api/get-state-list','Frontend\StateController@getStateList');
Route::get('api/get-city-list','Frontend\CityController@getCityList');
Route::get('api/get-sub-list','Frontend\SubjectController@getSubList');


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'],function() {
    Route::get('/','Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/','Admin\LoginController@login')->name('admin.login.submit');

    Route::group(['middleware'=>'auth:admin'],function(){
        Route::get('/home', function () {
            return view('admin.home');
        })->name('admin-dashboard');
        Route::group(['middleware'=>'checkPermission'],function(){
            Route::resource('/tutors','Admin\TutorController');
        });
    });
});


