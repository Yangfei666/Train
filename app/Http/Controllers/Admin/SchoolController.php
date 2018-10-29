<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\IdValidate;
use App\Http\Requests\QuestionAndAnswer;
use App\Http\Requests\SchoolInfo;
use App\Models\Environment;
use App\Models\EnvironmentImg;
use App\Models\Question;
use App\Models\School;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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

    // 环境页面
    public function environment ()
    {
        $environments = Environment::get();
        return view('admin/environment/environment', compact('environments'));
    }

    // 环境添加页面
    public function addEnvironmentPage ()
    {
        return view('admin/environment/addEnvironment');
    }

    // 环境添加
    public function addEnvironment (\App\Http\Requests\Environment $environment)
    {
        $params = $environment->only(['title', 'type']);
        $result = Environment::create($params);
        if (!$result) {
            return back()->withErrors(array('message' => '添加失败'));
        }
        return redirect('/admin/environment');
    }

    // 环境删除
    public function deleteEnvironment (Environment $environment)
    {
        DB::beginTransaction();
        try{
            $environment->delete();
            $eid = $environment->id;
            EnvironmentImg::where('senvironment_id', $eid)->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
        return back();
    }

    // 环境图片
    public function environmentImg (Environment $environment)
    {
        $imgs = EnvironmentImg::where('senvironment_id', $environment->id)->get();
        return view('admin/environment/environmentImg', compact('imgs', 'environment'));
    }

    // 环境图片添加
    public function addEnvironmentImg(IdValidate $idValidate)
    {
        $id = $idValidate->id;
        $path = $this->upload(request()->file('img'), 'environmentImg/');
        $result = EnvironmentImg::create(['img' => $path, 'senvironment_id' => $id]);
        if (!$result) {
            return back()->withErrors(array('message' => '添加失败'));
        }
        return back();
    }

    // 环境图片删除
    public function deleteEnvironmentImg(EnvironmentImg $environmentImg)
    {
        $environmentImg->delete();
        return back();
    }
}
