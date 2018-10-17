<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    // 介绍
    public function index ()
    {
        return view('admin/schoolIntroduce');
    }
    //新闻列表
    public function schoolNews ()
    {
        return view('admin/schoolNews');
    }
    // 问答
    public function questionAndAnswer ()
    {
        return view('admin/questionAndAnswer');
    }
    // 环境
    public function environment ()
    {
        return view('admin/environment');
    }
}
