<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/siswa', 'SiswaController@index');

// Route::get('/semuasiswa', 'StudentsController@index');
// Route::get('/students/{student}', 'StudentsController@show');
// Route::delete('/students/{student}', 'StudentsController@destroy');
// Route::get('/students/{student}/edit', 'StudentsController@edit');
// Route::get('/tambah', 'StudentsController@create');
// Route::post('/create', 'StudentsController@store');
// Route::patch('/students/{student}', 'StudentsController@update');

Route::resource('students', 'StudentsController');
Route::resource('tambah', 'StudentsController');
Route::resource('create', 'StudentsController');
Route::resource('semuasiswa', 'StudentsController');