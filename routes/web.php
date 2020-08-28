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


Route::get('/', 'CustomerController@index');
Route::post('/','CustomerController@store');
Route::get('/edit', 'CustomerController@editIndex');
Route::get('/edit/{id}', 'CustomerController@edit');
Route::post('/edit', 'CustomerController@editor');