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

//elke
Route::any('/index', 'Result@index')->name('index');
Route::any('/resultscenario', [
    'http',
    'uses' => 'Result@resultscenario',
    'as' => 'resultscenario'
]);
Route::any('/dtresultscenario', [
    'http',
    'uses' => 'Result@dtresultscenario',
    'as' => 'dtresultscenario'
]);
Route::any('/resreport', 'Result@resreport')->name('resreport');
Route::any('/dtresreport', [
    'http',
    'uses' => 'Result@dtresreport',
    'as' => 'dtresreport'
]);
//for Ajax Uses
Route::any('/dtdevice', [
    'http',
    'uses' => 'Result@getDevice',
    'as' => 'dtdevice'
]);


Route::any('/returnreport', 'Result@returnreport')->name('returnreport');

