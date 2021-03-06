<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Login extends FormRequest
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
            'tel' => 'regex:/^[1][3,5,6,7,8,9][0-9]{9}$/',
            'password' => 'required|min:6|max:18',
            'remember' => 'integer|in:1'
        ];
    }
}
