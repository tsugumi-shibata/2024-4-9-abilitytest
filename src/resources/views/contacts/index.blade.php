@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
    <div class="contact-form__header">
        <p>Contact</p>
    </div>

    <form action="/contacts/confirm" class="form" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}"class="textbox">
                    <div class="form__error">
                        @error('last_name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form__input-text">
                    <input type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}" class="textbox">
                    <div class="form__error">
                        @error('first_name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <label>
                        <input type="radio" name="gender" value="1" checked>男性
                    </label>
                    <label>
                        <input type="radio" name="gender" value="2">女性
                    </label>
                    <label>
                        <input type="radio" name="gender" value="3">その他
                    </label>
                    <div class="form__error">
                        @error('gender')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" class="textbox">
                    <div class="form__error">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
            </div>
                </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="tel" name="tel" placeholder="080" value="{{ old('tel') }}" class="textbox">
                </div>
                <div class="form__input-text">
                    <input type="tel" name="tel" placeholder="1234" value="{{ old('tel') }}" class="textbox">
                </div>
                <div class="form__input-text">
                    <input type="tel" name="tel" placeholder="5678" value="{{ old('tel') }}" class="textbox">
                </div>
                <div class="form__error">
                        @error('tel')
                            {{ $message }}
                        @enderror
                    </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" class="textbox">
                    <div class="form__error">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" class="textbox">
                    <div class="form__error">
                        @error('building')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-category">
                    <select name="category">
                        <option value="" selected>選択してください</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <div class="form__error">
                        @error('category')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-textarea">
                    <textarea name="detail" id="" cols="30" rows="10"></textarea>
                    <div class="form__error">
                        @error('detail')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>




@endsection