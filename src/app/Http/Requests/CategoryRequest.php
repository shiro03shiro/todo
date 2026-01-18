<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'content'=>['required', 'string', 'max:10','unique']
        ];
    }

    public function messages(){
        return[
            'content.required'=>'カテゴリを入力してください',
            'content.string'=>'カテゴリを文字列で入力してください',
            'content.max'=>'カテゴリを10文字以下で入力してください',
            'content.unique'=>'カテゴリが既に存在しています',
        ];
    }
}
