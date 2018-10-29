<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use illuminate\support\facades\route;

class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {

/*		$route = Route::current();

		$name = Route::currentRouteName();

		$action = Route::currentRouteAction();
		dd($route, $name, $action);*/
        // 获取数据
        $teacher = Teacher::orderBy('level')->get();

        // 模版渲染
        return view('home/home', compact('teacher'));
    }
}
