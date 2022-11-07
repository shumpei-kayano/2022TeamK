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

    <input type="text" class="" placeholder="求めるスキル"
            aria-describedby="basic-addon2" name="skill">
<br>

    <input type="text" class="" placeholder="期限"
            aria-describedby="basic-addon2" name="deadline">
<br>

    <input type="text" class="" placeholder="特記事項"
            aria-describedby="basic-addon2" name="remark">
<br>

    <input type="text" class="" placeholder="募集人数"
            aria-describedby="basic-addon2" name="number_of_person">
<br>

<label>ランク
<select name="rank" id="rank">
        @foreach ($rank_of_difficulties as $item)
            <option value="{{$item->id}}">{{$item->rank}}</option> 
        @endforeach
</select>
</label>
<br>

<input type="submit" value="送信">
</form>

@endsection
