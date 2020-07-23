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

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes(['reset' => false,'confirm'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/last-news', 'HomeController@lastNews')->name('lastNews');
Route::get('/countries', 'HomeController@countries')->name('countries');
Route::post('/countries/search', 'HomeController@search')->name('search');
Route::get('/critical-cases', 'HomeController@critical')->name('critical');
Route::get('/about', 'HomeController@about')->name('about');
