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

Route::get('/notices','HomeController@notices');

Route::get('/notice-detail/{id}','HomeController@noticesDetail');

Route::get('/member','HomeController@member');
 
Route::get('/edit/{cat_id?}/{item_id?}','HomeController@edit');

Route::post('/edit','HomeController@saveItem');

Route::get('/course/{id?}','HomeController@course');

Route::controller('users','UsersController');

Route::post('/upload_file','HomeController@upload');

Route::get('/admin','AdminController@index');

Route::get('/user-edit','AdminController@userEdit');

Route::post('/user-edit','AdminController@userDelete');

Route::get('/news-edit','AdminController@newsEdit');

Route::post('/news-edit','AdminController@newsDelete');

Route::get('/research-edit','AdminController@researchEdit');

Route::post('/research-edit','AdminController@researchDelete');

Route::get('/notice-edit','AdminController@noticeEdit');

Route::post('/notice-edit','AdminController@noticeDelete');

Route::get('/course-edit','AdminController@courseEdit');

Route::post('/course-edit','AdminController@courseDelete');

 