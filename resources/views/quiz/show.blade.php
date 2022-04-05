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
  </div>
</div>
@endsection