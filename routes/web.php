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

//重定向首页
Route::redirect('/', '/home', 301);
// Route::get('/', function () {
// 	return Redirect::to('home');
// });
/* 前台模块 */
Route::namespace('Home')->group(function () {
	Route::get('/home', 'HomeController@index');
	/*学校模块*/
	Route::get('/schoolIntroduce', 'SchoolController@index');// 学校介绍
	Route::get('/schoolNews', 'SchoolController@schoolNews');// 学校新闻
	Route::get('/questionAndAnswer', 'SchoolController@questionAndAnswer');// 相关问答
	Route::get('/environment', 'SchoolController@environment');// 学校环境
	/*课程模块*/
	Route::get('/offerCourse', 'CurriculumController@offerCourse');//开班信息
	Route::get('/courseDetail', 'CurriculumController@courseDetail');//开班详情
	Route::get('/specialCourse', 'CurriculumController@specialCourse');//特色课程
	Route::get('/curriculumDetail', 'CurriculumController@curriculumDetail');//课程详情
	/*学员与就业*/
	Route::get('/Student', 'StudentController@index');//学员展示
	Route::get('/StudentDetail', 'StudentController@StudentDetail');//学员详情
	Route::get('/certificate', 'StudentController@certificate');//证书查询
	/*瑜伽资讯*/
	Route::get('/knowledge', 'InformationController@knowledge');//瑜伽知识
	Route::get('/knowledgeDetail', 'InformationController@knowledgeDetail');//知识详情
	Route::get('/yogaNews', 'InformationController@yogaNews');//瑜伽新闻
	Route::get('/newsDetail', 'InformationController@newsDetail');// 新闻详情
	/*老师模块*/
	Route::get('/teacher', 'TeacherController@teacher');// 老师列表
	Route::get('/teacherDetail', 'TeacherController@teacherDetail');// 老师详情
	/*联系报名*/
	Route::get('/contact', 'ContactController@contact');// 联系报名页面
});



/**
 * 后台路由
*/
Route::namespace('Admin')->prefix('admin')->group(function () {
	/*后台首页*/
	Route::get('/', 'AdminHomeController@index');
	/* 学校模块 */
	Route::get('/schoolIntroduce', 'SchoolController@index');// 学校介绍页面
	Route::post('/editSchoolIntroduce', 'SchoolController@editSchoolIntroduce');// 编辑学校介绍
	Route::get('/schoolNews', 'SchoolController@schoolNews');// 学校新闻
	Route::get('/questionAndAnswer', 'SchoolController@questionAndAnswer');// 相关问答
	Route::get('/environment', 'SchoolController@environment');// 学校环境
});
