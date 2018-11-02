<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Environment;
use App\Models\EnvironmentImg;
use App\Models\Teacher;
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
        $teacher = Teacher::orderBy('sort')->get();
        $environments = Environment::with('EnvironmentImg')->where('type', 3)->paginate(2);
        $courses = Course::get();

        // 模版渲染
        return view('home/home', compact('teacher', 'environments', 'courses'));
    }
}
