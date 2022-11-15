@extends('layouts.app')

@section('title')
    アカウント情報編集
@endsection

@section('content')

<h1 class="p-info">アカウントじょうほうへんしゅう</h1>
<div class="p-acinfoEdit__container">
    <div class="nes-container is-rounded is-dark p-acinfoEdit">
            ユーザーID<input class="nes-input is-dark p-acinfoEdit__input" type="text" name='name' value='{{ $form->name }}'>
            メールアドレス<input class="nes-input is-dark p-acinfoEdit__input" type="text" name='email'value='{{ $form->email }}'>
    </div>
</div>
@csrf<form action="{{ route('account_update') }}" method="post">

<div class="p-acinfoEdit__btn-container">
    <button type="submit" class="nes-btn is-success p-acinfoEdit__btn">決定
    </button>
</div>
@endsection
