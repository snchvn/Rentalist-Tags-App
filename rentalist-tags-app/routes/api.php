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
Route::get('tags', 'TagController@index');
Route::get('tags/{id}', 'TagController@show');
Route::post('tags', 'TagController@store');
Route::put('tags/{id}', 'TagController@update');
Route::delete('tags/{id}', 'TagController@delete');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
