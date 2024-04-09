@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
<nav class="nav">
    <div class="button">
        <a href="/contacts/register" class="register-button">register</a>
</div>
</nav>
@section('content')

<h2>Login</h2>
    <div class="container">
        <form action="/contacts/login" method="post">
            @csrf
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" placeholder="例:test@example.com">
                <div class="form__error">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password" placeholder="例:cochtech1106">
                <div class="form__error">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="button">
                <button class="login-button" type="submit">ログイン</button>
            </div>
        </form>
    </div>
@endsection