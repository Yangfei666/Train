<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    //首页
    public function index()
    {
        return view('admin.adminHome', ['name' => '张三', 'arr' => [1,1,1,1,1,1,1]]);
    }
}
