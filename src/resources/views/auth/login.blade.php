@extends('layouts/app')

@section('title', 'ログイン画面')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection

@section('content')
<div class="content__wrap">
    <div class="card__register-wrap">
        <div class="card__register-header">
            <h2 class="card__register-header-heading">Login</h2>
        </div>
        <form action="/login" method="post">
            @csrf
            <div class="card__register-form-content">
                <div class="card__register-form-content-inner">
                    <label for="email"></label>
                    <input type="email" class="card__register-email" id="email" name="email" placeholder="Email" required>
                    <label for="password"></label>
                    <input type="password" class="card__register-password" id="password" name="password" placeholder="Password" required>
                    <input type="submit" class="card__register-button" value="ログイン">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection