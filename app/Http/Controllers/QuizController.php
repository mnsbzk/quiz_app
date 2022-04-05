<?php

namespace App\Http\Controllers;

use App\Question;
use App\Choice;
use Illuminate\Http\Request;
use App\Http\Requests\QuizRequest;
use App\Http\Requests\ChoiceRequest;

class QuizController extends Controller
{
    private $question;
    private $choice;

    public function __construct(Question $question, Choice $choice)
    {
        $this->question = $question;
        $this->choice = $choice;
    }

    // 問題一覧表示の為のデータ取得
    public function index()
    {
        $questions = $this->question->all();
        return view('quiz.index', ['questions' => $questions]);
    }

    // 問題作成画面遷移
    public function create()
    {
        return view('quiz.create');
    }

    // 問題新規作成処理
    public function store(QuizRequest $request)
    {
        $inputs = $request->all();
        $this->question->fill($inputs);
        $this->question->save();
        return redirect()->route('quiz.index');
    }

    // 問題詳細表示の為のデータ取得
    public function show($id)
    {
        $question = $this->question->find($id);
        return view('quiz.show', ['question' => $question]);
    }

    // 問題更新画面遷移時のデータ取得
    public function edit($id)
    {
        $question = $this->question->find($id);
        return view('quiz.edit', ['question' => $question]);
    }

    // 問題更新処理
    public function update(QuizRequest $request, $id)
    {
        $inputs = $request->all();
        $question = $this->question->find($id);
        $question->fill($inputs);
        $question->save();
        return redirect()->route('quiz.show', $question->id);
    }

    // 問題削除処理（論理削除）
    public function delete($id)
    {
        $question = $this->question->find($id);
        $question->delete();
        return redirect()->route('quiz.index');
    }

    // 選択肢新規作成処理
    public function StoreChoice(ChoiceRequest $request,$QuestionId)
    {
        $inputs = $request->all();
        $inputs += array('question_id'=>$QuestionId);
        if(array_key_exists('is_correct',$inputs) === false){
            $inputs += array('is_correct'=>'0');
        } else {
            $inputs['is_correct'] = '1';
        }
        $this->choice->fill($inputs);
        $this->choice->save();
        return redirect()->route('quiz.show', $QuestionId);
    }

    // 選択肢一覧取得
    public function IndexChoice($QuestionId)
    {
        $choices = $this->choice->all($QuestionId);
        $question = $this->question->find($QuestionId);
        dd($choices);
        return view('quiz.show', ['choices' => $choices,'question' => $question]);
    }
}
