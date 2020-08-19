<?php

Auth::routes();
Route::get('/', 'adminController@index')->name('home');
Route::prefix('menu')->name('menu.')->middleware('auth')->group(function () {
  Route::get('/', 'menuController@index')->name('index');
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
