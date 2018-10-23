<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SchoolInfo;
use App\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    // 介绍页面
    public function index ()
    {
        return view('admin.school.editInfo', ['name' => '张三', 'arr' => [1,1,1,1,1,1,1]]);
    }
    // 编辑介绍
    public function editSchoolIntroduce (SchoolInfo $request)
    {
        $params = $request->only(['abstract', 'content']);
        School::updateOrCreate(['id' => 1], $params);
        return redirect('/admin');
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
