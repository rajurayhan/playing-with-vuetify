<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/table-definations', 'APIController@index')->name('getTableDefinations');

Route::post('/v1/update/table-definations', 'APIController@update')->name('updateTableDefinations');

Route::post('/v1/add/table-definations', 'APIController@add')->name('addTableDefinations');

Route::post('/v1/delete/table-definations', 'APIController@delete')->name('deleteTableDefinations');