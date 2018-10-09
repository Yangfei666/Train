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

// 首页
Route::get('/home', '\App\Http\Controllers\Home\HomeController@index');
// 学校介绍
Route::get('/school', '\App\Http\Controllers\Home\SchoolController@index');