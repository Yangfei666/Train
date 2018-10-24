<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Login;
use App\Http\Requests\ResetPwd;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Extensions\AuthenticatesLogout;


class UserController extends Controller
{
    use AuthenticatesUsers, AuthenticatesLogout {
        AuthenticatesLogout::logout insteadof AuthenticatesUsers;
    }

    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest.admin', ['except' => 'logout']);
    }

    /**
     * 使用 admin guard
     */
    protected function guard()
    {
        return auth()->guard('admin');
    }

    /**
     * 重写验证时使用的用户名字段
     */
    public function username()
    {
        return 'name';
    }
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
        return view('admin.user.login');
    }
    //登录
    public function login(Login $request)
    {
        $user = $request->only(['name', 'password']);
        $remember = boolval($request->only('remember'));
        if (Auth::guard('admin')->attempt($user, $remember)) {
            return redirect('/admin');
        }
        return \Redirect::back()->withErrors("帐号或密码错误");

    }
    //登出
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');

    }
    //修改密码页面
    public function setting()
    {
        return view('admin.user.setting');
    }
    //修改密码
    public function settingStore(ResetPwd $resetPwd)
    {
        $oldPassword = $resetPwd->input('oldPassword');
        $password = $resetPwd->password;
        dd($password, $oldPassword);
    }

}
