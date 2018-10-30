<?php

namespace App\Http\Controllers\Home;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CurriculumController extends Controller
{
    // 课程
    public function offerCourse()
    {
        $courses = Course::get();
        return view('home.offerCourse',compact('courses'));
    }

    // 特色详情
    public function courseDetail(Course $course)
    {
        return view('home.courseDetail', compact('course'));
    }
}
