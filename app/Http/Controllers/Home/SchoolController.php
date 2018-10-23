<?php

namespace App\Http\Controllers\Home;

use App\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    // 介绍
    public function index ()
    {
        $schoolInfo = School::first();
        return view('home/schoolIntroduce', compact('schoolInfo'));
    }
    //新闻列表
    public function schoolNews ()
    {
        return view('home/schoolNews');
    }
    // 问答
    public function questionAndAnswer ()
    {
        return view('home/questionAndAnswer');
    }
    // 环境
    public function environment ()
    {
        return view('home/environment');
    }
}
