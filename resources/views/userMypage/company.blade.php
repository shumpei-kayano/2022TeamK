@extends('layouts.app')

@section('title','マイページ（企業）')

@section('content')

{{-- @if (Auth::check())
<p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
@else
<p>※ログインしてません。(<a href="/login">ログイン</a>|
<a href="/register">登録</a>)</p>
@endif --}}

<h1 class="p-form">マイページ（企業）</h1>
<div class="p-myp">
    <div class="nes-container is-dark with-title p-myp__container">
            <form method="GET" action="/postingScreen">
            @csrf
            <input type="submit" class="nes-btn is-error p-myp__btn" name="postingScreen" value="けいさいちゅうあんけん">
            </form>

        <form method="GET" action="">
            @csrf
            <input type="submit" class="nes-btn is-primary p-myp__btn" name="" value="しょうにんまち">
            </form>
        
        <form method="GET" action="/listingConfirmation">
            @csrf
            <input type="submit" class="nes-btn is-warning p-myp__btn" name="listingConfirmation" value="かこけいやくいちらん">
            </form>
            
        <form method="GET" action="{{route('matter.add')}}">
            @csrf
            <input type="submit" class="nes-btn is-success p-myp__btn" name="matterCreate" value="あんけんけいさい">
    </div>
</div>
        </form>
@endsection