<?php

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

Route::match(['get', 'post'], '/', "ScanController@start");
Route::match(['get', 'post'], '/start', "ScanController@start");

if (config("app.env") == 'testing') {
    Route::match(['get', 'post'], '/testing', "ScanController@reflect");
}
