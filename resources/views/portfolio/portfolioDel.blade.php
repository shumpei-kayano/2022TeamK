@extends('layouts.app')

@section('content')

<form action="{{ route('portfolio_remove') }}" method="post">
    <div class="p-form">
    @csrf
    <input type="submit" value='削除'>
    </div>
</form>

@endsection