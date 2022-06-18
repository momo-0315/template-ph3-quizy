@extends('layouts.app')

@section('content')
<div class="login-status">
    <div class="">
        <div class="">
            <div class="card">
                <div class="card-header">ログイン状態</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    ログイン中
                </div>
            </div>
        </div>
    </div>
</div>
<div class="whole-wrapper">
    <div class="big-question-add-btn">
        <a href="" class="home-link-btn">新たに#〇〇の難読地名クイズを追加</a>
    </div>

    @foreach($big_questions as $big_question)
    <div class="whole-wrapper">

        <span class="question-name">
            {{ $big_question['big_question_name'] }}の難読地名クイズ
        </span>
        <a href="" class="home-link-btn">{{ $big_question['big_question_name'] }}の難読地名クイズを削除</a>
        <a href="" class="home-link-btn">新たに問題を追加</a>
        <div class="questions-wrapper">

            @foreach($questions->where('big_question_id', $big_question->id) as $question)
            <div class="question-wrapper">
                <div class="home-img-wrapper">
                    <img src="/img/{{ $question['img'] }}" alt="" class="home-img">
                </div>
                <div class="home-link-btn-wrapper">
                    <a href="" class="home-link-btn">問題を編集</a>
                    <a href="" class="home-link-btn">問題を削除</a>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</div>
@endforeach
@endsection