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

define('APP_URL', $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']);

Route::get('/', 'HomeController@index');
