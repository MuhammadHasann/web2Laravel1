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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('matkul', 'matkulController@index')->name('matkul');
Route::get('matkul-create', 'matkulController@create')->name('matkul.create');
Route::post('simpan-matkul', 'matkulController@store')->name('simpan.matkul');
Route::get('edit-matkul/{id}', 'matkulController@edit')->name('matkul.edit');
Route::post('update-matkul/{id}', 'matkulController@update')->name('update.matkul');
Route::get('hapus-matkul/{id}', 'matkulController@destroy')->name('matkul.hapus');
