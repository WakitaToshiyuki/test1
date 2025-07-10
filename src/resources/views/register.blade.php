@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
<button class="register__button--login" type="submit" action="/login">login</button>
@endsection @section('content')

<div class="register">
  <div class="register__title">
    <p>Register</p>
  </div>
  <div class="register__form">
    <form action="/register" method="post">
      @csrf
      <table class="register__form--layout">
        <tr class="register__form--content">
          <th class="register__form--header">
            <p>お名前</p>
          </th>
          <th class="register__form--text">
            <input type="text" name="name" placeholder="例: 山田　太郎" />
          </th>
        </tr>
        <tr class="register__form--content">
          <th class="register__form--header">
            <p>メールアドレス</p>
          </th>
          <th class="register__form--text">
            <input type="text" name="email" placeholder="例: test@example.com" />
          </th>
        </tr>
        <tr class="register__form--content">
          <th class="register__form--header">
            <p>パスワード</p>
          </th>
          <th class="register__form--text">
            <input type="text" name="password" placeholder="例: coachtech1106" />
          </th>
        </tr>
      </table>
      <div class="register__button">
        <button type="submit">登録</button>
      </div>
    </form>
  </div>
</div>
