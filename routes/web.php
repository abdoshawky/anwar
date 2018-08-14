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

Route::get('/categories',           'HomeController@showCategories');
Route::post('/categories',          'HomeController@saveCategories');
Route::put('/categories/{id}',      'HomeController@updateCategory');
Route::delete('/categories/{id}',   'HomeController@deleteCategories');

Route::get('/titles',           'HomeController@showTitles');
Route::post('/titles',          'HomeController@saveTitles');
Route::put('/titles/{id}',      'HomeController@updateTitle');
Route::delete('/titles/{id}',   'HomeController@deleteTitles');

Route::get('/sections',           'HomeController@showSections');
Route::post('/sections',          'HomeController@saveSections');
Route::delete('/sections/{id}',   'HomeController@deleteSections');

Route::get('/data',           'HomeController@showData');
Route::post('/data',          'HomeController@saveData');
Route::delete('/data/{id}',   'HomeController@deleteData');


Auth::routes();

