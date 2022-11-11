@extends('layouts.ap')

@section('title')
    アカウント登録
@endsection

@section('main')

<h1>アカウント情報</h1>
{{ $user->name }}
{{ $user->email }}

    <form action='{{ route('account_edit') }}' method="get">
        @csrf
        <input type="submit" value="編集">
    </form>

@endsection