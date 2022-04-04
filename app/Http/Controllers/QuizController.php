<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    private $question;

    public function __construct(Question $question)
    {
        $this->question = $question;
    }

    public function create()
    {
        return view('quiz.create');
    }

    public function store()
    {
        $inputs = $request->all();
        $this->quiz->fill($inputs);
        $this->quiz->save();
    }
}
