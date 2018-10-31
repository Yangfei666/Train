<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CourseValidate;
use App\Http\Requests\Img;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
    public function addCourse(CourseValidate $courseValidate, Img $img)
    {
        $params = $courseValidate->only(['title', 'content', 'summary']);
        $params['img'] = $this->upload($img->file('img'), 'courseImg/');
        $result = Course::create($params);
        if (!$result) {
            return back()->withErrors(array('message' => '添加失败'));
        }
        return redirect('/admin/courseList');
    }

    //编辑页
    public function editCoursePage(Course $course)
    {
        return view('admin.course.editCoursePage', compact('course'));
    }

    //编辑
    public function editCourse(CourseValidate $courseValidate, Course $course)
    {
        $params = $courseValidate->only(['title', 'content', 'summary']);
        $course->update($params);
        return redirect('/admin/courseList');
    }

    //删除
    public function deleteCourse(Course $course)
    {
        $path = $course->getAttributes()['img'];
        $exists = Storage::disk('upload')->exists($path);
        if ($exists) {
            Storage::disk('upload')->delete($path);//返回值bool
        }
        $course->delete();
        return back();
    }

    //详情
    public function infoCourse(Course $course)
    {
        return view('admin.course.infoCourse', compact('course'));
    }
    // 图片编辑页面
    public function imgChangePage(Course $course)
    {
        return view('admin.course.imgChange', compact('course'));
    }

    // 图片编辑
    public function imgChange(Course $course, Img $img)
    {
        $img = $this->upload($img->file('img'), 'courseImg/');
        $path = $course->getAttributes()['img'];
        $exists = Storage::disk('upload')->exists($path);
        if ($exists) {
            Storage::disk('upload')->delete($path);//返回值bool
        }
        $course->update(['img' => $img]);
        return redirect('/admin/courseList');
    }
}
