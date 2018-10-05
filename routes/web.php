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

Route::get('/', 'HomeController@index');

Route::middleware('auth')->group(function(){

	// normal routes
	Route::get('/categories/normal',           'Normal\CategoriesController@show');
	Route::post('/categories/normal',          'Normal\CategoriesController@save');
	Route::put('/categories/{id}/normal',      'Normal\CategoriesController@update');
	Route::delete('/categories/{id}/normal',   'Normal\CategoriesController@delete');

	Route::get('/titles/normal',           'Normal\TitlesController@show');
	Route::post('/titles/normal',          'Normal\TitlesController@save');
	Route::put('/titles/{id}/normal',      'Normal\TitlesController@update');
	Route::delete('/titles/{id}/normal',   'Normal\TitlesController@delete');

	Route::get('/sections/normal',           'Normal\SectionsController@show');
	Route::post('/sections/normal',          'Normal\SectionsController@save');
	Route::delete('/sections/{id}/normal',   'Normal\SectionsController@delete');

	Route::get('/data/normal',           'Normal\DataController@show');
	Route::post('/data/normal',          'Normal\DataController@save');
	Route::delete('/data/{id}/normal',   'Normal\DataController@delete');


	// upnormal routes
	Route::get('/categories/upnormal',           'UpNormal\CategoriesController@show');
	Route::post('/categories/upnormal',          'UpNormal\CategoriesController@save');
	Route::put('/categories/{id}/upnormal',      'UpNormal\CategoriesController@update');
	Route::delete('/categories/{id}/upnormal',   'UpNormal\CategoriesController@delete');

	Route::get('/titles/upnormal',           'UpNormal\TitlesController@show');
	Route::post('/titles/upnormal',          'UpNormal\TitlesController@save');
	Route::put('/titles/{id}/upnormal',      'UpNormal\TitlesController@update');
	Route::delete('/titles/{id}/upnormal',   'UpNormal\TitlesController@delete');

	Route::get('/sections/upnormal',           'UpNormal\SectionsController@show');
	Route::post('/sections/upnormal',          'UpNormal\SectionsController@save');
	Route::delete('/sections/{id}/upnormal',   'UpNormal\SectionsController@delete');

	Route::get('/data/upnormal',           'UpNormal\DataController@show');
	Route::post('/data/upnormal',          'UpNormal\DataController@save');
	Route::delete('/data/{id}/upnormal',   'UpNormal\DataController@delete');


	// auth routes
	Route::get('/password/change',	'AuthController@password');
	Route::post('/password/change',	'AuthController@changePassword');
	Route::get('/logout', 			'AuthController@logout');
});


Auth::routes();

