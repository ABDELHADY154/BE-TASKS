<?php

use Illuminate\Support\Facades\Auth;
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


// Route::get('/', function () {
//     return view('welcome');
// });


// TODO: 
// Route::get('/todo', 'TodoController@index')->name('todo.index');
// Route::post('/todo/store', 'TodoController@store')->name('todo.store');
// Route::delete('/todo/{todo}', 'TodoController@destroy')->name('todo.destroy');
// Route::get('/todo/{todo}/edit', 'TodoController@edit')->name('todo.edit');
// Route::put('/todo/{todo}', 'TodoController@update')->name('todo.update');
Route::get('/', 'TodoController@index')->name('todo.index');

Route::get('/todo', 'TodoController@index')->name('todo.index');

Route::resource('todo', 'TodoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
