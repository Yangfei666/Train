<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\support\facades\route;

class HomeController extends Controller
{
    public function index()
    {

/*		$route = Route::current();

		$name = Route::currentRouteName();

		$action = Route::currentRouteAction();
		dd($route, $name, $action);*/
        // 获取数据
        // 模版渲染
        return view('home/home');
    }
}
