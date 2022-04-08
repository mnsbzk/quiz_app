<?php

namespace App\Http\Controllers;

use App\Question;
use App\Choice;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $question;
    private $choice;

    public function __construct(Question $question, Choice $choice)
    {
        $this->question = $question;
        $this->choice = $choice;
    }

    // 問題・選択肢一覧表示
    public function index()
    {
        $questions = $this->question->all();
        return view('quiz.test', ['questions' => $questions]);
    }

    // 採点処理
    public function answer(Request $request)
    {
        $questions = $this->question->all();
        $inputs = $request->all();
        // dd($inputs);
        $IsCorrectList = [];
        $IsCorrectChoices = [];
        $CheckedChoices = [];
        $SavedCorrectAnswers = [];
        foreach ($questions as $question)
        {
            $UserAnswers = [];
            if (array_key_exists('is_correct'. $question->id, $inputs))
            {
                $UserAnswers = $inputs['is_correct_'. $question->id];
            }
            $CorrectAnswers = [];
            foreach ($question->choices as $choice)
            {
                // 正解の配列を作る処理
                if($choice->is_correct === 1)
                {
                    $CorrectAnswers[] = $choice->id;
                }

                // 正当があっている選択肢の配列を作る処理
                if ($choice->is_correct === 1)
                {
                    if (in_array($choice->id, $inputs['is_correct_'. $question->id]))
                    {
                        $IsCorrectChoices[] = $choice->id;
                    }
                }
                else
                {
                    if (in_array($choice->id, $inputs['is_correct_'. $question->id]) === false)
                    {
                        $IsCorrectChoices[] = $choice->id;
                    }
                }
                
            }

            if($UserAnswers == $CorrectAnswers)
            {
                $IsCorrectList[] = $question->id;
            }

            // チェックしたchoice_idの記録
            foreach ($inputs['is_correct_'. $question->id] as $cheked)
            {
                $CheckedChoices[] = $cheked;
            }

            // 正解のchoice_idの記録
            foreach ($CorrectAnswers as $CorrectAnswer)
            {
                $SavedCorrectAnswers[] = $CorrectAnswer;
            }
        }
        $CorrectCount = count($IsCorrectList);
        $QuestionCount = count($inputs['question_id']);
        // dd($CheckedChoices);
        return view('quiz.answer',['IsCorrectList' => $IsCorrectList, 'CorrectCount' => $CorrectCount, 'QuestionCount' => $QuestionCount, 'questions' => $questions, 'IsCorrectChoices' => $IsCorrectChoices, 'CheckedChoices' => $CheckedChoices, 'SavedCorrectAnswers' => $SavedCorrectAnswers]);
    }
}
