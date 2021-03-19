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
    // $to_name='hamza khan';
    // $to_email= "hamzakhan0269@gmail.com";
    // $data= array('name' => 'ali', 'body' => "Test mail like");
    // Mail::send('mail', $data, function ($message) use ($to_name, $to_email) {
    // 	$message->to($to_email)
    // 		->subject('Web testting mail');
    // });
    // echo "email has been sent";
 
});
Route::get('export', 'Products@exportData');
// Route::get('pdf','PDFmaker@gen');
// Route::get('db', 'Users@index');
// Route::get('list','Users@list');
// Route::post('submit', 'Companies@save');
// Route::post('update', 'Companies@update');
// Route::view('form', 'companyform');
// Route::get('list', 'Companies@list');
// Route::post('upload','Users@index');
// Route::view('form','userform');
// // Route::view('form', 'user');
// Route::post('submit', 'Users@submit');
// Route::get('db', 'Customers@dbcheck');