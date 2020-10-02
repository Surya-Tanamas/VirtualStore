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

// Define Apps Title
define("APP_TITLE", "Virtual Store");

Route::post('/register', 'LoginController@registration')->name('register');
Route::get('/register', 'LoginController@register');

Route::post('/login', 'LoginController@authenticate')->name('login');
Route::get('/login', 'LoginController@login');

Route::get('/logout', 'LoginController@logout')->name('logout');

/*
Route::get('send-mail', function () {
    $details = [ 'body' => 'This is for testing email using smtp' ];
    \Mail::to('suryatanamas@gmail.com')->send(new \App\Mail\TestMail($details));
    dd("Email is Sent.");
});
*/

Route::get('/send-mail', 'UserController@email');

Route::post('/simpan', 'PostController@simpan')->middleware('auth');
Route::post('/pesan', 'PostController@pesan');
Route::post('/{page}', 'PostController@index');

Route::get('/konfirmasi', 'UserController@sementara')->middleware('auth');

Route::get('/pesan', 'UserController@pesan');
Route::get('/tambah', 'AjaxController@index');
//Route::get('/{page}', 'UserController@index');
Route::get('/', 'UserController@index');
