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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dienstencheques', 'DienstenChequesController@index')->name('dienstencheques');
Route::get('/diensten', 'DienstenController@index')->name('diensten');
Route::get('/kantoren', 'KantorenController@index')->name('kantoren');
Route::get('/kantoren/{kantoor}', 'KantorenController@show')->name('kantoren.kantoor');
Route::get('/werken-bij-amby', 'WerkenController@index')->name('werken');
Route::post('/kantoren/{kantoor}', 'KantorenController@store');

Route::post('/maps/{kantoor}/calculate', 'KantorenController@calculate');