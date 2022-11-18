@extends('layouts.app')

@section('title','ポートフォリオ削除')

@section('content')

<form action="{{ route('portfolio_remove') }}" method="post">
    <div class="p-form">
    @csrf
    <input type="submit" value='削除'>
    </div>
</form>

@endsection