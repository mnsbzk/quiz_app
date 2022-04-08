@extends('layouts.base')
@section('content')
<div class="row justify-content-center">
    <div class="card">
      <div class="card-header">
        問題一覧
      </div>
      <div class="list-group list-group-flush">
      @foreach ($questions as $index => $question)
        <p>
          Q{{ $index + 1 }}:{{ $question->question_text }}
        </p>
        <input type="hidden" value="{{ $question->id }}">
        @foreach ($question->choices as $choice)
          @if (in_array($choice->id, $CheckedChoices))
            <input type="checkbox" checked disabled>
          @else
            <input type="checkbox" disabled>
          @endif
          @if (in_array($choice->id, $IsCorrectChoices))
            <p>{{ $choice->choice_text }}</p>
            <p>正解</p>
          @else
            <p>{{ $choice->choice_text }}</p>
            <p>不正解</p>
          @endif
          @if (in_array($choice->id, $SavedCorrectAnswers)
            <input type="checkbox" checked disabled>
          @else
            <input type="checkbox" disabled>
          @endif
        @endforeach
        @if (in_array($question->id, $IsCorrectList))
          <p>正解</p>
        @else
          <p>不正解</p>
        @endif
      @endforeach
      </div>
      <p>{{ $CorrectCount }}問正解/{{ $QuestionCount }}問中</p>
    </div>
</div>
@endsection
