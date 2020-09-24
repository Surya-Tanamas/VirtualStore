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

Route::post('/pesan', 'PostController@pesan');
Route::post('/{page}', 'PostController@index');

Route::get('/tambah', 'AjaxController@index');
Route::get('/{page}', 'UserController@index');
Route::get('/', 'UserController@index');
