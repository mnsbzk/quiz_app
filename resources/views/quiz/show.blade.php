@extends('layouts.base')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
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
    <!-- 選択肢一覧 -->
    <div class="card-header">
        選択肢
      <div class="choice_show">
        @foreach ($choices as $choice)
          <div class="list-group-item d-flex justify-content-around">
            @if($choice->is_correct)
              <p>正解</p>
            @else
              <p>不正解</p>
            @endif
            <p>{{ $choice->choice_text }}</p>
            <form method="POST" action="{{ route('choice.delete', $choice->id) }}">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger">削除する</button>
            </form>
          </div>
        @endforeach
      </div>
    </div>
    <!-- 選択肢登録フォーム -->
    <div class="">
      <form method="POST" action="{{ route('choice.store', $question->id) }}" class="d-flex justify-content-around">
        @csrf
        <div>
          <input type="checkbox" class="checkbox" name="is_correct" value="1">
          <input type="text" class="" name="choice_text" value="">
        </div>
        <button type="submit" class="btn btn-success">登録</button>
      </form>
    </div>
  </div>
</div>
@endsection