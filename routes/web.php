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

Route::get('/categories',           'CategoriesController@show');
Route::post('/categories',          'CategoriesController@save');
Route::put('/categories/{id}',      'CategoriesController@update');
Route::delete('/categories/{id}',   'CategoriesController@delete');

Route::get('/titles',           'TitlesController@show');
Route::post('/titles',          'TitlesController@save');
Route::put('/titles/{id}',      'TitlesController@update');
Route::delete('/titles/{id}',   'TitlesController@delete');

Route::get('/sections',           'SectionsController@show');
Route::post('/sections',          'SectionsController@save');
Route::delete('/sections/{id}',   'SectionsController@delete');

Route::get('/data',           'DataController@show');
Route::post('/data',          'DataController@save');
Route::delete('/data/{id}',   'DataController@delete');


Auth::routes();

