<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 
Route::get('/Main', 'HomeController@index');
Route::get('/about', 'HomeController@showAbout');
Route::get('/location', 'HomeController@showLocation');
Route::get('/domestic', 'HomeController@showDomestic');
Route::get('/import', 'HomeController@showImport');
Route::get('/export', 'HomeController@showExport');
Route::get('/quote', 'HomeController@showQuote');

Route::post('/store', 'HomeController@showRecord');

Route::get('/view', 'HomeController@showAll');