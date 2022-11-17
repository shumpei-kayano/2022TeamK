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
    <form method="GET" action="/postingScreen
    ">
        <div class="p-form">
        @csrf
        <input type="submit" class="nes-btn is-error" name="postingScreen" value="けいさいちゅうあんけん">
        </form>

    <form method="GET" action="">
        @csrf
        <input type="submit" class="nes-btn is-primary" name="" value="しょうにんまち">
        </form>
    
    <form method="GET" action="/listingConfirmation">
        @csrf
        <input type="submit" class="nes-btn is-warning" name="listingConfirmation" value="かこけいやくいちらん">
        </form>
        
    <form method="GET" action="{{route('matter.add')}}">
        @csrf
        <input type="submit" class="nes-btn is-success" name="matterCreate" value="あんけんけいさい">
    </div>
        </form>
@endsection