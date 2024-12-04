@extends('layouts/app')

@section('title', '会員登録完了画面')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
@endsection

@section('content')
<div class="content__wrap">
    <div class="card__thanks">
        <p class="card__text">会員登録ありがとうございます</p>
        <div class="card__button">
            <a href="/login">ログインする</a>
        </div>
    </div>
</div>

@endsection