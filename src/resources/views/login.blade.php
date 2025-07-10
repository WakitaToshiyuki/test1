@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
<button class="login__button--register" type="submit" action="/register">register</button>
@endsection @section('content')

<div class="login">
    <div class="login__title">
        <h3>Login</h3>
    </div>
    <div class="login__form">
        <form action="">
            <div class="login__form--mail">
            <div class="login__form--mail-title">
                <h4>メールアドレス</h4>
            </div>
            <div class="login__form--mail-write"></div>
        </div>
        <div class="login__form--password">
            <div class="login__form--password-title">
                <h4>パスワード</h4>
            </div>
            <div class="login__form--password-write"></div>
        </div>
        <div class="login__button--login">
            <button type="submit">ログイン</button>
        </div>
        </form>
        
    </div>
</div>
