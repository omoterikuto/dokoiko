<?php

Auth::routes();
Route::get('/', 'adminController@index')->name('home');
Route::prefix('menu')->name('menu.')->middleware('auth')->group(function () {
  Route::get('/', 'menuController@index')->name('index');
  Route::get('/create', 'menuController@create')->name('create');
  Route::post('/create', 'menuController@store')->name('store');
  Route::get('/{menu}/edit', 'menuController@edit')->name('edit');
  Route::post('/{menu}/edit', 'menuController@update')->name('update');
  Route::delete('/{menu}', 'menuController@destroy')->name('destroy');
});
Route::prefix('sale')->name('sale.')->middleware('auth')->group(function () {
  Route::get('/', 'saleController@index')->name('index');
});
Route::prefix('ad')->name('ad.')->middleware('auth')->group(function () {
  Route::get('/', 'adController@index')->name('index');
});
Route::prefix('news')->name('news.')->middleware('auth')->group(function () {
  Route::get('/', 'newsController@index')->name('index');
});
// Route::prefix('config')->name('config.')->middleware('auth')->group(function () {
//   Route::get('/', 'configController@index')->name('index');
// });
