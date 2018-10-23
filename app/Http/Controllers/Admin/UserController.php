<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Login;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
//    public function aaa()
//    {
//        $password = bcrypt(request('password'));
//        $name = request('name');
//        $email = request('email');
//        $user = \App\User::create(compact('name', 'email', 'password'));
//    }
    //登录页面
    public function index()
    {
        return view('admin/user/login');
    }
    //登录
    public function login(Login $request)
    {
        $user = $request->only(['email', 'password']);
        $remember = boolval($request->only('remember'));
        if (true == \Auth::attempt($user, $remember)) {
            return redirect('/admin');
        }
        return \Redirect::back()->withErrors("帐号或密码错误");

    }
    //登出
    public function logout()
    {
        \Auth::logout();
        return \Redirect::to('/admin/user/login');

    }
    //修改密码页面
    public function setting()
    {
        return view('admin.user.setting');
    }
    //修改密码
    public function settingStore()
    {

    }

}
