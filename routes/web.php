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

Route::get('/admin', 'HomeController@getAdminPage');

Route::get('/bookindex','BookController@adminbookindex');
Route::get('/book/{id}/edit','BookController@edit')->name('book.edit')->middleware('auth');
Route::delete('/book/{id}', 'BookController@destroy')->name('book.destroy');

Route::get('/publisherindex','PublishersController@index')->name('publisher.index')->middleware('auth');;
Route::get('/publisher/create','PublishersController@create')->name('publisher.create')->middleware('auth');
Route::get('/publisher/{id}/edit','PublishersController@edit')->name('publsher.edit')->middleware('auth');
Route::delete('/publisher/{id}', 'PublishersController@destroy')->name('publisher.destroy');
Route::put('/publisher/{id}','PublishersController@update')->name('publisher.update')->middleware('auth');
Route::post('/publisher/store','PublishersController@store')->name('publisher.store')->middleware('auth');

Route::get('/authorindex','AuthorController@index')->name('author.index')->middleware('auth');;
Route::get('/author/create','AuthorController@create')->name('author.create')->middleware('auth');
Route::get('/author/{id}/edit','AuthorController@edit')->name('author.edit')->middleware('auth');
Route::delete('/author/{id}', 'AuthorController@destroy')->name('author.destroy');
Route::put('/author/{id}','AuthorController@update')->name('author.update')->middleware('auth');
Route::post('/author/store','AuthorController@store')->name('author.store')->middleware('auth');

Route::post('/logout', 'AuthController@logout');

Auth::routes();
