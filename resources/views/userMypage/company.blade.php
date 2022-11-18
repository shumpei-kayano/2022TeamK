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

            <a href="/postingScreen"><button type="button" class="nes-btn is-error p-myp__btn">けいさいちゅうあんけんを<br>みる</button></a>

            <a href="#"><button type="button" class="nes-btn is-primary p-myp__btn">しょうにんまちリストを<br>みる</button></a>
        
            <a href="/listingConfirmation"><button type="button" class="nes-btn is-warning p-myp__btn">かこけいやくいちらんを<br>みる</button></a>
        
            <a href='./matter/add'><button type="button" class="nes-btn is-success p-myp__btn">あんけんを<br>けいさいする</button></a>
    </div>
</div>
        </form>
@endsection