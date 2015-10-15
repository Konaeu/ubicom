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

Route::get('/', function()
{
	return View::make('home.main');
});

Route::get('/research', function()
{
	return View::make('home.research');
});

Route::get('/news', function()
{
	return View::make('home.news');
});

Route::get('/research-detail', function()
{
	return View::make('home.research-detail');
});
