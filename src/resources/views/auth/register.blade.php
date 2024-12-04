@extends('layouts/app')

@section('title', '会員登録画面')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('content')
<div class="content__wrap">
    <div class="card__register-wrap">
        <div class="card__register-header">
            <h2 class="card__register-header-heading">Registration</h2>
        </div>
        <form action="/register" method="post">
            @csrf
            <div class="card__register-form-content">
                <div class="card__register-form-content-inner">
                    <label for="name"></label>
                    <input type="text" class="card__register-name" id="name" name="name" placeholder="Username" required>
                    <label for="email"></label>
                    <input type="email" class="card__register-email" id="email" name="email" placeholder="Email" required>
                    <label for="password"></label>
                    <input type="password" class="card__register-password" id="password" name="password" placeholder="Password" required>
                    <!-- <input type="submit" class="card__register-button" value="登録"> -->
                    <button class="card__register-button">登録</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- エラー確認用、最終消去する -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


@endsection