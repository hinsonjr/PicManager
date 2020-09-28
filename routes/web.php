<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
	return view('welcome');
	
});

Route::get('/page/about-us/{id}', function () {
	echo "Hi there - this is the about us page $id";
	
});

Route::get('/pics','App\Http\Controllers\PicController@index');
Route::post('/pics/store','App\Http\Controllers\PicController@store');