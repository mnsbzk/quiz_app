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
        // $question = $this->question->find($id);
        // dd($question->choices);
        $questions = $this->question->all();
        dd($questions);
        return view('quiz.test');
    }
}
