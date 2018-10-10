<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    // 介绍
    public function index ()
    {
        return view('home/schoolIntroduce');
    }
    //新闻列表
    public function schoolNews ()
    {
        return view('home/schoolNews');
    }
    // 新闻详情
    public function newsDetail ()
    {
        return view('home/newsDetail');
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
