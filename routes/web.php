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

//
Route::get('/', 'HomeController@getHome');
Route::get('/aboutus','HomeController@getaboutusintro');
Route::get('/aboutusvision','HomeController@getaboutusvisionmission');
Route::get('/aboutusservice','HomeController@getaboutusservices');
Route::get('/aboutuscontactus','HomeController@getaboutcontactus');
Route::get('/facilities', 'HomeController@getFacilities');
Route::get('/contactus', 'HomeController@getContactUs');
Route::get('/book', 'BookController@getBook');
Route::get('/bookshow/{id}', 'BookController@show') ->name('/bookshow');

Route::post('/logout', 'AuthController@logout');

Auth::routes();
