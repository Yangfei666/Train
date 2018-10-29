<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\IdValidate;
use App\Http\Requests\QuestionAndAnswer;
use App\Http\Requests\SchoolInfo;
use App\Models\Question;
use App\Models\School;

class SchoolController extends Controller
{
    // 介绍页面
    public function index ()
    {
        $school = School::first();
        return view('admin.school.editInfo', compact('school'));
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

    // 问答页面
    public function questionAndAnswer ()
    {
        $questions = Question::orderBy('id', 'desc')->paginate (5);
        return view('admin/school/questionAndAnswer', compact('questions'));
    }

    // 添加/编辑问答页面
    public function addQuestionLayout($num)
    {
        if ($num == -1) {
            $questions = [];
        } else {
            $questions = Question::find($num);
        }
        return view('admin.school.addQuestionLayout', compact('questions'));
    }

    // 添加/编辑问答
    public function addQuestionAndAnswer (QuestionAndAnswer $request, IdValidate $req)
    {
        $params = $request->only(['question', 'answer']);
        $id = $request->only(['id']);
        if ($id == -1) {
            Question::create($params);
        } else {
            Question::updateOrCreate(['id', $id], $params);
        }
        return redirect('/admin/questionAndAnswer');
    }

    //删除问答
    public function deleteQuestionAndAnswer (Question $question)
    {
        $question->delete();
        return redirect('/admin/questionAndAnswer');
    }
}
