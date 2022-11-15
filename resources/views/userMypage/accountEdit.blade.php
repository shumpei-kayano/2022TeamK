@extends('layouts.app')

@section('title')
    アカウント情報編集
@endsection

@section('content')

<h1 class="p-info">アカウントじょうほうへんしゅう</h1>
<div class="p-acinfo__container">
    <div class="nes-container is-rounded is-dark p-acinfo">
        <p class="p-acinfo__idEdit">        
            ユーザーID:<input type="text" name='name' value='{{ $form->name }}'><br>
        </p>
            メールアドレス:<input type="text" name='email'value='{{ $form->email }}'>
    </div>
</div>
@csrf<form action="{{ route('account_update') }}" method="post">

<div class="p-acinfo__btn-container">
    <button type="submit" class="nes-btn is-success p-acinfo__btn">決定
    </button>
</div>
@endsection
