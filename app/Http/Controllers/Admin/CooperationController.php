<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\IdValidate;
use App\Models\Environment;
use App\Models\EnvironmentImg;
use Illuminate\Support\Facades\DB;

class CooperationController extends Controller
{

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
            EnvironmentImg::where('environment_id', $eid)->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
        return back();
    }

    // 环境图片
    public function environmentImg (Environment $environment)
    {
        $imgs = EnvironmentImg::where('environment_id', $environment->id)->get();
        return view('admin/environment/environmentImg', compact('imgs', 'environment'));
    }

    // 环境图片添加
    public function addEnvironmentImg(IdValidate $idValidate)
    {
        $id = $idValidate->id;
        $path = $this->upload(request()->file('img'), 'environmentImg/');
        $result = EnvironmentImg::create(['img' => $path, 'environment_id' => $id]);
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
