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

    public function index()
    {
        $questions = $this->question->all();
        return view('quiz.index', ['questions' => $questions]);
    }

    public function create()
    {
        return view('quiz.create');
    }

    public function store(QuizRequest $request)
    {
        $inputs = $request->all();
        $this->question->fill($inputs);
        $this->question->save();
        return redirect()->route('quiz.index');
    }

    public function show($id)
    {
        $question = $this->question->find($id);
        return view('quiz.show', ['question' => $question]);
    }

    public function edit($id)
    {
        $question = $this->question->find($id);
        return view('quiz.edit', ['question' => $question]);
    }

    public function update(QuizRequest $request, $id)
    {
        $inputs = $request->all();
        $question = $this->question->find($id);
        $question->fill($inputs);
        $question->save();
        return redirect()->route('quiz.show', $question->id);
    }

    public function delete($id)
    {
        $question = $this->question->find($id);
        $question->delete();
        return redirect()->route('quiz.index');
    }
}
