@extends('layouts.base')
@section('content')
<div class="justify-content-center question-layout">
    <div class="card margin-bottom-20">
      <div class="card-header">
        解答
      </div>
      <div class="list-group list-group-flush">
      @foreach ($questions as $index => $question)
        <p class="question-list">
          Q{{ $index + 1 }}:{{ $question->question_text }}
        </p>
        <input type="hidden" value="{{ $question->id }}">
        <div class="d-flex">
          <p class="item">あなたの解答</p>
          <p class="item">選択肢</p>
          <p class="item">正誤</p>
        </div>
        @foreach ($question->choices as $choice)
          <div class="d-flex">
            @if (in_array($choice->id, $checkedChoiceList))
              <input type="checkbox" checked disabled class="item">
            @else
              <input type="checkbox" disabled class="item">
            @endif
            @if (in_array($choice->id, $correctChoiceList))
              <p class="text-success item">{{ $choice->choice_text }}</p>
              <!-- <p>正解</p> -->
            @else
              <p class="text-danger item">{{ $choice->choice_text }}</p>
              <!-- <p>不正解</p> -->
            @endif
            @if (in_array($choice->id, $correctAnswerList))
              <input type="checkbox" checked disabled class="item">
            @else
              <input type="checkbox" disabled class="item">
            @endif
          </div>
        @endforeach
        @if (in_array($question->id, $correctQuestionList))
          <p class="margin-left-20">正解</p>
        @else
          <p class="margin-left-20">不正解</p>
        @endif
          <div class="separation"></div>
      @endforeach
      </div>
      <p class="correct-answer-rate">{{ $correctCount }}問正解/{{ $questionCount }}問中</p>
    </div>
    <div class="card">
      <div class="card-header">
        過去の解答結果
      </div>
      <div class="list-group list-group-flush">
        @foreach ($results as $result)
          <div class="d-flex justify-content-around">
            <p class="half">{{ $result->created_at }}</p>
            <p class="half">{{ $result->score }}問正解/{{ $result->questions }}問中</p>
          </div>
        @endforeach
      </div>
    </div>
</div>
<script>
  history.pushState(null, null, location.href);
  window.addEventListener('popstate', (e) => {
      history.go(1);
  });
</script>
@endsection
