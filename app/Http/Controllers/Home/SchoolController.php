<?php

namespace App\Http\Controllers\Home;

use App\Models\Question;
use App\Models\School;
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
        $questions = Question::orderBy('id', 'desc')->paginate (10);
        return view('home/questionAndAnswer', compact('questions'));
    }
    // 环境
    public function environment ()
    {
        return view('home/environment');
    }
}
