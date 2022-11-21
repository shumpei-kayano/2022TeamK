@extends('layouts.app')

@section('title','ポートフォリオ削除')

@section('content')

<div class="p-form">
    <h1 class="p-form">ポートフォリオ削除</h1>
<div class="p-acinfo__container">
<div class="nes-container is-rounded is-dark p-acinfo">

    <!-- 名前 -->
    <label for="dark_field" style="color:#fff;" >名前<br>
        <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $form->name }}</p><br>

    <!-- メールアドレス -->
    <label for="dark_field" style="color:#fff;" >メールアドレス<br>
        <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $form->email }}</p><br>

    <!-- 電話番号 -->
    <label for="dark_field" style="color:#fff;" >でんわばんごう<br>
        <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $form->tel }}</p><br>

    <!-- 最終学歴 -->
    <label for="dark_field" style="color:#fff;" >さいしゅうがくれき<br>
        <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $form->educational_background }}</p><br>

    <!-- 学習言語1 -->
    <label for="dark_field" style="color:#fff;" >がくしゅうげんご1<br>
        <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $form->development_language->language_name }}</p><br>

    <!-- 学習期間1 -->
    <label for="dark_field" style="color:#fff;" >がくしゅうきかん1<br>
        <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $form->development_year1 }}</p><br>

    <!-- 自己PR -->
    <label for="dark_field" style="color:#fff;" >自己PR<br>
        <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $form->self_pr }}</p><br>

    <!-- 生年月日 -->
    <label for="dark_field" style="color:#fff;" >生年月日<br>
        <p id="dark_field" class="nes-input is-dark p-form__portfolio" name="name" >{{ $form->birtday }}</p><br>
</div>
</div>

    <!-- 削除ボタン -->
    <form action="{{ route('portfolio_remove') }}" method="post">
        <div class="p-form">
    @csrf
    <input type="submit" class="nes-btn is-success" value='削除'>
    </div>

</form>
</div>

@endsection