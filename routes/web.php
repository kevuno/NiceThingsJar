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

/* Basic welcome and about routes */

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');;


Route::group(['middleware' => ['auth']], function () {
	
	Route::resource('list','ListController');
	Route::resource('journal','JournalEntryController');


});



Auth::routes();

Route::get('/home', 'HomeController@index');
