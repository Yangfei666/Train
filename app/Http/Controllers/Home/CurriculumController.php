<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CurriculumController extends Controller
{
    // 开班
    public function offerCourse()
    {
        return view('home.offerCourse');
    }
    // 开班详情
    public function courseDetail()
    {
        return view('home.courseDetail');
    }
    // 特色课程
    public function specialCourse()
    {
        return view('home.specialCourse');
    }
    // 特色详情
    public function curriculumDetail()
    {
        return view('home.curriculumDetail');
    }
}
