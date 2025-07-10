@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
<button class="admin__button--logout" type="submit" action="/register">logout</button>
@endsection @section('content')

<div class="admin">
    <div class="admin__title">
        <h3>Admin</h3>
    </div>
    <div class="admin__search">
        <table>
            <tr class="admin__form--header">
                <th>
                    <h3>お名前</h3>
                </th>
                <th>
                    <h3>性別</h3>
                </th>
                <th>
                    <h3>メールアドレス</h3>
                </th>
                <th>
                    <h3>お問い合わせの種類</h3>
                </th>
            </tr>
            <tr>
                
            </tr>
        </table>
        <button class="admin__button--search" type="submit">検索</button>
        <button class="admin__button--reset" type="submit">リセット</button>
    </div>
    <div class="admin__button--export">
        <button type="submit">エクスポート</button>
    </div>

</div>


