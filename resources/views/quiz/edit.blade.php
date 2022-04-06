@extends('layouts.base')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    @include('layouts.message')
    <div class="card">
      <div class="card-header">問題編集</div>
      <div class="card-body">
        <form method="POST" action="{{ route('quiz.update', $question->id) }}">
          @method('PUT')
          @csrf
          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">ToDo入力</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="question_text" value="{{ $question->question_text }}">
            </div>
          </div>
          <!-- 選択肢一覧 -->
          <div>
            @foreach ($choices as $choice)
            <div>
              <input type="hidden" name="choice_id[]" value="{{ $choice->id }}">
              @if($choice->is_correct === 1)
                <input type="checkbox" class="checkbox" name="is_correct[]" value="{{ $choice->id }}" checked>
              @else
              <input type="checkbox" class="checkbox" name="is_correct[]" value="{{ $choice->id }}">
              @endif
              <input type="text" name="choice_text[]" value="{{ $choice->choice_text }}">
            </div>
            @endforeach
          </div>
          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">更新</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection