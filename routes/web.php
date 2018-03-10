<?php


Route::get('/dashboard','BookController@index');
Route::get('books/create','BookController@create');
Route::post('/dashboard', 'BookController@store');
Route::get('/edit/{id}','BookController@show');
Route::post('/update', 'BookController@update');
Route::get('/delete/{id}','BookController@remove');

Route::get('/','OrderController@index');
Route::get('/cart/{id}','OrderController@show');
Route::post('/store', 'OrderController@store');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
