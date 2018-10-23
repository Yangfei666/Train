<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolInfo extends FormRequest
{
    /**
     * 验证规则
     *
     * @return array
     */
    public function rules()
    {
        return [
            'abstract' => 'required|string|max:100|min:3',
            'content' => 'required|max:20000|min:3',
        ];
    }

    /**
     * 判断用户是否有权限做出此请求。
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
