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
/*学校模块*/
Route::get('/schoolIntroduce', '\App\Http\Controllers\Home\SchoolController@index');// 学校介绍
Route::get('/schoolNews', '\App\Http\Controllers\Home\SchoolController@schoolNews');// 学校新闻
Route::get('/newsDetail', '\App\Http\Controllers\Home\SchoolController@newsDetail');// 学校新闻详情
Route::get('/questionAndAnswer', '\App\Http\Controllers\Home\SchoolController@questionAndAnswer');// 相关问答
Route::get('/environment', '\App\Http\Controllers\Home\SchoolController@environment');// 学校环境
/*课程模块*/
Route::get('/offerCourse', '\App\Http\Controllers\Home\CurriculumController@offerCourse');//开班信息
Route::get('/courseDetail', '\App\Http\Controllers\Home\CurriculumController@courseDetail');//开班详情
Route::get('/specialCourse', '\App\Http\Controllers\Home\CurriculumController@specialCourse');//特色课程
Route::get('/curriculumDetail', '\App\Http\Controllers\Home\CurriculumController@curriculumDetail');//课程详情
/*学员与就业*/
Route::get('/Student', '\App\Http\Controllers\Home\CurriculumController@Student');//学员展示
/*老师模块*/
Route::get('/teacherDetail', '\App\Http\Controllers\Home\TeacherController@teacherDetail');// 老师详情