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

Route::get('/', 'PagesController@index');
Route::get('/webinar', 'PagesController@webinar');
Route::get('/trial', 'PagesController@trial');
Route::get('/about', 'PagesController@aboutus');

Route::resource('sections','SessionController');
Route::resource('news','NewsController');
Route::resource('/paperdetails','PagesController');



Route::get('/home','McaController@index');
Route::resource('/class','McaController');
Route::resource('/subject','NewsController');
//Route::resource('/paperdetails','PapersController');