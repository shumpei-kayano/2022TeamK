@extends('layouts.ap')

@section('content')

<form action="{{ route('portfolio_remove') }}" method="post">
    @csrf
    <input type="submit" value='削除'>
</form>

@endsection