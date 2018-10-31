<?php

namespace App\Http\Controllers\Home;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    //老师列表
    public function teacher()
    {
        $teacher = Teacher::orderBy('sort')->get();
        return view('home.teacher', compact('teacher'));
    }

    //老师详情
    public function teacherDetail(Teacher $teacher)
    {
        return view('home.teacherDetail', compact('teacher'));
    }
}
