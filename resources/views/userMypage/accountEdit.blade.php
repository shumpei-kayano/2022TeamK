@extends('layouts.app')

@section('title')
    アカウント情報編集
@endsection

@section('content')

<h1 class="p-form">アカウントじょうほうへんしゅう</h1>
<form action="{{ route('account_update') }}" method="post">
    @csrf
<div class="p-acinfoEdit__container2">
    <div class="nes-container is-rounded is-dark p-acinfoEdit">
            ユーザーID<input class="nes-input is-dark p-acinfoEdit__input" type="text" name='name' value='{{ $form->name }}'>
            メールアドレス<input class="nes-input is-dark p-acinfoEdit__input" type="text" name='email'value='{{ $form->email }}'>
    </div>
</div>

<div class="p-acinfoEdit__btn-container">
    <button type="submit" class="nes-btn is-success p-acinfoEdit__btn">決定
    </button>
</div>
</form>
@endsection
