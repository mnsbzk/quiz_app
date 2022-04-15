<?php

namespace App\Http\Controllers;

use App\Question;
use App\Choice;
use App\Answer_Result;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $question;
    private $choice;

    public function __construct(Question $question, Choice $choice, Answer_Result $result)
    {
        $this->question = $question;
        $this->choice = $choice;
        $this->result = $result;
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
        // ユーザーが正解だった問題を記録する配列
        $correctQuestionList = [];
        // ユーザーが正解だった選択肢
        $correctChoiceList = [];
        // ユーザーがチェックした選択肢
        $checkedChoiceList = [];
        // 正解である選択肢を記録する配列
        $correctAnswerList = [];
        foreach ($questions as $question)
        {
            // 正解の選択肢を記録する配列
            $correctChoices = [];
            foreach ($question->choices as $choice)
            {
                // 正解の配列を作る処理
                if($choice->is_correct === 1)
                {
                    $correctChoices[] = $choice->id;
                }

                // dd($inputs);
                // 正当があっている選択肢の配列を作る処理
                if ($choice->is_correct)
                {
                    if (isset($inputs['is_correct_'. $question->id]) && in_array($choice->id, $inputs['is_correct_'. $question->id]))
                    {
                        $correctChoiceList[] = $choice->id;
                    }
                }
                else
                {
                    if (isset($inputs['is_correct_'. $question->id]) && in_array($choice->id, $inputs['is_correct_'. $question->id]) === false)
                    {
                        $correctChoiceList[] = $choice->id;
                    }
                    elseif (!isset($inputs['is_correct_'. $question->id]))
                    {
                        $correctChoiceList[] = $choice->id;
                    }
                }

            }

            // ユーザーの解答を記録する配列、チェックしたchoice_idの記録
            $userIsCorrectChoices = [];
            if (isset($inputs['is_correct_'. $question->id]))
            {
                foreach ($inputs['is_correct_'. $question->id] as $checked)
                {
                    $userIsCorrectChoices[] = $checked;
                    $checkedChoiceList[] = $checked;
                }
            }

            // 正解のquestion_idの記録
            if($userIsCorrectChoices == $correctChoices)
            {
                $correctQuestionList[] = $question->id;
            }

            // 正解のchoice_idの記録
            foreach ($correctChoices as $correctChoice)
            {
                $correctAnswerList[] = $correctChoice;
            }
        }
        
        $correctCount = count($correctQuestionList);
        $questionCount = count($inputs['question_id']);

        // 解答結果保存
        $resultInput = ['score' => $correctCount, 'questions' => $questionCount];
        $this->result->fill($resultInput);
        $this->result->save();

        // 解答結果一覧取得
        $results = $this->result->orderby('created_at')->get();

        return view('quiz.answer', [
            'correctQuestionList' => $correctQuestionList,
            'correctCount' => $correctCount,
            'questionCount' => $questionCount,
            'questions' => $questions,
            'correctChoiceList' => $correctChoiceList,
            'checkedChoiceList' => $checkedChoiceList,
            'correctAnswerList' => $correctAnswerList,
            'results' => $results,
        ]);
    }
}
