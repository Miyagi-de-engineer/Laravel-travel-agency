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

Auth::routes();
Route::get('/', 'ItemController@index')->name('items.index');

Route::resource('/items', 'ItemController')->except(['index', 'show'])->middleware('auth');
Route::resource('/items', 'ItemController')->only(['show']);

Route::prefix('items')->name('items.')->group(function () {
    Route::put('/{item}/like', 'ItemController@like')->name('like')->middleware('auth');
    Route::delete('/{item}/like', 'ItemController@unlike')->name('unlike')->middleware('auth');
});
