@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection
<nav class="nav">
    <div class="button">
        <button class="logout-button" type="submit">logout</button>
</div>
</nav>
@section('content')

<h2>Admin</h2>

<form action="/contacts/admin" method="post" class="search-form">
    @csrf
    <div class="form-group">
        <input type="text" id="name_or_email" name="name_or_email" placeholder="名前やメールアドレスを入力してください">
    </div>
    <div class="form-group">
        <select name="gender" id="gender">
            <option value="">性別</option>
            <option value="all">全て</option>
            <option value="1">男性</option>
            <option value="2">女性</option>
            <option value="3">その他</option>
        </select>
    </div>
    <div class="form-group">
        <select name="category" id="category">
            <option value="">お問い合わせの種類</option>
            <option value="1">商品のお届けについて</option>
            <option value="2">商品の交換について</option>
            <option value="3">商品トラブル</option>
            <option value="4">ショップへのお問い合わせ</option>
            <option value="5">その他</option>
        </select>
    </div>
    <div class="form-group">
        <input type="date" id="datepicker" name="date">
    </div>
    <div class="button-group">
        <button class="search-button" type="submit">検索</button>
        <button class="reset-button" type="reset">リセット</button>
    </div>
</form>

<div class="export">
    <button class="export-button">エクスポート</button>
</div>

<div class="pagination">
    <ul>
        <li><a href="">1</a></li>
        <li><a href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
        <li><a href="">5</a></li>
    </ul>
</div>

<div class="search-results">
    <table>
        <thead>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>山田 太郎</td>
                <td>男性</td>
                <td>test@example.com</td>
                <td>商品の交換について</td>
                <td><button class="detail-button">詳細</button></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="modal" id="modal">
    <div class="modal-content">
        <span class="close">$times;</span>
        <div id="modalDetails">
            
        </div>
    </div>
</div>
@endsection