<?php

namespace App\Http\Controllers\Admin;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher as TeacherValidate;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    // 列表
    public function teacherList ()
    {
        $teachers = Teacher::paginate (5);
        return view('admin.teacher.teacher', compact('teachers'));
    }
    // 添加页面
    public function addPage()
    {
        return view('admin.teacher.addTeacher');
    }
    // 添加
    public function addTeacher(TeacherValidate $teacher)
    {
        $params = $teacher->only(['name','level','summary','content']);
        $params['img'] = $this->upload($teacher->file('img'), 'teacherImg/');
        $result = Teacher::create($params);
        if (!$result) {
            return back()->withErrors(array('message' => '添加失败'));
        }
        return redirect('/admin/teacherList');
    }

    // 详情
    public function infoTeacher(Teacher $teacher)
    {
        return view('admin/teacher/info', compact('teacher'));
    }
    // 编辑页面
    public function editPage(Teacher $teacher)
    {
        return view('admin.teacher.edit', compact('teacher'));
    }
    // 编辑
    public function editTeacher(Teacher $teacher)
    {


    }
    // 删除
    public function deleteTeacher(Teacher $teacher)
    {
        // getAttributes()获取原始值
        $path = $teacher->getAttributes()['img'];
        $exists = Storage::disk('upload')->exists($path);
        if ($exists) {
            Storage::disk('upload')->delete($path);//返回值bool
        }
        $res = $teacher->delete();
        if ($res) return back();
    }
}
