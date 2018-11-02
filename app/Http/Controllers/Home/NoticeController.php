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
    public function add(NoticeValidate $notice)
    {
        $params = $notice->only(['name', 'tel', 'content']);
        $result = Notice::create($params);
        if (!$result) return back()->withErrors('对不起,网络客服正在忙,请您主动电话联系我们,谢谢!!');
        return redirect('/contact')->with('message', '恭喜您报名成功,我们会尽快跟您联系,请注意接听我们的电话哦~~~');
    }

}
