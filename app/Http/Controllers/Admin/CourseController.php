<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CourseValidate;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    //列表
    public function courseList()
    {
        $courses = Course::get();
        return view('admin.course.courseList', compact('courses'));
    }

    //添加页
    public function addCoursePage()
    {
        return view('admin.course.addCoursePage');
    }

    //添加
    public function addCourse(CourseValidate $courseValidate)
    {
        $params = $courseValidate->only(['title', 'content', 'summary']);
        $params['img'] = $this->upload($courseValidate->file('img'), 'courseImg/');
        $result = Course::create($params);
        if (!$result) {
            return back()->withErrors(array('message' => '添加失败'));
        }
        return redirect('/admin/courseList');
    }

    //编辑页
    public function editCoursePage()
    {
        return view('admin.course.editCoursePage');
    }

    //编辑
    public function editCourse(CourseValidate $courseValidate)
    {
        $params = $courseValidate->only(['title', 'content', 'summary']);
        $params['img'] = $this->upload($courseValidate->file('img'), 'courseImg/');
//        $result = Course::create($params);
//        if (!$result) {
//            return back()->withErrors(array('message' => '编辑失败'));
//        }
        return redirect('/admin/courseList');
    }

    //删除
    public function deleteCourse(Course $course)
    {
        $course->delete();
        return back();
    }

    //详情
    public function infoCourse(Course $course)
    {
        return view('admin.course.infoCourse', compact('course'));
    }
}
