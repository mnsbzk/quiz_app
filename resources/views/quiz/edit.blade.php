@extends('layouts.base')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    @include('layouts.message')
    <div class="card">
      <div class="card-header">編集</div>
      <div class="card-body">
        <form method="POST" action="{{ route('quiz.update', $question->id) }}">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="name" class="col-md-4 col-form-label">問題編集</label>
            <div class="d-flex justify-content-center">
              <input type="text" class="form-control text-box" name="question_text" value="{{ $question->question_text }}">
            </div>
          </div>
          <div>
            <label for="name" class="col-md-4 col-form-label edit-choices">選択肢編集</label>
            @foreach ($choices as $choice)
            <div class="d-flex justify-content-center">
              <input type="hidden" name="choice_id[]" value="{{ $choice->id }}">
              @if($choice->is_correct === 1)
                <input type="checkbox" class="checkbox edit-chk" name="is_correct[]" value="{{ $choice->id }}" checked>
                <!-- <input type="checkbox" class="checkbox form-check-input" name="is_correct[]" value="{{ $choice->id }}" id="01-A" checked>
                <label for="01-A" class="checkbox01"></label> -->
              @else
                <input type="checkbox" class="checkbox edit-chk" name="is_correct[]" value="{{ $choice->id }}">
                <!-- <input type="checkbox" class="checkbox form-check-input" name="is_correct[]" value="{{ $choice->id }}" id="01-A">
                <label for="01-A" class="checkbox01"></label> -->
              @endif
                <input type="text" name="choice_text[]" value="{{ $choice->choice_text }}" class="text-box edit-choice-text-box form-control">
            </div>
            @endforeach
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">更新する</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection