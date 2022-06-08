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
Route::get('/register','App\Http\Controllers\AuthController@showRegister');
Route::post('/register','App\Http\Controllers\AuthController@registerProcess');


Route::get('/items','App\Http\Controllers\ItemController@index');
Route::get('/','App\Http\Controllers\AppController@index');
Route::get('/manage','App\Http\Controllers\ItemController@showAllItem');
Route::get('/add','App\Http\Controllers\ItemController@add');
Route::post('/add','App\Http\Controllers\ItemController@store');

Route::get('/items/{id}','App\Http\Controllers\ItemController@edit');
Route::put('/items/{id}','App\Http\Controllers\ItemController@update');
Route::delete('/items/{id}','App\Http\Controllers\ItemController@destroy');


