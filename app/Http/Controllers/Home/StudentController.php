<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    //学员展示
    public function index ()
    {
        return view('home.Student');
    }
    //学员详情
    public function StudentDetail ()
    {
        return view('home.StudentDetail');
    }
    //证书查询
    public function certificate ()
    {
        return view('home.certificate');
    }
}
