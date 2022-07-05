<!-- 問題編集画面 -->
@extends('layouts.app')

@section('content')

<div>
    <div>{{ $big_question['id'] }}. {{ $big_question['big_question_name'] }}の難読地名クイズ：{{ $question['question_id'] }}問目 </div>
    <img src="/img/{{ $question['img'] }}">

</div>

<form action="/question_data_edit/{{ $big_question['id'] }}/{{ $question['question_id'] }}" method="POST">
    @csrf
    <p>正解の選択肢をオレンジの枠の中にご記入ください</p>
    <p>設問の順番を1,2,3の中からお選びください</p>
    @foreach($choices as $choice)
    <div>
        <input type="text" value="{{ $choice['choice_name'] }}" name="{{ $loop->index }}" class="answer_choice_input_{{ $loop->index }} free_dropdown" data-options="1,2,3">
        <input type="text" value="{{ $choice['order_number'] }}" name="order_{{ $loop->index }}">
    </div>
    @endforeach
    <input type="submit" value="編集" class="edit_button">
</form>
@endsection