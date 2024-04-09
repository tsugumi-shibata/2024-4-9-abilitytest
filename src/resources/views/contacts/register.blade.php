@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection
<nav class="nav">
    <div class="button">
        <a href="/contacts/login" class="login-button" >login</a>
</div>
</nav>
@section('content')

<h2>Register</h2>
    <div class="container">
        <form action="/contacts/register" method="post">
            @csrf
            <div class="form-group">
                <label for="name">お名前</label>
                <input type="text" id="name" name="name" placeholder="例:山田 太郎">
                <div class="form__error">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            
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
                <button class="register-button" type="submit">登録</button>
            </div>
        </form>
    </div>
@endsection