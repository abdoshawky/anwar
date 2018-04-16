<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('categories', function(){
    $data = file_get_contents(public_path('/json/data.json'));
    dd(json_decode($data));
    $categories = \App\Category::select('id','name')->get();
//    $data = json_encode($categories);
//    $path = public_path('json/categories.json');
//    $file = fopen($path, "w");
//    fwrite($file, $data);
    return response()->json($categories);
});
