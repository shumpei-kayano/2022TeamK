@extends('layouts.app')

@section('title')
    アカウント情報編集
@endsection

@section('content')

<h1 class="p-form">アカウント情報</h1>
<div class="p-acinfo__container2">
    <div class="nes-container is-rounded is-dark p-acinfo">
        <p class="p-acinfo__id">ユーザーID：{{ $user->name }}</p>
        <p> メールアドレス：{{ $user->email }}</p>
    </div>
</div>
    <div class="p-acinfo__btn-container">
        <form action='{{ route('account_edit') }}' method="get">
            @csrf
            <button type="submit" class="nes-btn is-success p-acinfo__btn">編集</button>
        </form>
    </div>
{{-- <div class="p-acinfo">
    <p class="p-acinfo__id">ユーザーID：{{ $user->name }}<br></p>
    メールアドレス：{{ $user->email }}
        <form action='{{ route('account_edit') }}' method="get">
            @csrf
            <button type="submit" class="nes-btn is-success p-acinfo__btn">へんしゅう</button>
        </form>
</div> --}}

@endsection