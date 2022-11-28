@extends('layouts.app')

@section('title','ポートフォリオ削除')

@section('content')

<h1 class="p-form">ポートフォリオさくじょ</h1>
<div class="p-port">
    <div class="nes-container is-rounded is-dark" style="height: 600px;">

        <div class="p-port__container">
            <div class="p-port__left">
                    <!-- 名前 -->
                    <label for="name" style="color:#fff;" >名前<br>
                        @if($errors->has('name'))
                            {{ $errors->first('name') }}
                        @endif
                        <input type="text" id="name" class="nes-input is-dark p-form__portfolio" name="name" disabled value='{{ $form->name }}'><br>

                    <!-- メールアドレス -->
                    <label for="mail" style="color:#fff;" >メールアドレス<br>
                        @if($errors->has('email'))
                            {{ $errors->first('email') }}
                        @endif
                            <input type="mail" id="mail" class="nes-input is-dark p-form__portfolio" name="email" disabled value='{{ $form->email }}'><br>

                    <!-- 電話番号 -->
                    <label for="tel" style="color:#fff;" >でんわばんごう<br>
                        @if($errors->has('tel'))
                            {{ $errors->first('tel') }}
                        @endif
                            <input type="tel" id="tel" class="nes-input is-dark p-form__portfolio" name="tel" disabled value='{{ $form->tel }}'><br>

                <!-- 最終学歴 -->
                <label for="gakureki" style="color:#fff;" >さいしゅうがくれき<br>
                    @if($errors->has('educational_background'))
                        {{ $errors->first('educational_background') }}
                    @endif
                        <input type="text" id="gakureki" class="nes-input is-dark p-form__portfolio" name="educational_background" disabled value='{{ $form->educational_background }}'><br>

                <!-- 生年月日 -->
                <label for="birthday" style="color:#fff;" >生年月日<br>
                    @if($errors->has('birthday'))
                        {{ $errors->first('birthday') }}
                    @endif
                        <input type="date" id="birthday" class="nes-input is-dark p-form__portfolio" disabled value="yyyy/mm/dd" name="birthday">
             </div>


             <div class="p-port__right">

                <!-- 学習言語1 -->
                <label for="dark_field" style="color:#fff;" >がくしゅうげんご1<br>
                    <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $form->development_language->language_name }}</p><br>

                <!-- 学習期間1 -->
                <label for="dark_field" style="color:#fff;" >がくしゅうきかん1<br>
                    <p id="dark_field" class="nes-input is-dark p-portDel__port" name="name" >{{ $form->development_year1 }}</p><br>

            </div>

                    <!-- 自己PR -->
                    <div class="p-port__PR">
                        <label for="pr" style="color:#fff; margin-top: 20px;">自己PR</label><br>
                            <textarea name="self_pr" id="" cols="27" rows="19" class="nes-textarea is-dark" readonly>{{ $form->self_pr }}</textarea>
                    </div>
                </div>

            <!-- 削除ボタン -->
            <form action="{{ route('portfolio_remove') }}" method="post">
                <div class="p-acinfo__btn-container p-port__btn">
                    @csrf
                    <button type="submit" class="nes-btn is-success p-acinfo__btn">さくじょ</button>
                </div>
            </form>
</div>
@endsection