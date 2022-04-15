<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuizRequest extends FormRequest
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
            'question_text' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'question_text.required' => '問題が入力されていません。',
            'question_text.max' => '問題は :max 文字以内で入力してください。',
        ];
    }
}
