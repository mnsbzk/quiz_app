<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use App\Http\Requests\QuizRequest;

class QuizController extends Controller
{
    private $question;

    public function __construct(Question $question)
    {
        $this->question = $question;
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
}
