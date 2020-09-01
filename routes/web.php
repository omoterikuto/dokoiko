<?php

Auth::routes();
Route::get('/', 'AdminController@index')->name('home');
Route::prefix('menu')->name('menu.')->middleware('auth')->group(function () {
  Route::get('/', 'MenuController@index')->name('index');
  Route::get('/create', 'MenuController@create')->name('create');
  Route::post('/create', 'MenuController@store')->name('store');
  Route::get('/{menu}/edit', 'MenuController@edit')->name('edit');
  Route::post('/{menu}/edit', 'MenuController@update')->name('update');
  Route::delete('/{menu}', 'MenuController@destroy')->name('destroy');
});
Route::prefix('sale')->name('sale.')->middleware('auth')->group(function () {
  Route::get('/', 'SaleController@index')->name('index');
});
Route::prefix('ad')->name('ad.')->middleware('auth')->group(function () {
  Route::get('/', 'AdController@index')->name('index');
});
Route::prefix('news')->name('news.')->middleware('auth')->group(function () {
  Route::get('/', 'NewsController@index')->name('index');
});
Route::prefix('config')->name('config.')->middleware('auth')->group(function () {
  Route::get('/', 'ConfigController@index')->name('index');
  Route::put('/', 'ConfigController@store')->name('store');
});
