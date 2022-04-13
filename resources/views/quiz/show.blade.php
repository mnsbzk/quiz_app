@extends('layouts.base')
@section('content')
<div class="question-layout justify-content-center">
  <div class="">
    @include('layouts.message')
    <div class="card question-detail">
      <div class="card-header">
        問題詳細
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ $question->question_text }}</h5>
        <p class="card-text">作成日時：{{ $question->created_at }}</p>
        <div class="row">
          <div class="col-auto">
            <a href="{{ route('quiz.edit', $question->id) }}" class="btn btn-info">編集する</a>
          </div>
          <div class="col-auto">
            <form method="POST" action="{{ route('quiz.delete', $question->id) }}">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger">削除する</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        選択肢詳細
      </div>
      <div class="d-flex justify-content-around choice-detail padding-right-150">
        <p class="item">正誤</p>
        <p class="item">選択肢内容</p>
      </div>
        @foreach ($choices as $choice)
          <div class="d-flex justify-content-around choice-detail">
            @if($choice->is_correct)
              <p class="item">正解</p>
            @else
              <p class="item">不正解</p>
            @endif
            <p class="item">{{ $choice->choice_text }}</p>
            <form method="POST" action="{{ route('choice.delete', $choice->id) }}">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger" class="item">削除する</button>
            </form>
          </div>
        @endforeach
      <div class="">
        <form method="POST" action="{{ route('choice.store', $question->id) }}" class="d-flex justify-content-center margin-top-bottom-20">
          @csrf
            <div class="d-flex">
              <div>
                <p>正誤</p>
                <input type="checkbox" class="checkbox form-check-input customized-checkbox" name="is_correct" value="1" id="01-A">
                <label for="01-A" class="checkbox01 show-chk"></label>
              </div>
              <div>
                <p>選択肢内容</p>
                <input type="text" class="text-box form-control" name="choice_text" value="">
                <button type="submit" class="btn btn-success btn-registering">登録する</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection