<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'question_text' => 'required|max:255',
            'choice_text' => 'required|array',
            'choice_text.*' => 'required|max:255',
            'is_correct' => 'required|array'
        ];
    }

    public function messages()
    {
        return [
            'question_text.required' => '問題が入力されていません。',
            'question_text.max' => '問題は :max 文字以内で入力してください。',
            'choice_text.*.required' => '選択肢が入力されていません。',
            'choice_text.*.max' => '選択肢 :max 文字以内で入力してください。',
            'is_correct.required' => '正解の選択肢がありません。'
        ];
    }
}
