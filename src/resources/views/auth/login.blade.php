@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css')}}">
@endsection

@section('content')
<div class="login-form">
    <h2 class="login-form__heading content__title">ログイン</h2>
    <div class="login-form__inner">
        <form class="login-form__form" action="/login" method="post">
            @csrf
            <div class="login-form__group">
                <label class="login-form__label" for="email">メールアドレス</label>
                <input class="login-form__input" type="mail" name="email" id="email" placeholder="メールアドレスを入力">
                <p class="register-form__error-message">
                    @error('email')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="login-form__group">
                <label class="login-form__label" for="password">パスワード</label>
                <input class="login-form__input" type="password" name="password" id="password" placeholder="パスワードを入力">
                <p>
                    @error('password')
                    {{ $message }}
                    @enderror
                </p>
            </div>
        <input class="login-form__btn btn" type="submit" value="ログイン">
        </form>
    </div>
</div>
@endsection('content')

@section('link')
<a class="footer__link" href="/register">アカウント作成はこちら</a>
@endsection
