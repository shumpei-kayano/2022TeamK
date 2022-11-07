@extends('layouts.app')

@section('content')
{{-- @if (Auth::check())
<p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
@else
<p>※ログインしてません。(<a href="/login">ログイン</a>|
<a href="/register">登録</a>)</p>
@endif --}}

<form action="{{ route('matter.create')}}" method="post">
    @csrf
    <input type="text" class="" placeholder="会社名"
            aria-describedby="basic-addon2" name="name">
<br>        

    <select name="occupation" >
        @foreach ($occupations as $occupation)
            <option value="{{$occupation->id}}">{{$occupation->occupation_name}}</option> 
        @endforeach
    </select>
<br>

    <input type="text" class="" placeholder="連絡先" 
            aria-describedby="basic-addon2" name="tel">
<br>

    <input type="text" class="" placeholder="案件名" 
            aria-describedby="basic-addon2" name="matter_name">
<br>

    <input type="text" class="" placeholder="カテゴリー"
            aria-describedby="basic-addon2" name="category">
<br>

    <input type="text" class="" placeholder="案件内容"
            aria-describedby="basic-addon2" name="matter_">
<br>

    <input type="text" class="" placeholder="カテゴリー"
            aria-describedby="basic-addon2" name="category">
<br>

    <input type="text" class="" placeholder="カテゴリー"
            aria-describedby="basic-addon2" name="category">
<br>

<input type="submit" value="送信">
</form>

@endsection
