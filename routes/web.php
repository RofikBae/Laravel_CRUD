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

// Route::get('/', function () {
//     return view('welcome');
// });

// pages
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');

// students
Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::post('/students', 'StudentsController@store');
Route::get('/students/{student}/edit', 'StudentsController@edit');
Route::get('/students/{student}', 'StudentsController@show');
Route::delete('/students/{student}', 'StudentsController@destroy');
Route::patch('/students/{student}', 'StudentsController@update');
