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
    return view('welcome');
});

Route::get('post','PostController@index');
Route::get('postCreate','PostController@postCreate');
Route::post('postData','PostController@postData')->name('postData');
Route::get('postUpdate/edit/{id}','PostController@edit');
Route::put('postUpdate/edit/{id}','PostController@postUpdate');