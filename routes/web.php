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
})->name('top');

Route::get('/morning','TrafficController@morning')->name('morning');
Route::get('/evening','TrafficController@evening')->name('evening');
Route::get('/other', 'TrafficController@other')->name('other');

