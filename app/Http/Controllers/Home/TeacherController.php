<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    //老师列表
    public function teacher()
    {
        return view('home.teacher');
    }
    //老师详情
    public function teacherDetail()
    {
        return view('home.teacherDetail');
    }
}
