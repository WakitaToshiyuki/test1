@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection @section('content')

<div class="confirm">
    <div class="confirm__title">
        <h3>Confirm</h3>
    </div>
    <div class="confirm__form">
        <form class="" action="/admin" method="post">
            <table class="">
                <tr class="confirm__form--row">
                    <th class="confirm__form--header">お名前</th>
                    <td class="confirm__form--text">{{$contact['first_name']}}　{{$contact['last_name']}}</td>
                </tr>
                <tr class="confirm__form--row">
                    <th class="confirm__form--header">性別</th>
                    <td class="confirm__form--text">{{$contact['gender']}}</td>
                </tr>
                <tr class="confirm__form--row">
                    <th class="confirm__form--header">メールアドレス</th>
                    <td class="confirm__form--text">{{$contact['email']}}</td>
                </tr>
                <tr class="confirm__form--row">
                    <th class="confirm__form--header">電話番号</th>
                    <td class="confirm__form--text">{{$contact['tel']}}</td>
                </tr>
                <tr class="confirm__form--row">
                    <th class="confirm__form--header">住所</th>
                    <td class="confirm__form--text">{{$contact['address']}}</td>
                <tr class="confirm__form--row">
                    <th class="confirm__form--header">建物名</th>
                    <td class="confirm__form--text">{{$contact['building']}}</td>
                </tr>
                <tr class="confirm__form--row">
                    <th class="confirm__form--header">お問い合わせの種類</th>
                    <td class="confirm__form--text">{{$contact['content']}}</td>
                </tr>
                <tr class="confirm__form--row">
                    <th class="confirm__form--header">お問い合わせ内容</th>
                    <td class="confirm__form--text">{{$contact['detail']}}</td>
                </tr>
            </table>
            <div class="confirm__button--send">
                <button type="submit">送信</button>
            </div>
            <div class="confirm__button--retouch">
                <p>修正</p>
            </div>
        </form>
    </div>
    

</div>
