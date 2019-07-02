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
Route::group(['prefix'=>'task'], function (){
   Route::get('index', 'TaskController@index')->name('task.index');
   Route::get('create', 'TaskController@create')->name('task.create');
   Route::post('store', 'TaskController@store')->name('task.store');
   Route::get('{id}/show', 'TaskController@show')->name('task.show');
   Route::get('{id}/edit', 'TaskController@edit')->name('task.edit');
   Route::post('{id}/update', 'TaskController@update')->name('task.update');
   Route::get('{id}/delete', 'TaskController@delete')->name('task.delete');
   Route::post('{id}/delete', 'TaskController@destroy')->name('task.destroy');
});