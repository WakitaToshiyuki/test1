@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection @section('content')

<div class="contact">
    <div class="contact__title">
        <h2>Contact</h2>
    </div>
    <div class="contact__form">
        <form action="/confirm" method="post">
            @csrf
            <table>
                <tr class="contact__form--kind">
                    <th class="contact__form--header">
                        <p>お名前<span class="span">※</span></p>
                    </th>
                    <td class="contact__form--name">
                        <input type="text" name="first_name" placeholder="例：山田" value="{{old('first_name')}}" />
                        <input type="text" name="last_name" placeholder="例：太郎" value="{{old('last_name')}}" />
                        <div class="form__error">
                            @error('first_name')
                            {{$message}}
                            @enderror
                            @error('last_name')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr class="contact__form--kind">
                    <th class="contact__form--header">
                        <p>性別<span class="span">※</span></p>
                    </th>
                    <td class="contact__form--gender">
                        <label>
                            <input type="radio" name="gender" value="男性" checked>
                            男性
                        </label>
                        <label>
                            <input type="radio" name="gender" value="女性">
                            女性
                        </label>
                        <label>
                            <input type="radio" name="gender" value="その他">
                            その他
                        </label>
                        <div class="form__error">
                            @error('gender')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr class="contact__form--kind">
                    <th class="contact__form--header">
                        <p>メールアドレス<span class="span">※</span></p>
                    </th>
                    <td class="contact__form--email">
                        <input type="text" name="email" placeholder="例: test@example.com" value="{{old('email')}}" />
                        <div class="form__error">
                            @error('email')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr class="contact__form--kind">
                    <th class="contact__form--header">
                        <p>電話番号<span class="span">※</span></p>
                    </th>
                    <td class="contact__form--tel">
                        <input type="text" name="tel" placeholder="080" value="{{old('tel')}}" />
                        -
                        <input type="text" name="tel" placeholder="1234" value="{{old('tel')}}" />
                        -
                        <input type="text" name="tel" placeholder="5678" value="{{old('tel')}}" />
                        <div class="form__error">
                            @error('tel')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr class="contact__form--kind">
                    <th class="contact__form--header">
                        <p>住所<span class="span">※</span></p>
                    </th>
                    <td class="contact__form--address">
                        <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{old('address')}}" />
                        <div class="form__error">
                            @error('address')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr class="contact__form--kind">
                    <th class="contact__form--header">
                        <p>建物名</p>
                    </th>
                    <td class="contact__form--building">
                        <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{old('building')}}" />
                    </td>
                </tr>
                <tr class="contact__form--kind">
                    <th class="contact__form--header">
                        <p>お問い合わせの種類<span class="span">※</span></p>
                    </th>
                    <td class="contact__form--content">
                        <select name="content">
                            <option placeholder="選択してください">選択してください</option>
                            <option value="商品の交換について">商品の交換について</option>
                            <option value="商品の発送について">商品の発送について</option>
                            <option value="その他">その他</option>
                        </select>
                        <div class="form__error">
                            @error('content')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr class="contact__form--kind">
                    <th class="contact__form--header">
                        <p>お問い合わせの内容<span class="span">※</span></p>
                    </th>
                    <td class="contact__form--detail">
                        <textarea name="detail" cols="30" rows="3" placeholder="お問い合わせ内容をご記載ください" value="{{old('detail')}}" ></textarea>
                        <div class="form__error">
                            @error('detail')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                </tr>
            </table>
            <div class="contact__button">
                <button type="submit" >確認画面</button>
            </div>
        </form>
    </div>
    

</div>