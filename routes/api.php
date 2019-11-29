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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Login

// all bins & Profile

// History

// scan bin if empty open it else redirect to the nearest one
Route::get('check/{id}', 'BinController@check');

// change bin status
Route::get('change/{id}', 'BinController@change');
