<?php

/*
|--------------------------------------------------------------------------
|后台路由
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 只有认证过的用户可以进入(必须登录)
Route::namespace('Admin')->prefix('admin')->group(function () {
    //不需要登录
    Route::get('/login', 'UserController@index');// 登录页面
    Route::post('/login', 'UserController@login');// 登录
    Route::get('/logout', 'UserController@logout');// 退出

    //需要登录
    Route::group(['middleware' => 'auth:admin'], function(){
        Route::get('/', 'AdminHomeController@index');/*后台首页*/

        Route::get('/user/me/setting', 'UserController@setting');// 修改密码页面
        Route::put('/user/me/setting', 'UserController@settingStore');// 修改密码

        /* 学校模块 */
        Route::get('/schoolIntroduce', 'SchoolController@index');// 学校介绍页面
        Route::put('/editSchoolIntroduce', 'SchoolController@editSchoolIntroduce');// 编辑学校介绍
        Route::get('/schoolNews', 'SchoolController@schoolNews');// 学校新闻
        Route::get('/questionAndAnswer', 'SchoolController@questionAndAnswer');// 相关问答列表页
        Route::get('/addQuestionLayout/{num}', 'SchoolController@addQuestionLayout');// 相关问答添加编辑页
        Route::match(['put', 'post'], '/addQuestionAndAnswer', 'SchoolController@addQuestionAndAnswer');// 相关问答添加/编辑
        Route::get('/deleteQuestionAndAnswer/{question}', 'SchoolController@deleteQuestionAndAnswer');// 相关问答删除
        Route::get('/environment', 'SchoolController@environment');// 学校环境
        /* 老师模块 */
        Route::get('/teacherList', 'TeacherController@teacherList');// 老师列表
        Route::get('/addPage', 'TeacherController@addPage');// 老师添加页面
        Route::get('/editPage/{teacher}', 'TeacherController@editPage');// 老师编辑页面
        Route::get('/infoTeacher/{teacher}', 'TeacherController@infoTeacher');// 老师详情
        Route::post('/addTeacher', 'TeacherController@addTeacher');// 老师添加
        Route::put('/editTeacher/{teacher}', 'TeacherController@editTeacher');// 老师编辑
        Route::put('/infoTeacher/{teacher}', 'TeacherController@infoTeacher');// 老师详情
        Route::get('/deleteTeacher/{teacher}', 'TeacherController@deleteTeacher');// 老师删除
    });
});

