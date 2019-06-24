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

Route::get('/', 'AdminController@index')->name('home');


Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');

Route::group(
    [
      'prefix' => 'admin',
      'namespace' => 'Admin',
      'middleware' => 'auth'
    ],
    function () {
      Route::get('/', 'AdminController@index')->middleware('auth')->name('admin');
      Route::get('categorias', 'CategoriaController@index')->name('admin.categorias.index');
      Route::get('categorias/create', 'CategoriaController@create')->name('admin.categorias.create');
      Route::post('categorias', 'CategoriaController@store')->name('admin.categorias.store');

      Route::get('recursos_digitales', 'RecursoDigitalController@index')->name('admin.recursos_digitales.index');
      Route::get('recursos_digitales/create', 'RecursoDigitalController@create')->name('admin.recursos_digitales.create');
      Route::post('recursos_digitales', 'RecursoDigitalController@store')->name('admin.recursos_digitales.store');
      Route::post('recursos_digitales/{id}/delete', 'RecursoDigitalController@destroy')->name('admin.recursos_digitales.destroy');
      Route::get('recursos_digitales/edit/{id}', 'RecursoDigitalController@edit')->name('admin.recursos_digitales.edit');
      Route::put('recursos_digitales/update/{id}', 'RecursoDigitalController@update')->name('admin.recursos_digitales.update');
    }
  );
 
