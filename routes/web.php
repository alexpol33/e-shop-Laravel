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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/category/{cat}', 'App\Http\Controllers\ProductController@showCategory')->name('showCategory');
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cartIndex');
Route::get('/category/{cat}/{prod_id}', 'App\Http\Controllers\ProductController@getProduct')->name('showProduct');
