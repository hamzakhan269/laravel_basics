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
Route::get('db', 'Users@index');
Route::get('list','Users@list');
// Route::get('list', 'Companies@list');
// Route::post('upload','Users@index');
// Route::view('form','userform');
// // Route::view('form', 'user');
// Route::post('submit', 'Users@submit');
// Route::get('db', 'Customers@dbcheck');