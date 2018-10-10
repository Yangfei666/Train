<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    //学员展示
    public function Student ()
    {
        return view('home.Student');
    }
}
