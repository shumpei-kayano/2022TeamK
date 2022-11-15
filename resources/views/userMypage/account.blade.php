@extends('layouts.app')

@section('title')
    アカウント登録
@endsection

@section('content')

<h1>アカウント情報</h1>
{{ $user->name }}
{{ $user->email }}

    <form action='{{ route('account_edit') }}' method="get">
        @csrf
        <button type="submit" class="nes-btn is-primary">へんしゅう</button>
    </form>

@endsection