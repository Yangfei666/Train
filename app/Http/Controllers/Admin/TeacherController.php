<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Img;
use App\Http\Requests\Teacher as TeacherValidate;
use App\Models\Teacher;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    // 列表
    public function teacherList()
    {
        $teachers = Teacher::orderBy('sort')->paginate(5);
        return view('admin.teacher.teacher', compact('teachers'));
    }

    // 排序页面
    public function teacherSortPage()
    {
        $teachers = Teacher::orderBy('sort')->get();
        return view('admin.teacher.teacherSortPage', compact('teachers'));
    }

    // 排序
    public function teacherSort()
    {
        $params = \request()->all();
        foreach ($params as $key => $value) {
            Teacher::where('id', $key)->update(['sort' => $value]);
        }
        return redirect('admin/teacherList');
    }

    // 添加页面
    public function addPage()
    {
        return view('admin.teacher.addTeacher');
    }

    // 添加
    public function addTeacher(TeacherValidate $teacher, Img $img)
    {
        $params = $teacher->only(['name', 'level', 'summary', 'content', 'sort']);
        $params['img'] = $this->upload($img->file('img'), 'teacherImg/');
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
    public function editTeacher(Teacher $teacher, TeacherValidate $teacherValidate)
    {
        $params = $teacherValidate->only(['name', 'level', 'summary', 'content', 'sort']);
        $teacher->update($params);
        return redirect('/admin/teacherList');
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

    // 图片编辑页面
    public function imgChangePage(Teacher $teacher)
    {
        return view('admin.teacher.imgChange', compact('teacher'));
    }

    // 图片编辑
    public function imgChange(Teacher $teacher, Img $img)
    {
        $img = $this->upload($img->file('img'), 'teacherImg/');
        $path = $teacher->getAttributes()['img'];
        $exists = Storage::disk('upload')->exists($path);
        if ($exists) {
            Storage::disk('upload')->delete($path);//返回值bool
        }
        $teacher->update(['img' => $img]);
        return redirect('/admin/teacherList');
    }
}
