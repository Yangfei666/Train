<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function teacherDetail()
    {
        return view('home.teacherDetail');
    }
}
