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
Route::get('/','studentController@index');
Route::get('/edit/{id}','studentController@edit');
Route::get('/show/{id}','studentController@show');
Route::get('/create','studentController@create');
Route::post('/store','studentController@store');
Route::post('/update/{id}','studentController@update');
