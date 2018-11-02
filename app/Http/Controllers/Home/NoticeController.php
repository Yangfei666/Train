<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\Notice as NoticeValidate;
use App\Models\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoticeController extends Controller
{
    /**
     * 添加操作
     */
    public function add(Request $request, NoticeValidate $notice)
    {
        if (!$request->ajax()) return ['status' => false, 'msg' => '滚!!!'];
        $params = $notice->only(['name', 'tel', 'content']);
        $result = Notice::create($params);
        if (!$result) return ['status' => false, 'msg' => '对不起,资料提交失败!!请直接电话联系我们'];
        return ['status' => true, 'msg' => '恭喜您,报名成功!!请注意接听我的回访电话!!!'];
    }

}
