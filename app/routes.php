<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/','HomeController@index');

Route::get('/research','HomeController@research');

Route::get('/research-detail/{id}','HomeController@researchDetail');

Route::get('/news','HomeController@news');

Route::get('/news-detail/{id}','HomeController@newsDetail');

Route::get('/member','HomeController@member');
 
Route::get('/edit/{cat_id?}/{item_id?}','HomeController@edit');

Route::post('/edit','HomeController@saveItem');


