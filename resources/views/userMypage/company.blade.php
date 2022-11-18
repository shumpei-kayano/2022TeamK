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
            <a href="#"><button type="button" class="nes-btn is-error p-myp__btn">けいさいちゅうあんけんを<br>かくにんする</button></a>
            </form>

        <form method="GET" action="">
            @csrf
            <a href="#"><button type="button" class="nes-btn is-primary p-myp__btn">しょうにんまちリストを<br>かくにんする</button></a>
            </form>
        
        <form method="GET" action="/listingConfirmation">
            @csrf
            <a href="#"><button type="button" class="nes-btn is-warning p-myp__btn">かこけいやくいちらんを<br>かくにんする</button></a>
            </form>
            
        <form method="GET" action="{{route('matter.add')}}">
            @csrf
            <a href="#"><button type="button" class="nes-btn is-success p-myp__btn">あんけんを<br>けいさいする</button></a>
    </div>
</div>
        </form>
@endsection