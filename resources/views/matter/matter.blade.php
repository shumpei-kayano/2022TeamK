@extends('layouts.app')

@section('content')
{{-- @if (Auth::check())
<p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
@else
<p>※ログインしてません。(<a href="/login">ログイン</a>|
<a href="/register">登録</a>)</p>
@endif --}}

<a href="{{ route('matter.add') }}">案件掲載</a>

@endsection
