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
    //return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/addhotel', 'HotelController@addhotel')->name('addhotel');
Route::get('/', 'HotelController@hotellist')->name('hotellist');
Route::get('/hotellist', 'HotelController@gethotellist')->name('gethotellist');
Route::post('/addcomment', 'CommentController@addcomment')->name('addcomment');