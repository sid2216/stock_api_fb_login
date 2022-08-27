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
    return view('fb_login');
});

Route::get('stock_data','App\Http\Controllers\StockController@index');
Route::post('get_data','App\Http\Controllers\StockController@get_stocks');
