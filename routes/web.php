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
Route::get('/questionAndAnswer', '\App\Http\Controllers\Home\SchoolController@questionAndAnswer');// 相关问答
Route::get('/environment', '\App\Http\Controllers\Home\SchoolController@environment');// 学校环境
/*课程模块*/
Route::get('/offerCourse', '\App\Http\Controllers\Home\CurriculumController@offerCourse');//开班信息
Route::get('/courseDetail', '\App\Http\Controllers\Home\CurriculumController@courseDetail');//开班详情
Route::get('/specialCourse', '\App\Http\Controllers\Home\CurriculumController@specialCourse');//特色课程
Route::get('/curriculumDetail', '\App\Http\Controllers\Home\CurriculumController@curriculumDetail');//课程详情
/*学员与就业*/
Route::get('/Student', '\App\Http\Controllers\Home\StudentController@index');//学员展示
Route::get('/StudentDetail', '\App\Http\Controllers\Home\StudentController@StudentDetail');//学员详情
Route::get('/certificate', '\App\Http\Controllers\Home\StudentController@certificate');//证书查询
/*瑜伽资讯*/
Route::get('/knowledge', '\App\Http\Controllers\Home\InformationController@knowledge');//瑜伽知识
Route::get('/knowledgeDetail', '\App\Http\Controllers\Home\InformationController@knowledgeDetail');//知识详情
Route::get('/yogaNews', '\App\Http\Controllers\Home\InformationController@yogaNews');//瑜伽新闻
Route::get('/newsDetail', '\App\Http\Controllers\Home\InformationController@newsDetail');// 新闻详情
/*老师模块*/
Route::get('/teacher', '\App\Http\Controllers\Home\TeacherController@teacher');// 老师列表
Route::get('/teacherDetail', '\App\Http\Controllers\Home\TeacherController@teacherDetail');// 老师详情
/*联系报名*/
Route::get('/contact', '\App\Http\Controllers\Home\ContactController@contact');// 联系报名页面


/**
 * 后台路由
*/
/*后台首页*/
Route::get('/admin', '\App\Http\Controllers\Admin\AdminHomeController@index');
/* 学校模块 */
Route::get('/admin/schoolIntroduce', '\App\Http\Controllers\Admin\SchoolController@index');// 学校介绍
Route::get('/admin/schoolNews', '\App\Http\Controllers\Admin\SchoolController@schoolNews');// 学校新闻
Route::get('/admin/questionAndAnswer', '\App\Http\Controllers\Admin\SchoolController@questionAndAnswer');// 相关问答
Route::get('/admin/environment', '\App\Http\Controllers\Admin\SchoolController@environment');// 学校环境