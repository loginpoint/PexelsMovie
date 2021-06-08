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
//get discover page
Route::get('/discover','ShowsController@index');
Route::redirect('/','/discover')->name('discover');

//get display page 
Route::get('/display/{type?}/{sort?}/{page?}','ShowsController@display')->name('display');
