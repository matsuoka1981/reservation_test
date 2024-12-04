@extends('layouts/app')

@section('title', '予約完了画面')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}" />
@endsection

@section('content')
<div class="content__wrap">
    <div class="card__done">
        <p class="card__text">ご予約ありがとうございます</p>
        <div class="card__button">
            <a href="/">戻る</a>
        </div>
    </div>
</div>
@endsection