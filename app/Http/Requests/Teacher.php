<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Teacher extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:18|min:1',
            'level' => 'required|string',
            'summary' => 'required|string|max:150|min:10',
            'content' => 'required|max:20000|min:100',
            'sort' => 'required|integer|min:1|max:9999'
        ];
    }
}
