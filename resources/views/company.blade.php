@extends('layouts.app')
@section('content')

{{-- @if (Auth::check())
<p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
@else
<p>※ログインしてません。(<a href="/login">ログイン</a>|
<a href="/register">登録</a>)</p>
@endif --}}

    gennsinnsitai
    <form method="GET" action="/postingScreen">
        @csrf
        <input type="submit" name="postingScreen" value="掲載中案件">
        </form>

    <form method="GET" action="/approvalIndex">
        @csrf
        <input type="submit" name="approvalIndex" value="承認待ち">
        </form>
    
    <form method="GET" action="/listingConfirmation">
        @csrf
        <input type="submit" name="listingConfirmation" value="過去契約一覧">
        </form>
        
    <form method="GET" action="{{route('matter.add')}}">
        @csrf
        <input type="submit" name="matterCreate" value="案件掲載">
        </form>

@endsection