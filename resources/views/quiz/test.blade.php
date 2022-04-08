@extends('layouts.base')
@section('content')
<div class="row justify-content-center">
  <form class="col-md-8" method="POST" action="{{ route('test.answer') }}">
  @csrf
    <div class="card">
      <div class="card-header">
        問題一覧
      </div>
      <div class="list-group list-group-flush">
      @foreach ($questions as $index => $question)
        <input type="hidden" name="question_id[]" value="{{ $question->id }}">
        <p>
          Q{{ $index + 1 }}:{{ $question->question_text }}
        </p>
        @foreach ($question->choices as $choice)
          <input type="hidden" name="choice_id[]" value="{{ $choice->id }}">
          <label for=""><input type="checkbox" name="is_correct_{{$question->id}}[]" value="{{ $choice->id }}">{{ $choice->choice_text }}</label>
        @endforeach
      @endforeach
      </div>
    </div>
    <button type="submit" class="btn btn-primary">採点する</button>
  </form>
</div>
@endsection
