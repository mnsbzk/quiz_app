@extends('layouts.base')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <p class="text-left">
      <a class="btn btn-success" href="/quiz/create">問題を追加</a>
    </p>
    <div class="card">
      <div class="card-header">
        問題一覧
      </div>
      <div class="list-group list-group-flush">
      @foreach ($questions as $question)
        <a href="{{ route('quiz.show', $question->id) }}" class="list-group-item list-group-item-action">
          {{ $question->question_text }}
        </a>
      @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
