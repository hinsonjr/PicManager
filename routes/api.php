<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Pic;

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


Route::get('pics', 'App\Http\Controllers\ApiPicController@index');
Route::get('pic/{pic}', 'App\Http\Controllers\ApiPicController@show');
Route::post('pics', 'App\Http\Controllers\ApiPicController@store');
Route::delete('pics/{pic}', 'App\Http\Controllers\ApiPicController@delete');
